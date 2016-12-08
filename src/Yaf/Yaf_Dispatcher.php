<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Dispatcher
*/
final class Yaf_Dispatcher
{
    /**
     * @var unknown $_router 
     * (Yaf >= 3.0.2)
     * 路由器对象.
     * @access protected
    protected $_router;

    /**
     * @var unknown $_view 
     * (Yaf >= 3.0.2)
     * 视图对象.
     * @access protected
    protected $_view;

    /**
     * @var unknown $_request 
     * (Yaf >= 3.0.2)
     * 当前请求对象（包含请求的所有信息）.
     * @access protected
    protected $_request;

    /**
     * @var unknown $_plugins 
     * (Yaf >= 3.0.2)
     * 已注册的插件对象
     * @access protected
    protected $_plugins;

    /**
     * @var unknown $_instance 
     * (Yaf >= 3.0.2)
     * yaf_Dispatcher实现了单例模式，此属性保存当前实例.
     * @access protected
    protected static  $_instance;

    /**
     * @var unknown $_auto_render 
     * (Yaf >= 3.0.2)
     * 自动渲染功能开关，默认1.
     * 自动渲染是指根据当前请求的控制器Controller和动作Action自动寻找模块文件，加载与渲染模块，之后返回结果或者输出.
     * 如果设置为0，$this->_instantly_flush，$this->_return_response的设置将无效，也即：
     * yaf_Dispatcher::getInstance()->flushInstantly($flag);
     * yaf_Dispatcher::getInstance()->returnResponse($flag);
     * 设置无效，并且不会渲染模板.
     * @access protected
    protected $_auto_render    =    '1';

    /**
     * @var unknown $_return_response 
     * (Yaf >= 3.0.2)
     * 返回包含请求正文的响应对象开关，默认为0.
     * 默认情况下，Yaf的自动渲染查找并渲染模板（render，并非display），渲染结果写入yaf_Response_Abstract实例的_body属性，
     * 在分发器结束分发之后，输出_body（数组遍历输出）属性的值，并清空_body.
     * 设置此属性为1，分发器结束分发之后，不会输出和清空_body，可以通过yaf_Application的run()，yaf_Dispatcher的方法dispatch()，
     * 或者yaf_Controller_Abstract的getResponse()等方法的调用返回响应对象，
     * 进而调用yaf_Response_Abstract实例的getBody()方法获取响应正文.此属性依赖$this->_auto_render的设置，
     * 当$this->_auto_render=1时，响应正文包括渲染模板的结果，反之则不包括.
     * @access protected
    protected $_return_response    =    '';

    /**
     * @var unknown $_instantly_flush 
     * (Yaf >= 3.0.2)
     * 立即输出响应正文开头，默认为0.
     * 默认情况下，Yaf自动渲染调用yaf_Controller_Abstract的render方法，渲染模板.
     * 当此属性设置为1时，Yaf调用yaf_Controller_Abstract的display方法，直接渲染并输出，但不设置yaf_Response_Abstract实例的_body属性.
     * @access protected
    protected $_instantly_flush    =    '';

    /**
     * @var unknown $_default_module 
     * (Yaf >= 3.0.2)
     * 默认模块名
     * @access protected
    protected $_default_module;

    /**
     * @var unknown $_default_controller 
     * (Yaf >= 3.0.2)
     * 默认控制器
     * @access protected
    protected $_default_controller;

    /**
     * @var unknown $_default_action 
     * (Yaf >= 3.0.2)
     * 默认动作名
     * @access protected
    protected $_default_action;

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
     *重置__clone魔术方法，防止克隆yaf_Dispatcher（因为是单例模式）.
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
     *开启自动渲染模板
     * @example 
     * @return 
     */
    public function enableView()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *关闭自动渲染模板
     * @example 
     * @return 
     */
    public function disableView()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *初始化视图对象
     * @example 
     * @param  mixed $templates_dir 
     * @param mixed $options (Yaf >= 3.0.2)
初始化视图对象
     * @return 
     */
    public function initView($templates_dir, $options)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置视图对象
     * @example 
     * @param YafX_View_Interface $view (Yaf >= 3.0.2)
设置视图对象
     * @return 
     */
    public function setView($view)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求对象（在命令行或者其他API模式下构造请求很有用）
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
设置请求对象（在命令行或者其他API模式下构造请求很有用）
     * @return 
     */
    public function setRequest($request)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回应用实例
     * @example 
     * @return 
     */
    public function getApplication()
    {
    }

    /**
     * 
     *返回路由器实例
     * @example 
     * @return 
     */
    public function getRouter()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回请求对象实例
     * @example 
     * @return 
     */
    public function getRequest()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置一个用户定义的错误处理函数（封装了PHP内置的set_error_handler函数）
     * @example 
     * @param callable $callback (Yaf >= 3.0.2)
设置一个用户定义的错误处理函数（封装了PHP内置的set_error_handler函数）
     * @param  mixed $error_types 
     * @return 
     */
    public function setErrorHandler(Callable $callback, $error_types)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置默认模块
     * @example 
     * @param string $module (Yaf >= 3.0.2)
设置默认模块
     * @return 
     */
    public function setDefaultModule($module)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置默认的控制器
     * @example 
     * @param string $controller (Yaf >= 3.0.2)
设置默认的控制器
     * @return 
     */
    public function setDefaultController($controller)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置默认的动作名
     * @example 
     * @param  mixed $action 
     * @return 
     */
    public function setDefaultAction($action)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置或者返回$this->_return_response属性的值
     *当传递$flag参数时，设置$this->_return_response=$flag，并返回Dispatcher
     *当不传递任何参数时，返回$this->_return_response当前值
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function returnResponse($flag)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置或者返回$this->_auto_render属性的值
     *当传递$flag参数时，设置$this->_auto_render=$flag，并返回Dispatcher
     *当不传递任何参数时，返回$this->_auto_render属性的值
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function autoRender($flag)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置或者返回$this->_instantly_flush属性的值
     *当传递$flag参数时，设置$this->_instantly_flush=$flag，并返回Dispatcher
     *当不传递任何参数时，返回$this->_instantly_flush属性的值
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function flushInstantly($flag)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回当前yaf_Dispatcher实例（单例模式）
     * @example 
     * @return 
     */
    public static  function getInstance()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *手动分发请求
     * @example 
     * @param YafX_Request_Abstract $request (Yaf >= 3.0.2)
手动分发请求
     * @return 
     */
    public function dispatch($request)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *开启/关闭异常抛出或返回当前状态
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function throwException($flag)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *开启/关闭自动异常捕获功能或返回当前状态
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function catchException($flag)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *注册插件
     * @example 
     * @param YafX_Plugin_Abstract $plugin (Yaf >= 3.0.2)
注册插件
     * @return 
     */
    public function registerPlugin($plugin)
    {
    }

}

