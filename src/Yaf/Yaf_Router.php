<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf路由器
*/
final class Yaf_Router
{
    /**
     * @var array $_routes 
     * 路由器已有的路由协议栈, 默认的栈底总是名为"default"的Route_Static路由协议的实例
     * @access protected
     */
    protected $_routes    =    array();

    /**
     * @var int $_current 
     * 在路由成功后, 路由生效的路由协议实例的索引
     * @access protected
     */
    protected $_current;

    /**
     * 
     *构造方法
     * @example 
     * @return 
     */
    public function __construct()
    {
    
    }

    /**
     * 
     *往Router中添加新的路由
     * @example 
     * @param string $name 别名
     * @param Yaf_Route_Interface $route 路由对象
     * @return bool
     */
    public function addRoute(string $name, Yaf_Route_Interface $route): bool
    {
    
    }

    /**
     * 
     *向Router中添加配置文件或者配置数组定义的路由
     * @example 
     * @param Yaf_Config_Abstract $config 配置对象
     * @return bool
     */
    public function addConfig(Yaf_Config_Abstract $config): bool
    {
    
    }

    /**
     * 
     *路由请求
     * @example 
     * @param Yaf_Request_Abstract $request 请求对象
     * @return bool
     */
    public function route(Yaf_Request_Abstract $request): bool
    {
    
    }

    /**
     * 
     *获取路由名对应的路由协议实例
     * @example 
     * @param string $name 路由名
     * @return string
     */
    public function getRoute(string $name): string
    {
    
    }

    /**
     * 
     *获取已注册的所有路由协议
     * @example 
     * @return array
     */
    public function getRoutes(): array
    {
    
    }

    /**
     * 
     *获取当前路由成功的路由协议实例
     * @example 
     * @return string
     */
    public function getCurrentRoute(): string
    {
    
    }

}

