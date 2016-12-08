<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Loader
*/
final class Yaf_Loader
{
    /**
     * @var unknown $_library 
     * (Yaf >= 3.0.2)
     * 当前应用本地类库目录
     * @access protected
    protected $_library;

    /**
     * @var unknown $_global_library 
     * (Yaf >= 3.0.2)
     * 全局类库目录
     * @access protected
    protected $_global_library;

    /**
     * @var unknown $_instance 
     * (Yaf >= 3.0.2)
     * 当前Loader实例（单例模式）
     * @access protected
    protected static  $_instance;

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__clone魔术方法，防止克隆yaf_Loader（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *自动装载类
     * @example 
     * @param  mixed $class_name 
     * @return 
     */
    public function autoload($class_name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取yaf_Loader实例
     * @example 
     * @param  mixed $local_library_path 
     * @param  mixed $global_library_path 
     * @return 
     */
    public static  function getInstance($local_library_path, $global_library_path)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *注册本地类前缀
     * @example 
     * @param  mixed $name_prefix 
     * @return 
     */
    public function registerLocalNamespace($name_prefix)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前已经注册的本地类前缀
     * @example 
     * @return 
     */
    public function getLocalNamespace()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空已注册的本地类前缀
     * @example 
     * @return 
     */
    public function clearLocalNamespace()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断一个类, 是否是本地类.
     * @example 
     * @param  mixed $class_name 
     * @return 
     */
    public function isLocalName($class_name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *手动导入文件
     * @example 
     * @param  mixed $file 
     * @return 
     */
    public static  function import($file)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置本地或者全局类库目录
     * @example 
     * @param  mixed $library_path 
     * @param  mixed $is_global 
     * @return 
     */
    public function setLibraryPath($library_path, $is_global)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取本地或者全局类库目录
     * @example 
     * @param  mixed $is_global 
     * @return 
     */
    public function getLibraryPath($is_global)
    {
    }

}

