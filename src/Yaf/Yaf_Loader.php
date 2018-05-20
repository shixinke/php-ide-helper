<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf类加载器
*/
final class Yaf_Loader
{
    /**
     * @var string $_library 
     * 当前应用本地类库目录
     * @access protected
     */
    protected $_library;

    /**
     * @var string $_global_library 
     * 全局类库目录
     * @access protected
     */
    protected $_global_library;

    /**
     * @var Yaf_Loader $_instance 
     * 当前Loader实例（单例模式）
     * @access protected
     */
    protected static  $_instance;

    /**
     * 
     *__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    
    }

    /**
     * 
     *重置__clone魔术方法，防止克隆yaf_Loader（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *__destruct魔术方法.
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    
    }

    /**
     * 
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    
    }

    /**
     * 
     *自动装载类
     * @example 
     * @param string $class 类名
     * @return 
     */
    public function autoload(string $class)
    {
    
    }

    /**
     * 
     *获取yaf_Loader实例
     * @example 
     * @param string $library 本地类库目录
     * @param string $global 全局类库目录
     * @return Yaf_Loader
     */
    public static  function getInstance(string $library, string $global): Yaf_Loader
    {
    
    }

    /**
     * 
     *注册本地类前缀
     * @example 
     * @param mixed $namespace 一个或者多个类前缀
     * @return 
     */
    public function registerLocalNamespace($namespace)
    {
    
    }

    /**
     * 
     *获取当前已经注册的本地类前缀
     * @example 
     * @return string
     */
    public function getLocalNamespace(): string
    {
    
    }

    /**
     * 
     *清空已注册的本地类前缀
     * @example 
     * @return 
     */
    public function clearLocalNamespace()
    {
    
    }

    /**
     * 
     *判断一个类, 是否是本地类.
     * @example 
     * @param string $class_name 类名
     * @return bool
     */
    public function isLocalName(string $class_name): bool
    {
    
    }

    /**
     * 
     *手动导入文件
     * @example 
     * @param string $file include的全路径文件名
     * @return 
     */
    public static  function import(string $file)
    {
    
    }

    /**
     * 
     *设置本地或者全局类库目录
     * @example 
     * @param string $library 目录路径
     * @param bool $global 是否为全局类库
     * @return 
     */
    public function setLibraryPath(string $library, bool $global = false)
    {
    
    }

    /**
     * 
     *获取本地或者全局类库目录
     * @example 
     * @param bool $global 是否全局类库
     * @return string|bool
     */
    public function getLibraryPath(bool $global = false): ?string
    {
    
    }

}

