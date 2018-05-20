<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*http请求对象
*/
class Yaf_Request_Http extends Yaf_Request_Abstract
{
    /**
     * @var string $module 
     * 当前请求的模块名
     * @access public
     */
    public $module;

    /**
     * @var string $controller 
     * 当前请求的控制器名
     * @access public
     */
    public $controller;

    /**
     * @var stirng $action 
     * 当前请求的动作名
     * @access public
     */
    public $action;

    /**
     * @var string $method 
     * 当前请求的方法 getMethod
     * @access public
     */
    public $method;

    /**
     * @var array $params 
     * 请求传递的参数
     * @access protected
     */
    protected $params    =    array();

    /**
     * @var string $language 
     * http报头中HTTP_ACCEPT_LANGUAGE的值
     * @access protected
     */
    protected $language;

    /**
     * @var Yaf_Exception $_exception 
     * 异常对象
     * @access protected
     */
    protected $_exception;

    /**
     * @var string $_base_uri 
     * 请求的Base URI（http请求 or cli模式下）
     * @access protected
     */
    protected $_base_uri    =    '';

    /**
     * @var string $uri 
     * 请求的URI（http请求）
     * @access protected
     */
    protected $uri    =    '';

    /**
     * @var bool $dispatched 
     * 请求是否完成了分发，默认为0
     * @access protected
     */
    protected $dispatched    =    false;

    /**
     * @var bool $routed 
     * 请求是否完成了路由，默认为0
     * @access protected
     */
    protected $routed    =    false;

    /**
     * 
     *构造方法
     * @example 
     * @param string $request_uri 请求uri
     * @param string $base_uri Base URI
     * @return 
     */
    public function __construct(string $request_uri, string $base_uri)
    {
    
    }

    /**
     * 
     *获取$_GET中名为$name的参数值
     * @example 
     * @param string $name 变量名
     * @param string $default 默认值
     * @return string
     */
    public function getQuery(string $name, string $default): string
    {
    
    }

    /**
     * 
     *获取$_REQUEST中名为$name的参数值
     * @example 
     * @param string $name 变量名
     * @return Yaf_Request_Abstract
     */
    public function getRequest(string $name): Yaf_Request_Abstract
    {
    
    }

    /**
     * 
     *获取$_POST中名为$name的参数值
     * @example 
     * @param string $name 变量名
     * @param string $default 默认值
     * @return string
     */
    public function getPost(string $name, string $default): string
    {
    
    }

    /**
     * 
     *获取$_COOKIE中名为$name的参数值
     * @example 
     * @param string $name 变量名
     * @return string
     */
    public function getCookie(string $name): string
    {
    
    }

    /**
     * 
     *获取$_FILES中名为$name的参数值
     * @example 
     * @param string $name 变量名
     * @return array
     */
    public function getFiles(string $name): array
    {
    
    }

    /**
     * 
     *判断是否为AJAX请求
     * @example 
     * @return bool
     */
    public function isXmlHttpRequest(): bool
    {
    
    }

    /**
     * 
     *获取全局变量中的值（扫描顺序为$_POST，$_GET，$_COOKIE，$_SERVER）
     * @example 
     * @param string $name 变量名
     * @param mixed $default 默认值
     * @return string
     */
    public function get(string $name, $default): string
    {
    
    }

    /**
     * 
     *重置__clone魔术方法
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *判断是否为GET请求
     * @example 
     * @return bool
     */
    public function isGet(): bool
    {
    
    }

    /**
     * 
     *判断是否为POST请求
     * @example 
     * @return bool
     */
    public function isPost(): bool
    {
    
    }

    /**
     * 
     *判断是否为PUT请求
     * @example 
     * @return bool
     */
    public function isPut(): bool
    {
    
    }

    /**
     * 
     *判断是否为HEAD请求
     * @example 
     * @return bool
     */
    public function isHead(): bool
    {
    
    }

    /**
     * 
     *判断是否为Options请求
     * @example 
     * @return bool
     */
    public function isOptions(): bool
    {
    
    }

    /**
     * 
     *判断是否为CLI请求
     * @example 
     * @return bool
     */
    public function isCli(): bool
    {
    
    }

    /**
     * 
     *获取服务器$_SERVER全局变量中的值
     * @example 
     * @param string $name 变量名
     * @param mixed $default 默认值
     * @return mixed
     */
    public function getServer(string $name, $default)
    {
    
    }

    /**
     * 
     *获取环境变量$_ENV全局变量中的值
     * @example 
     * @param string $name 变量名
     * @param string $default 默认值
     * @return mixed
     */
    public function getEnv(string $name, string $default)
    {
    
    }

    /**
     * 
     *设置请求的参数
     *当只有一个参数且为Array类型，如果存在对应的键值将覆盖
     * @example 
     * @param string $name 变量名
     * @param mixed $value 变量值
     * @return 
     */
    public function setParam(string $name, $value)
    {
    
    }

    /**
     * 
     *获取请求的参数
     * @example 
     * @param string $name 变量名
     * @param string $default 默认值
     * @return string
     */
    public function getParam(string $name, string $default): string
    {
    
    }

    /**
     * 
     *获取请求全部的参数
     * @example 
     * @return array
     */
    public function getParams(): array
    {
    
    }

    /**
     * 
     *获取异常对象
     * @example 
     * @return Yaf_Exception
     */
    public function getException(): Yaf_Exception
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
     *获取当前控制器名
     * @example 
     * @return string
     */
    public function getControllerName(): string
    {
    
    }

    /**
     * 
     *获取当前动作名
     * @example 
     * @return string
     */
    public function getActionName(): string
    {
    
    }

    /**
     * 
     *设置请求的模块名
     * @example 
     * @param string $name 模块名
     * @return 
     */
    public function setModuleName(string $name)
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的控制器名
     * @example 
     * @param string $name 控制器名称
     * @return 
     */
    public function setControllerName(string $name)
    {
    
    }

    /**
     * 
     *设置请求的动作名
     * @example 
     * @param string $name 操作名称
     * @return 
     */
    public function setActionName(string $name)
    {
    
    }

    /**
     * 
     *获取当前请求的方法
     * @example 
     * @return string
     */
    public function getMethod(): string
    {
    
    }

    /**
     * 
     *获取当前请求的请求
     * @example 
     * @return string
     */
    public function getLanguage(): string
    {
    
    }

    /**
     * 
     *设置请求的Base URI
     * @example 
     * @param string $baseuri 基本uri
     * @return 
     */
    public function setBaseUri(string $baseuri)
    {
    
    }

    /**
     * 
     *获取请求的Base URI
     * @example 
     * @return string
     */
    public function getBaseUri(): string
    {
    
    }

    /**
     * 
     *获取请求的uri
     * @example 
     * @return string
     */
    public function getRequestUri(): string
    {
    
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置请求的URI
     * @example 
     * @param string $uri 请求uri
     * @return 
     */
    public function setRequestUri(string $uri)
    {
    
    }

    /**
     * 
     *判断请求是否完成了分发
     * @example 
     * @return bool
     */
    public function isDispatched(): bool
    {
    
    }

    /**
     * 
     *设置请求已经完成分发
     * @example 
     * @return bool
     */
    public function setDispatched(): bool
    {
    
    }

    /**
     * 
     *判断请求是否完成了路由
     * @example 
     * @return bool
     */
    public function isRouted(): bool
    {
    
    }

    /**
     * 
     *设置请求已经完成了路由
     * @example 
     * @return bool
     */
    public function setRouted(): bool
    {
    
    }

}

