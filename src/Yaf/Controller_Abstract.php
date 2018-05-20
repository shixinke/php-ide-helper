<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*控制器抽象类
*/
namespace Yaf;
abstract class Controller_Abstract
{
    /**
     * @var array $actions 
     * 动作名与动作类文件路径映射数组
     * @access public
     */
    public $actions    =    array();

    /**
     * @var string $_module 
     * 当前请求的模块名
     * @access protected
     */
    protected $_module;

    /**
     * @var string $_name 
     * 当前请求的控制器名
     * @access protected
     */
    protected $_name;

    /**
     * @var Yaf_Request_Abstract $_request 
     * 当前请求对象
     * @access protected
     */
    protected $_request;

    /**
     * @var Yaf_Response_Abstract $_response 
     * 当前响应对象
     * @access protected
     */
    protected $_response;

    /**
     * @var array $_invoke_args 
     * 调用参数列表
     * @access protected
     */
    protected $_invoke_args    =    array();

    /**
     * @var Yaf_View_Interface $_view 
     * 当前视图对象
     * @access protected
     */
    protected $_view;

    /**
     * 
     *渲染动作对应的模板，并返回结果
     * @example 
     * @param string $action_name 模板名称
     * @param array $var_array 模板变量数组
     * @return Yaf_Controller_Abstract
     */
    protected function render(string $action_name, Array $var_array = []): Yaf_Controller_Abstract
    {
    
    }

    /**
     * 
     *渲染动作对应的模板，并直接输出结果
     * @example 
     * @param string $action_name 模板名称
     * @param array $var_array 模板变量数组
     * @return Yaf_Controller_Abstract
     */
    protected function display(string $action_name, Array $var_array = []): Yaf_Controller_Abstract
    {
    
    }

    /**
     * 
     *获取请求对象
     * @example 
     * @return Yaf_Request_Abstract 
     */
    public function getRequest(): Yaf_Request_Abstract 
    {
    
    }

    /**
     * 
     *获取响应对象
     * @example 
     * @return Yaf_Response_Abstract 
     */
    public function getResponse(): Yaf_Response_Abstract 
    {
    
    }

    /**
     * 
     *获取当前模块名
     * @example 
     * @return string
     */
    public function getModuleName(): string
    {
    
    }

    /**
     * 
     *初始化视图对象
     * @example 
     * @return void
     */
    public function initView()
    {
    
    }

    /**
     * 
     *返回视图对象
     * @example 
     * @return Yaf_View_Interface
     */
    public function getView(): Yaf_View_Interface
    {
    
    }

    /**
     * 
     *设置模板文件目录
     * @example 
     * @param string $path 模板目录
     * @return void
     */
    public function setViewPath(string $path)
    {
    
    }

    /**
     * 
     *获取模板文件目录
     * @example 
     * @return string
     */
    public function getViewPath(): string
    {
    
    }

    /**
     * 
     *将当前的请求转交给另外的Action（对用户来说是透明的，相当于Web服务器的代理）.
     * @example 
     * @param string $module 模块名
     * @param string $controller 控制器名称
     * @param string $action 操作名称
     * @param array $parameters 参数列表数组
     * @return void
     */
    public function forward(string $module, string $controller, string $action, Array $parameters = [])
    {
    
    }

    /**
     * 
     *将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpboy.net/"））
     * @example 
     * @param string $url 跳转的地址
     * @return 
     */
    public function redirect(string $url)
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
     *获取指定调用参数名的值
     * @example 
     * @param string $name 参数名称
     * @return 
     */
    public function getInvokeArg(string $name)
    {
    
    }

    /**
     * 
     *构造方法
     * @example 
     * @return 
     */
    public final  function __construct()
    {
    
    }

    /**
     * 
     *克隆的魔术方法
     * @example 
     * @return 
     */
    public final  function __clone()
    {
    
    }

}

