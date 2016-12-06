<?php
class Tool
{
    public static function getConstants(ReflectionExtension $reflection)
    {
        $constants = $reflection->getConstants();
        $arr = array();
        foreach($constants as $k=>$v)
        {
            $arr[$k] = array(
                'value'=>$v,
                'comment'=>''
            );

        }
        return $arr;
    }

    public static function getLocalConstants($prefix)
    {
        $constants = get_defined_constants();
        $arr = array();
        foreach($constants as $constant=>$v) {
            if (strpos($constant, $prefix.'_') === 0) {
                $arr[$constant] = array(
                    'value'=>$v,
                    'comment'=>''
                );
            }
        }
        return $arr;
    }

    public static function getIniEntries(ReflectionExtension $reflection)
    {
        $entries = $reflection->getINIEntries();
        $arr = array();
        foreach($entries as $key=>$value) {
            $arr[$key] = array(
                'value'=>$value,
                'comment'=>''
            );
        }
        return $arr;
    }

    public static function getFunctions(ReflectionExtension $reflection)
    {
        $functions = $reflection->getFunctions();
        $arr = array();
        foreach($functions as $func) {
            $name = $func->getName();
            $arr[$name]['comment'] = $func->getDocComment();
            $arr[$name]['parameters'] = array();
            $params = $func->getParameters();
            foreach($params as $param) {
                $paramName = $param->getName();
                $type = '';
                if ($param->hasType()) {
                    $type = $param->getType();
                }

                $arr[$name]['parameters'][$paramName] = array(
                    'comment'=>'',
                    'type'=>$type
                );
            }
        }
        return $arr;
    }

    public static function getClassNames(ReflectionExtension $reflection)
    {
        $classNames = $reflection->getClasses();
        $arr = array();
        foreach($classNames as $className) {
            $name = $className->getName();
            $arr[$name]['object'] = $className;
            $arr[$name]['comment'] = $className->getDocComment();
            $arr[$name]['namespace'] = $className->getNamespaceName();
            $parentClass = $className->getParentClass();
            if ($parentClass) {
                $arr[$name]['extends'] = $parentClass->getName();
            }
            if ($className->isAbstract()) {
                $arr[$name]['isAbstract'] = 1;
            }
            if ($className->isFinal()) {
                $arr[$name]['isFinal'] = 1;
            }
            if ($className->isInterface()) {
                $arr[$name]['isInterface'] = 1;
            }
        }
        return $arr;
    }

    public static function getLocalFunctions($prefix = '')
    {
        $functions = get_defined_functions();
        $arr = array();
        foreach($functions['user'] as $function) {
            if (strpos($function, $prefix.'_') === 0) {
                $func = new ReflectionFunction($function);
                $name = $function;
                $arr[$name]['comment'] = $func->getDocComment();
                $arr[$name]['parameters'] = array();
                $params = $func->getParameters();
                foreach($params as $param) {
                    $paramName = $param->getName();
                    $type = '';
                    if ($param->hasType()) {
                        $type = $param->getType();
                    }

                    $arr[$name]['parameters'][$paramName] = array(
                        'comment'=>'',
                        'type'=>$type
                    );
                }
            }

        }
        return $arr;
    }

    public static function getLocalClassNames($prefix = '', $namespace = false)
    {
        $classNames = get_declared_classes();
        $arr = array();
        $delimiter = $namespace ? '\\' : '_';
        foreach($classNames as $className) {
            if (strpos($className, $prefix.$delimiter) === 0) {
                $classObj = new ReflectionClass($className);
                $name = $className;
                $arr[$name]['object'] = $classObj;
                $arr[$name]['comment'] = $classObj->getDocComment();
                $arr[$name]['namespace'] = $classObj->getNamespaceName();
                $parentClass = $classObj->getParentClass();
                if ($parentClass) {
                    $arr[$name]['extends'] = $parentClass->getName();
                }
                if ($classObj->isAbstract()) {
                    $arr[$name]['isAbstract'] = 1;
                }
                if ($classObj->isFinal()) {
                    $arr[$name]['isFinal'] = 1;
                }
                if ($classObj->isInterface()) {
                    $arr[$name]['isInterface'] = 1;
                }
            }

        }
        return $arr;
    }

    public static function getConsts(ReflectionClass $reflection)
    {
        $arr = array();
        $consts = $reflection->getConstants();
        foreach($consts as $const) {
            $arr[$const]['comment'] = '';
        }
    }

    public static function getProperties(ReflectionClass $reflection)
    {
        $arr = array();
        $properties =  $reflection->getProperties();
        $defaultProperties = $reflection->getDefaultProperties();
        foreach($properties as $property) {
            $name = $property->getName();
            if($property->isPrivate()) {
                $arr[$name]['access'] = 'private';
            } else if($property->isProtected()) {
                $arr[$name]['access'] = 'protected';
            } else {
                $arr[$name]['access'] = 'public';
            }
            $arr[$name]['comment'] = $property->getDocComment();
            $arr[$name]['isStatic'] = $property->isStatic();
            if (isset($defaultProperties[$name])) {
                $arr[$name]['value'] = $defaultProperties[$name];
            } else {
                if ($arr[$name]['isStatic'] && $property->isPublic()) {
                    $arr[$name]['value'] = $property->getValue();
                }
            }
        }
        return $arr;
    }

    public static function getMethods(ReflectionClass $reflection)
    {
        $methods =  $reflection->getMethods();
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
            if ($method->isFinal()) {
                $arr[$name]['isFinal'] = 1;
            }
            if ($method->isAbstract()) {
                $arr[$name]['isAbstract'] = 1;
            }
            $arr[$name]['comment'] = $method->getDocComment();
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
                $arr[$name]['parameters'][$paramName]['comment'] = '';
                $arr[$name]['parameters'][$paramName]['type'] = $type;
                if ($param->isDefaultValueAvailable()) {
                    $arr[$name]['parameters'][$paramName]['value'] = $param->getDefaultValue();
                }
            }
        }
        return $arr;
    }

    public static function export($prefix, $isLocal = false)
    {
        $data = array();
        if ($isLocal) {
            $constName = strtoupper($prefix).'_VERSION';
            $data['comment'] = '';
            $data['constants'] = self::getLocalConstants($prefix);
            $data['version'] = isset($data['constants'][$constName]) ? $data['constants'][$constName]['value'] : '';
            $data['ini'] = array();
            $data['functions'] = self::getLocalFunctions($prefix);
            $classNames = self::getLocalClassNames($prefix);
        } else {
            $lower = strtolower($prefix);
            $upper = strtoupper($prefix);
            $ext = new ReflectionExtension($upper);
            $data['version'] = $ext->getVersion();
            $data['comment'] = '';
            $data['constants'] = self::getConstants($ext);
            $data['ini'] = self::getIniEntries($ext);
            $data['functions'] = self::getFunctions($ext);
            $classNames = self::getClassNames($ext);
        }

        foreach($classNames as $k=>$className) {
            $data['classes'][$k] = $className;
            $data['classes'][$k]['consts'] = self::getConsts($className['object']);
            $data['classes'][$k]['properties'] = self::getProperties($className['object']);
            $data['classes'][$k]['methods'] = self::getMethods($className['object']);
        }
        return $data;
    }




}
