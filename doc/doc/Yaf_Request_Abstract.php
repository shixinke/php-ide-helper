<?php
/**
* Yaf_Request_Abstract自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Request_Abstract
{
    SCHEME_HTTP = http;
    SCHEME_HTTPS = https;

     /**

     */
    public $module;

     /**

     */
    public $controller;

     /**

     */
    public $action;

     /**

     */
    public $method;

     /**

     */
    protected $params;

     /**

     */
    protected $language;

     /**

     */
    protected $_exception;

     /**

     */
    protected $_base_uri    =    "";

     /**

     */
    protected $uri    =    "";

     /**

     */
    protected $dispatched    =    "";

     /**

     */
    protected $routed    =    "";
    /**
     * 
     * @example 
     * @return 
     */
    public function isGet()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isPost()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isPut()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isHead()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isOptions()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isCli()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isXmlHttpRequest()
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @param unknown $default: [备选值：()]
     * @example 
     * @return 
     */
    public function getServer($name, $default)
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @param unknown $default: [备选值：()]
     * @example 
     * @return 
     */
    public function getEnv($name, $default)
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @param unknown $value: [备选值：()]
     * @example 
     * @return 
     */
    public function setParam($name, $value)
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @param unknown $default: [备选值：()]
     * @example 
     * @return 
     */
    public function getParam($name, $default)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getParams()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getException()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getModuleName()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getControllerName()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getActionName()
    {
    }

    /**
     * 
     * @param unknown $module: [备选值：()]
     * @example 
     * @return 
     */
    public function setModuleName($module)
    {
    }

    /**
     * 
     * @param unknown $controller: [备选值：()]
     * @example 
     * @return 
     */
    public function setControllerName($controller)
    {
    }

    /**
     * 
     * @param unknown $action: [备选值：()]
     * @example 
     * @return 
     */
    public function setActionName($action)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getMethod()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getLanguage()
    {
    }

    /**
     * 
     * @param unknown $uri: [备选值：()]
     * @example 
     * @return 
     */
    public function setBaseUri($uri)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getBaseUri()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getRequestUri()
    {
    }

    /**
     * 
     * @param unknown $uri: [备选值：()]
     * @example 
     * @return 
     */
    public function setRequestUri($uri)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isDispatched()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function setDispatched()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function isRouted()
    {
    }

    /**
     * 
     * @param unknown $flag: [备选值：()]
     * @example 
     * @return 
     */
    public function setRouted($flag)
    {
    }

}
