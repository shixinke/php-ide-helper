<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*路由及请求分发器
*/
namespace Yaf;
final class Dispatcher
{
    /**
     * @var Yaf_Router $_router 
     * 路由器对象.
     * @access protected
     */
    protected $_router;

    /**
     * @var Yaf_View_Interface $_view 
     * 视图对象.
     * @access protected
     */
    protected $_view;

    /**
     * @var Yaf_Request_Abstract  $_request 
     * 当前请求对象（包含请求的所有信息）.
     * @access protected
     */
    protected $_request;

    /**
     * @var array $_plugins 
     * 已注册的插件对象
     * @access protected
     */
    protected $_plugins    =    array();

    /**
     * @var Yaf_Dispatcher $_instance 
     * yaf_Dispatcher实现了单例模式，此属性保存当前实例.
     * @access protected
     */
    protected static  $_instance;

    /**
     * @var int $_auto_render 
     * 自动渲染功能开关，默认1.
     * 自动渲染是指根据当前请求的控制器Controller和动作Action自动寻找模块文件，加载与渲染模块，之后返回结果或者输出.
     * 如果设置为0，$this->_instantly_flush，$this->_return_response的设置将无效，也即：
     * yaf_Dispatcher::getInstance()->flushInstantly($flag);
     * yaf_Dispatcher::getInstance()->returnResponse($flag);
     * 设置无效，并且不会渲染模板.
     * @access protected
     */
    protected $_auto_render    =    1;

    /**
     * @var int $_return_response 
     * 返回包含请求正文的响应对象开关，默认为0.
     * 默认情况下，Yaf的自动渲染查找并渲染模板（render，并非display），渲染结果写入yaf_Response_Abstract实例的_body属性，
     * 在分发器结束分发之后，输出_body（数组遍历输出）属性的值，并清空_body.
     * 设置此属性为1，分发器结束分发之后，不会输出和清空_body，可以通过yaf_Application的run()，yaf_Dispatcher的方法dispatch()，
     * 或者yaf_Controller_Abstract的getResponse()等方法的调用返回响应对象，
     * 进而调用yaf_Response_Abstract实例的getBody()方法获取响应正文.此属性依赖$this->_auto_render的设置，
     * 当$this->_auto_render=1时，响应正文包括渲染模板的结果，反之则不包括.
     * @access protected
     */
    protected $_return_response    =    0;

    /**
     * @var int $_instantly_flush 
     * 立即输出响应正文开头，默认为0.
     * 默认情况下，Yaf自动渲染调用yaf_Controller_Abstract的render方法，渲染模板.
     * 当此属性设置为1时，Yaf调用yaf_Controller_Abstract的display方法，直接渲染并输出，但不设置yaf_Response_Abstract实例的_body属性.
     * @access protected
     */
    protected $_instantly_flush    =    0;

    /**
     * @var string $_default_module 
     * 默认模块名
     * @access protected
     */
    protected $_default_module;

    /**
     * @var string $_default_controller 
     * 默认控制器
     * @access protected
     */
    protected $_default_controller;

    /**
     * @var string $_default_action 
     * 默认动作名
     * @access protected
     */
    protected $_default_action;

    /**
     * 
     *关闭自动渲染模板
     * @example 
     * @return bool
     */
    public function disableView(): bool
    {
    
    }

    /**
     * 
     *开启自动渲染模板
     * @example 
     * @return Yaf_Dispatcher
     */
    public function enableView(): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *初始化视图对象
     * @example 
     * @param string $tpl_dir 模板目录
     * @param mixed $options 全局的模板选项（配置相关）
     * @return Yaf_View_Interface
     */
    public function initView(string $tpl_dir, $options): Yaf_View_Interface
    {
        return Yaf_View_Simple();
    }

    /**
     * 
     *设置视图对象
     * @example 
     * @param Yaf_View_Interface $view 视图对象实例
     * @return Yaf_Dispatcher
     */
    public function setView(Yaf_View_Interface $view): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置请求对象（在命令行或者其他API模式下构造请求很有用）
     * @example 
     * @param Yaf_Request_Abstract $request 手动实例化的请求对象
     * @return Yaf_Dispatcher
     */
    public function setRequest(Yaf_Request_Abstract $request): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *返回应用实例
     * @example 
     * @return Yaf_Application
     */
    public function getApplication(): Yaf_Application
    {
    
    }

    /**
     * 
     *返回路由器实例
     * @example 
     * @return Yaf_Router
     */
    public function getRouter(): Yaf_Router
    {
    
    }

    /**
     * 
     *返回请求对象实例
     * @example 
     * @return Yaf_Request
     */
    public function getRequest(): Yaf_Request
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置一个用户定义的错误处理函数（封装了PHP内置的set_error_handler函数）
     * @example 
     * @param callable $callback PHP中可回调的结构
     * @param int $error_type 错误类型
     * @return Yaf_Dispatcher
     */
    public function setErrorHandler(Callable $callback, int $error_type = 32767): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置默认模块
     * @example 
     * @param string $module 模块名
     * @return Yaf_Dispatcher
     */
    public function setDefaultModule(string $module): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置默认的控制器
     * @example 
     * @param string $controller 控制器名
     * @return Yaf_Dispatcher
     */
    public function setDefaultController(string $controller): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置默认的动作名
     * @example 
     * @param string $action 操作名
     * @return Yaf_Dispatcher
     */
    public function setDefaultAction(string $action): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置或者返回$this->_return_response属性的值
     *当传递$flag参数时，设置$this->_return_response=$flag，并返回Dispatcher
     *当不传递任何参数时，返回$this->_return_response当前值
     * @example 
     * @param bool $flag 是否返回响应
     * @return Yaf_Dispatcher
     */
    public function returnResponse(bool $flag): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置或者返回$this->_auto_render属性的值
     *当传递$flag参数时，设置$this->_auto_render=$flag，并返回Dispatcher
     *当不传递任何参数时，返回$this->_auto_render属性的值
     * @example 
     * @param bool $flag 是否自动渲染
     * @return Yaf_Dispatcher
     */
    public function autoRender(bool $flag): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *设置或者返回$this->_instantly_flush属性的值
     *当传递$flag参数时，设置$this->_instantly_flush=$flag，并返回Dispatcher
     *当不传递任何参数时，返回$this->_instantly_flush属性的值
     * @example 
     * @param bool $flag 是否即时刷新缓存
     * @return Yaf_Dispatcher
     */
    public function flushInstantly(bool $flag): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *返回当前yaf_Dispatcher实例（单例模式）
     * @example 
     * @return Yaf_Dispatcher
     */
    public static  function getInstance(): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *手动分发请求
     * @example 
     * @param Yaf_Request_Abstract $request 分发的请求对象
     * @return Yaf_Response_Abstract
     */
    public function dispatch(Yaf_Request_Abstract $request): Yaf_Response_Abstract
    {
        return new Yaf_Response_Http();
    }

    /**
     * 
     *开启/关闭异常抛出或返回当前状态
     * @example 
     * @param bool $flag 是否抛出异常
     * @return Yaf_Dispatcher
     */
    public function throwException(bool $flag): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *开启/关闭自动异常捕获功能或返回当前状态
     * @example 
     * @param bool $flag 是否捕获异常
     * @return Yaf_Dispatcher
     */
    public function catchException(bool $flag): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *注册插件
     * @example 
     * @param Yaf_Plugin_Abstract $plugin 实例化的插件对象
     * @return Yaf_Dispatcher
     */
    public function registerPlugin(Yaf_Plugin_Abstract $plugin): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *重置__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    
    }

    /**
     * 
     *重置__clone魔术方法，防止克隆yaf_Dispatcher（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *重置__destruct魔术方法.
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

}

