<?php
/**
* Yaf_Loader自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Loader
{

     /**

     */
    protected $_library;

     /**

     */
    protected $_global_library;

     /**

     */
    protected static  $_instance;
    /**
     * 
     * @example 
     * @return 
     */
    private function __construct()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __sleep()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    }

    /**
     * 
     * @param unknown $class_name: [备选值：()]
     * @example 
     * @return 
     */
    public function autoload($class_name)
    {
    }

    /**
     * 
     * @param unknown $local_library_path: [备选值：()]
     * @param unknown $global_library_path: [备选值：()]
     * @example 
     * @return 
     */
    public static  function getInstance($local_library_path, $global_library_path)
    {
    }

    /**
     * 
     * @param unknown $name_prefix: [备选值：()]
     * @example 
     * @return 
     */
    public function registerLocalNamespace($name_prefix)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getLocalNamespace()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function clearLocalNamespace()
    {
    }

    /**
     * 
     * @param unknown $class_name: [备选值：()]
     * @example 
     * @return 
     */
    public function isLocalName($class_name)
    {
    }

    /**
     * 
     * @param unknown $file: [备选值：()]
     * @example 
     * @return 
     */
    public static  function import($file)
    {
    }

    /**
     * 
     * @param unknown $library_path: [备选值：()]
     * @param unknown $is_global: [备选值：()]
     * @example 
     * @return 
     */
    public function setLibraryPath($library_path, $is_global)
    {
    }

    /**
     * 
     * @param unknown $is_global: [备选值：()]
     * @example 
     * @return 
     */
    public function getLibraryPath($is_global)
    {
    }

}
