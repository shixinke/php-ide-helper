<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Route_Simple
*/
final class Yaf_Route_Simple
{
    /**
     * @var unknown $controller 
     * (Yaf >= 3.0.2)
     * 控制器名
     * @access protected
    protected $controller;

    /**
     * @var unknown $module 
     * (Yaf >= 3.0.2)
     * 模块名
     * @access protected
    protected $module;

    /**
     * @var unknown $action 
     * (Yaf >= 3.0.2)
     * 动作名
     * @access protected
    protected $action;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @param  mixed $module_name 
     * @param  mixed $controller_name 
     * @param  mixed $action_name 
     * @return 
     */
    public function __construct($module_name, $controller_name, $action_name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *路由请求
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public function route($request)
    {
    }

    /**
     * 
     *(Yaf >= 2.3.2)
     *组合uri，路由解析的逆操作
     * @example 
     * @param  mixed $info 
     * @param  mixed $query 
     * @return 
     */
    public function assemble($info, $query)
    {
    }

}

