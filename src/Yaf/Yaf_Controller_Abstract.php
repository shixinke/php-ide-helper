<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Controller_Abstract
*/
abstract class Yaf_Controller_Abstract
{
    /**
     * @var unknown $actions 
     * (Yaf >= 3.0.2)
     * 动作名与动作类文件路径映射数组
     * @access public
    public $actions;

    /**
     * @var unknown $_module 
     * (Yaf >= 3.0.2)
     * 当前请求的模块名
     * @access protected
    protected $_module;

    /**
     * @var unknown $_name 
     * (Yaf >= 3.0.2)
     * 当前请求的控制器名
     * @access protected
    protected $_name;

    /**
     * @var unknown $_request 
     * (Yaf >= 3.0.2)
     * 当前请求对象，包括请求的所有相关信息
     * @access protected
    protected $_request;

    /**
     * @var unknown $_response 
     * (Yaf >= 3.0.2)
     * 当前响应对象，保存响应的所有相关信息
     * @access protected
    protected $_response;

    /**
     * @var unknown $_invoke_args 
     * (Yaf >= 3.0.2)
     * 储存调用参数
     * @access protected
    protected $_invoke_args;

    /**
     * @var unknown $_view 
     * (Yaf >= 3.0.2)
     * 视图对象
     * @access protected
    protected $_view;

    /**
     * 
     *(Yaf >= 3.0.2)
     *渲染动作对应的模板，并返回结果
     * @example 
     * @param  mixed $tpl 
     * @param array $parameters 
     * @return 
     */
    protected function render($tpl, Array $parameters)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *渲染动作对应的模板，并直接输出结果
     * @example 
     * @param  mixed $tpl 
     * @param array $parameters 
     * @return 
     */
    protected function display($tpl, Array $parameters)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取请求对象
     * @example 
     * @return 
     */
    public function getRequest()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取响应对象
     * @example 
     * @return 
     */
    public function getResponse()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前模块名
     * @example 
     * @return 
     */
    public function getModuleName()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回视图对象
     * @example 
     * @return 
     */
    public function getView()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *初始化视图对象
     * @example 
     * @param array $options 
     * @return 
     */
    public function initView(Array $options)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $view_directory 
     * @return 
     */
    public function setViewpath($view_directory)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getViewpath()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *将当前的请求转交给另外的Action（对用户来说是透明的，相当于Web服务器的代理）.
     * @example 
     * @param  mixed $module 
     * @param  mixed $controller 
     * @param  mixed $action 
     * @param  mixed $parameters 
     * @return 
     */
    public function forward($module, $controller, $action, $parameters)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpboy.net/"））
     * @example 
     * @param  mixed $url 
     * @return 
     */
    public function redirect($url)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取全部调用参数
     * @example 
     * @return 
     */
    public function getInvokeArgs()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取指定调用参数名的值
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function getInvokeArg($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *屏蔽构造方法
     * @example 
     * @return 
     */
    public final  function __construct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *屏蔽克隆的魔术方法
     * @example 
     * @return 
     */
    private final  function __clone()
    {
    }

}

