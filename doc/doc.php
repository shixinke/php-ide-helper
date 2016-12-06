<?php
require_once(__DIR__.'/tool.php');
class Doc
{
    private $extension;
    const DICT_PATH = './dict/';
    const NOTES_PATH = './notes/';
    const DOC_PATH = './output/';
    private static $_dicts = array();
    private static $_exports = array();
    public function __construct($extension)
    {
        if (!is_array($extension)) {
            $this->extension[] = $extension;
        } else {
            $this->extension = array_unique($extension);
        }
    }

    public function create()
    {
        foreach($this->extension as $ext) {
            if (!extension_loaded($ext)) {
                echo $ext.'扩展尚未安装或未开启该扩展';
                continue;
            }
            $data = $this->compare($ext);
            $this->__createDoc($ext, $data);
        }
    }

    private function __createDoc($ext, $data)
    {
        $dict = $this->getDict();

        $consts = $this->getConsts();
        $properties = $this->getProperties();
        $methods = $this->getMethods();
        $content = "<?php\n/**\n* Yac自动补全类(基于最新的".YAC_VERSION."版本)\n* @author shixinke(http://www.shixinke.com)\n* @modified ".date("Y/m/d")."\n*/\n";

        $content .= "\n/**\n     *".$data['comment']."\n";
        if (empty($data['ini'])) {
            $content .= "    * php.ini配置选项: \n";
            foreach ($data['ini'] as $k=>$v) {
                $content .= "     *   ".$k.'='.$v['value'].' ;('.$v['comment'].')'."\n";
            }
            $content .= "\n";
        }
        foreach($data['constants'] as $k=>$v){
            if (!is_numeric($v['value'])) {
                $v = "'".$v["value"]."'";
            }
            $content .= "/**\n".$v['comment']."\n*/\n";
            $content .= "define('".$k."', ".$v.");\n";
        }
        foreach($data['functions'] as $m=>$mv) {
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

        if (isset($data['classes']) && !empty($data['classes'])) {
            foreach($data['classes'] as $class=>$value) {
                $content .= "\nclass Yac\n{\n";
                foreach($value['consts'] as $const=>$val) {
                    if (isset($dict['properties'][$const])) {
                        $content .= '    //'.$dict['properties'][$const]['comment']."\n";
                    }
                    $content .= '    '.$const.' = '.$val.";\n";
                }
                foreach($value['properties'] as $p=>$pv) {
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
                foreach($value['methods'] as $m=>$mv) {
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
            }
            $content .= "\n";
        }

        return file_put_contents(self::DOC_PATH.$ext.'.php', $content);
    }

    public function createDict()
    {
        foreach($this->extension as $ext) {
            if (!extension_loaded($ext)) {
                echo $ext.'扩展尚未安装或未开启该扩展';
                continue;
            }
            $data = Tool::export($ext);
            $tmp = $data;
            unset($tmp['classes']);
            $this->__createDict($ext, $tmp);
            foreach($data['classes'] as $k=>$v) {
                $fileName = str_replace("\\", "_", $k);
                $this->__createDict($fileName, $v);
            }
        }
    }

    private function __createDict($ext, $data)
    {
        $content = json_encode($data);
        return file_put_contents(self::DICT_PATH.$ext.'.json', $content);
    }

    public function getDict($extName)
    {
        if (empty(self::$_dicts) || !isset(self::$_dicts[$extName])) {
            $files = scandir(self::DICT_PATH);
            $arr = array();
            foreach($files as $file) {
                if (strpos($file, strtolower($extName)) == 0) {
                    $content = file_get_contents(self::DICT_PATH.$file);
                    $arr[str_replace('.json', '', $file)] = json_decode($content, true);
                }
            }
            self::$_dicts[$extName] = $arr;
        }
        return self::$_dicts[$extName];
    }

    public function getExports($extName)
    {
        if (empty(self::$_exports) || !isset(self::$_exports[$extName])) {
            self::$_exports[$extName] = Tool::export($extName);
        }
        return self::$_exports[$extName];
    }

    public function compare($extName)
    {
        $fileName = self::NOTES_PATH.strtolower($extName).'.php';
        $dict = $this->getDict($extName);
        $exportData = $this->getExports($extName);
        if (is_file($fileName)) {
            require_once($fileName);
            $localName = $extName.'X';
            $noteData = Tool::export($localName, true);
        }
        if (isset($dict[$extName]['comment']) && ($dict[$extName]['comment'] != '')) {
            $exportData['comment'] = $dict[$extName]['comment'];
        }
        foreach($exportData['constants'] as $k=>$v) {
            if (isset($dict[$extName]['constants'][$k])) {
                $exportData['constants'][$k]['comment'] = $dict[$extName]['constants'][$k]['comment'];
            } else {
                $dict[$extName]['constants'][$k] = $exportData['constants'][$k];
            }
        }
        foreach($exportData['ini'] as $k=>$v) {
            if (isset($dict[$extName]['ini'][$k])) {
                $exportData['ini'][$k]['comment'] = $dict[$extName]['ini'][$k]['comment'];
            } else {
                $dict[$extName]['ini'][$k] = $exportData['ini'][$k];
            }
        }

        foreach($exportData['functions'] as $k=>$v) {
            $noteFunc = str_replace($extName, $extName.'X', $k);
            if (isset($dict[$extName]['functions'][$k])) {
                $exportData['functions'][$k]['comment'] = $dict[$extName]['functions'][$k]['comment'];
                if (isset($dict[$extName]['functions'][$k]['parameters']) && !empty($dict[$extName]['functions'][$k]['parameters'])) {
                    $exportData['functions'][$k]['parameters'] = $dict[$extName]['functions'][$k]['parameters'];
                } else {
                    $dict[$extName]['functions'][$k]['parameters'] = $exportData['functions'][$k]['parameters'];
                }
            }
        }
        foreach($exportData['classes'] as $k=>$v) {
            $fileName = str_replace("\\", '_', $k);
            if (isset($dict[$fileName]['comment']) && ($dict[$fileName]['comment'] != '')) {
                $exportData['classes'][$k]['comment'] = $dict[$fileName]['comment'];
            }
            foreach($v['consts'] as $key=>$val) {
                if (isset($dict[$fileName]['consts'][$key]['comment']) && ( $dict[$fileName]['consts'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['consts'][$key]['comment'] = $dict[$fileName]['consts'][$key]['comment'];
                }
            }
            foreach($v['properties'] as $key=>$val) {
                if (isset($dict[$fileName]['properties'][$key]['comment']) && ( $dict[$fileName]['properties'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['consts'][$key]['comment'] = $dict[$fileName]['properties'][$key]['comment'];
                }
            }
            foreach($v['methods'] as $key=>$val) {
                if (isset($dict[$fileName]['methods'][$key]['comment']) && ( $dict[$fileName]['methods'][$key]['comment'] != '')) {
                    $exportData['classes'][$k]['methods'][$key]['comment'] = $dict[$fileName]['methods'][$key]['comment'];
                }
            }
        }
        return $exportData;
    }
}

$extensions = array(
    'swoole', 'Redis'
);

$doc = new Doc($extensions);
//$doc->createDict();
$doc->create();