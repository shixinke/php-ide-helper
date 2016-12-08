<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class YafX_Request_Abstract
*/
namespace Yaf;
abstract class Request_Abstract
{
    /**     
    *
    */
    const SCHEME_HTTP    =    'http';

    /**     
    *
    */
    const SCHEME_HTTPS    =    'https';

    /**
     * @var unknown $module 
     * (Yaf >= 3.0.2)
     * 当前请求的模块名
     * @access public
    public $module;

    /**
     * @var unknown $controller 
     * (Yaf >= 3.0.2)
     * 当前请求的控制器名
     * @access public
    public $controller;

    /**
     * @var unknown $action 
     * (Yaf >= 3.0.2)
     * 当前请求的动作名
     * @access public
    public $action;

    /**
     * @var unknown $method 
     * (Yaf >= 3.0.2)
     * 当前请求的方法 getMethod
     * @access public
    public $method;

    /**
     * @var unknown $params 
     * (Yaf >= 3.0.2)
     * 请求传递的参数
     * @access protected
    protected $params;

    /**
     * @var unknown $language 
     * (Yaf >= 3.0.2)
     * http报头中HTTP_ACCEPT_LANGUAGE的值
     * @access protected
    protected $language;

    /**
     * @var unknown $_exception 
     * (Yaf >= 3.0.2)
     * 异常对象
     * @access protected
    protected $_exception;

    /**
     * @var unknown $_base_uri 
     * (Yaf >= 3.0.2)
     * 请求的Base URI（http请求 or cli模式下）
     * @access protected
    protected $_base_uri    =    '';

    /**
     * @var unknown $uri 
     * (Yaf >= 3.0.2)
     * 请求的URI（http请求）
     * @access protected
    protected $uri    =    '';

    /**
     * @var unknown $dispatched 
     * (Yaf >= 3.0.2)
     * 请求是否完成了分发，默认为0
     * @access protected
    protected $dispatched    =    '';

    /**
     * @var unknown $routed 
     * (Yaf >= 3.0.2)
     * 请求是否完成了路由，默认为0
     * @access protected
    protected $routed    =    '';

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为GET请求
     * @example 
     * @return 
     */
    public function isGet()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为POST请求
     * @example 
     * @return 
     */
    public function isPost()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为PUT请求
     * @example 
     * @return 
     */
    public function isPut()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为HEAD请求
     * @example 
     * @return 
     */
    public function isHead()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为Options请求
     * @example 
     * @return 
     */
    public function isOptions()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为CLI请求
     * @example 
     * @return 
     */
    public function isCli()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否为AJAX请求
     * @example 
     * @return 
     */
    public function isXmlHttpRequest()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取服务器$_SERVER全局变量中的值
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取服务器$_SERVER全局变量中的值
     * @param mixed $default (Yaf >= 3.0.2)
获取服务器$_SERVER全局变量中的值
     * @return 
     */
    public function getServer($name, $default)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取环境变量$_ENV全局变量中的值
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取环境变量$_ENV全局变量中的值
     * @param string $default (Yaf >= 3.0.2)
获取环境变量$_ENV全局变量中的值
     * @return 
     */
    public function getEnv($name, $default)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的参数
     *当只有一个参数且为Array类型，如果存在对应的键值将覆盖
     * @example 
     * @param string $name (Yaf >= 3.0.2)
设置请求的参数
当只有一个参数且为Array类型，如果存在对应的键值将覆盖
     * @param mixed $value (Yaf >= 3.0.2)
设置请求的参数
当只有一个参数且为Array类型，如果存在对应的键值将覆盖
     * @return 
     */
    public function setParam($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取请求的参数
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取请求的参数
     * @param string $default (Yaf >= 3.0.2)
获取请求的参数
     * @return 
     */
    public function getParam($name, $default)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取请求全部的参数
     * @example 
     * @return 
     */
    public function getParams()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取异常对象
     * @example 
     * @return 
     */
    public function getException()
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
     *获取当前控制器名
     * @example 
     * @return 
     */
    public function getControllerName()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前动作名
     * @example 
     * @return 
     */
    public function getActionName()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的模块名
     * @example 
     * @param  mixed $module 
     * @return 
     */
    public function setModuleName($module)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的控制器名
     * @example 
     * @param  mixed $controller 
     * @return 
     */
    public function setControllerName($controller)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的动作名
     * @example 
     * @param  mixed $action 
     * @return 
     */
    public function setActionName($action)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前请求的方法
     * @example 
     * @return 
     */
    public function getMethod()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前请求的请求
     * @example 
     * @return 
     */
    public function getLanguage()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的Base URI
     * @example 
     * @param  mixed $uri 
     * @return 
     */
    public function setBaseUri($uri)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取请求的Base URI
     * @example 
     * @return 
     */
    public function getBaseUri()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取请求的uri
     * @example 
     * @return 
     */
    public function getRequestUri()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的URI
     * @example 
     * @param  mixed $uri 
     * @return 
     */
    public function setRequestUri($uri)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断请求是否完成了分发
     * @example 
     * @return 
     */
    public function isDispatched()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求已经完成分发
     * @example 
     * @return 
     */
    public function setDispatched()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断请求是否完成了路由
     * @example 
     * @return 
     */
    public function isRouted()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求已经完成了路由
     * @example 
     * @param  mixed $flag 
     * @return 
     */
    public function setRouted($flag)
    {
    }

}

