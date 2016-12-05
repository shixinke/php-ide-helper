<?php
class YaconfDoc
{
    const DICT_FILE = './dict/yaconf.json';
    const DOC_FILE = './doc/Yaconf.php';
    const CLASS_NAME = 'Yaconf';
    private static $_dict = array();
    private $obj;
    public function __construct()
    {
        $this->obj = new ReflectionClass(self::CLASS_NAME);
    }

    public function getConstants()
    {
        $constants = get_defined_constants();
        $arr = array();
        foreach($constants as $k=>$v)
        {
            if (substr($k, 0, 4) == strtoupper(self::CLASS_NAME).'_') {
                $arr[$k] = $v;
            }

        }
        return $arr;
    }

    public function getConsts()
    {
        return $this->obj->getConstants();
    }


    public function getMethods()
    {
        $methods =  $this->obj->getMethods();
        $arr = array();
        foreach($methods as $method) {
            $name = $method->getName();
            if($method->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if($method->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            $arr[$name]['isStatic'] = $method->isStatic();
            $params = $method->getParameters();
            foreach($params as $param) {
                $paramName = $param->getName();
                $type = 'unknown';
                if ($param->hasType()) {
                    $type = $param->getType();
                } else {
                    if ($param->isArray()) {
                        $type = 'array';
                    } else if($param->isCallable()) {
                        $type = 'callable';
                    }
                }
                $arr[$name]['parameters'][$paramName]['type'] = $type;
                if ($param->isDefaultValueAvailable()) {
                    $arr[$name]['parameters'][$paramName]['value'] = $param->getDefaultValue();
                }

            }
        }
        return $arr;
    }

    /**
     * 获取类的属性
     * @return array
     */
    public function getProperties()
    {
        $arr = array();
        $properties =  $this->obj->getProperties();
        foreach($properties as $property) {
            $name = $property->getName();
            if($property->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if($property->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            $arr[$name]['isStatic'] = $property->isStatic();
            if ($property->isPublic()) {
                $arr[$name]['value'] = $property->getValue();
            } else {
                $reflectionProperty = $this->obj->getProperty($name);
                $reflectionProperty->setAccessible(true);
                $className = self::CLASS_NAME;
                $arr[$name]['value'] = $reflectionProperty->getValue(new $className);
            }
        }
        return $arr;
    }

    public function create()
    {
        $dict = $this->getDict();
        $constants = $this->getConstants();
        $consts = $this->getConsts();
        $properties = $this->getProperties();
        $methods = $this->getMethods();
        $content = "<?php\n/**\n* ".self::CLASS_NAME."自动补全类(基于最新的1.0.3版本)\n* @author shixinke(http://www.shixinke.com)\n* @modified ".date("Y/m/d")."\n*/\n";

        foreach($constants as $k=>$v){
            if (!is_numeric($v)) {
                $v = "'$v'";
            }
            if (isset($dict['constants'][$k])) {
                $content .= '//'.$dict['constants'][$k]['comment']."\n";
            }
            $content .= "define('".$k."', ".$v.");\n";
        }
        $content .= "\nclass ".self::CLASS_NAME."\n{\n";
        foreach($consts as $const=>$val) {
            if (isset($dict['properties'][$const])) {
                $content .= '    //'.$dict['properties'][$const]['comment']."\n";
            }
            $content .= '    '.$const.' = '.$val.";\n";
        }
        foreach($properties as $p=>$pv) {
            if (isset($dict['properties'][$p])) {
                $content .= '    //'.$dict['properties'][$p]['comment']."\n";
            }
            $content .= '    '.$pv['access'];
            if ($pv['isStatic']) {
                $content .= ' static ';
            }
            $content .= " $".$p;
            if (!is_null($pv['value'])) {
                if ($pv['value'] == '') {
                    $pv['value'] = '""';
                }
                $content .= '    =    '.$pv['value'];
            }
            $content .=  ";\n";
        }
        foreach($methods as $m=>$mv) {
            $remark = '';
            $params = '';
            if (isset($mv['parameters'])) {
                foreach($mv['parameters'] as $param=>$paramValue) {
                    $remark .= "     * @param ";
                    if ($paramValue['type'] == 'array') {
                        $params .= 'Array $'.$param;
                        $remark .= 'array $'.$param;
                    } else if ($paramValue['type'] == 'callable') {
                        $params .= 'Callable $'.$param;
                        $remark .= 'callable $'.$param;
                    } else {
                        if ($paramValue['type'] == 'unknown') {
                            if (isset($dict['methods'][$m]['parameters'][$param]['type']) && ($dict['methods'][$m]['parameters'][$param]['type'] != '')) {
                                $remark .= $dict['methods'][$m]['parameters'][$param]['type'].' $'.$param;
                            } else {
                                $remark .= 'mixed $'.$param;
                            }

                        } else {
                            $remark .= $paramValue['type'].' $'.$param;
                        }
                        $params .= '$'.$param;
                    }
                    if (isset($paramValue['value'])) {
                        $params .= " = ".$paramValue['value'];
                    }
                    if (isset($dict['methods'][$m]['parameters'][$param])) {
                        if (isset($dict['methods'][$m]['parameters'][$param]['comment'])) {
                            $remark .= ':'.$dict['methods'][$m]['parameters'][$param]['comment']." ";
                        }
                        if (isset($dict['methods'][$m]['parameters'][$param]['options']) && !empty($dict['methods'][$m]['parameters'][$param]['options'])) {
                            $remark .= '[备选值：';
                            foreach($dict['methods'][$m]['parameters'][$param]['options'] as $ok=>$ov) {
                                $remark .= $ov['value'].'('.$ov['comment'].')';
                            }
                            $remark .= ']';
                        }
                    }
                    $params .= ', ';
                    $remark .= "\n";
                }
                $params = trim($params);
                $params = trim($params, ',');

            }
            if (isset($dict['methods'][$m])) {
                $content .= "    /**\n     * ".$dict['methods'][$m]['comment']."\n";
                $content .= $remark;
                if (isset($dict['methods'][$m]['example'])) {
                    $content .= "     * @example ".$dict['methods'][$m]['example']."\n";
                }
                if (isset($dict['methods'][$m]['return'])) {
                    $content .= "     * @return ".$dict['methods'][$m]['return']."\n";
                }
                $content .= "     */\n";
            }
            $content .= '    '.$mv['access'];
            if ($mv['isStatic']) {
                $content .= ' static ';
            }
            $content .= " function ".$m."(";
            $content .= $params;
            $content .= ")\n    {\n";
            $content .=  "    }\n\n";
        }

        $content .= "}\n";
        return file_put_contents(self::DOC_FILE, $content);
    }

    public function createDict()
    {
        $arr = [];
        $constants = $this->getConstants();
        foreach($constants as $k=>$v) {
            $arr['constants'][$k] = array(
                'comment'=>''
            );
        }
        $consts = $this->getConsts();
        foreach($consts as $k=>$v) {
            $arr['consts'][$k] = array(
                'comment'=>''
            );
        }
        $properties = $this->getProperties();
        foreach($properties as $k=>$v) {
            $arr['properties'][$k] = array(
                'comment'=>''
            );
        }
        $methods = $this->getMethods();
        foreach($methods as $k=>$v) {
            $arr['methods'][$k] = array(
                'comment'=>'',
                'parameters'=>array(),
                'example'=>'',
                'return'=>''
            );
            if (isset($v['parameters'])) {
                foreach($v['parameters'] as $p=>$val) {
                    $arr['methods'][$k]['parameters'][$p] = array(
                        'comment'=>'',
                        'type'=>isset($val['type']) ? $val['type'] : '',
                        'options'=>array(
                            array(
                                'value'=>'',
                                'comment'=>''
                            )
                        ),
                        'extra'=>''
                    );
                }
            }

        }

        $content = json_encode($arr);
        return file_put_contents(self::DICT_FILE, $content);
    }

    public function getDict()
    {
        if (empty(self::$_dict)) {
            $content = file_get_contents(self::DICT_FILE);
            self::$_dict = json_decode($content, true);
        }
        return self::$_dict;
    }

    public function updateDict()
    {
        $dict = $this->getDict();
        $arr = [];
        $constants = $this->getConstants();
        foreach($constants as $k=>$v) {
            if (isset($dict['constants'][$k])) {
                $arr['constants'][$k] = $dict['constants'][$k];
            } else {
                $arr['constants'][$k] = array(
                    'comment'=>''
                );
            }

        }
        $consts = $this->getConsts();
        foreach($consts as $k=>$v) {
            if (isset($dict['consts'][$k])) {
                $arr['constants'][$k] = $dict['consts'][$k];
            } else {
                $arr['consts'][$k] = array(
                    'comment'=>''
                );
            }

        }
        $properties = $this->getProperties();
        foreach($properties as $k=>$v) {
            if (isset($dict['properties'][$k])) {
                $arr['properties'][$k] = $dict['properties'][$k];
            } else {
                $arr['properties'][$k] = array(
                    'comment'=>''
                );
            }

        }
        $methods = $this->getMethods();
        foreach($methods as $k=>$v) {
            if (isset($dict['methods'][$k])) {
                $arr['methods'][$k] = $dict['methods'][$k];
                unset($arr['methods'][$k]['parameters']);
            } else {
                $arr['methods'][$k] = array(
                    'comment' => '',
                    'parameters'=>array(),
                    'example'=>'',
                    'return'=>''
                );
            }
            if (isset($v['parameters'])) {
                foreach($v['parameters'] as $p=>$val) {
                    if (isset($dict['methods'][$k]['parameters'][$p])) {
                        $arr['methods'][$k]['parameters'][$p] = $dict['methods'][$k]['parameters'][$p];
                    } else {
                        $arr['methods'][$k]['parameters'][$p] = array(
                            'comment'=>'',
                            'type'=>isset($val['type']) ? $val['type'] : '',
                            'options'=>array(
                                array(
                                    'value'=>'',
                                    'comment'=>''
                                )
                            ),
                            'extra'=>''
                        );
                    }

                }
            }
        }
        $content = json_encode($arr);
        return file_put_contents(self::DICT_FILE, $content);
    }

}

$doc =new YaconfDoc();
var_dump($doc->create());