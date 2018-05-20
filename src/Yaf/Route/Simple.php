<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*简单路由
*/
namespace Yaf\Route;
final class Simple implements \Yaf\Route_Interface
{
    /**
     * @var string $controller 
     * 控制器名
     * @access protected
     */
    protected $controller;

    /**
     * @var string $module 
     * 模块名
     * @access protected
     */
    protected $module;

    /**
     * @var string $action 
     * 动作名
     * @access protected
     */
    protected $action;

    /**
     * 
     *构造方法
     * @example 
     * @param string $module 模块名
     * @param string $controller 控制器名
     * @param string $action 动作名
     * @return 
     */
    public function __construct(string $module, string $controller, string $action)
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
     *组装请求
     * @example 
     * @param array $info 路径信息
     * @param array $query 查询字符串
     * @return string
     */
    public function assemble(Array $info, Array $query): string
    {
    
    }

}

