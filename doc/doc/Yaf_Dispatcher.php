<?php
/**
* Yaf_Dispatcher自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Dispatcher
{

     /**

     */
    protected $_router;

     /**

     */
    protected $_view;

     /**

     */
    protected $_request;

     /**

     */
    protected $_plugins;

     /**

     */
    protected static  $_instance;

     /**

     */
    protected $_auto_render    =    "1";

     /**

     */
    protected $_return_response    =    "";

     /**

     */
    protected $_instantly_flush    =    "";

     /**

     */
    protected $_default_module;

     /**

     */
    protected $_default_controller;

     /**

     */
    protected $_default_action;
    /**
     * 
     * @example 
     * @return 
     */
    private function __construct()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __sleep()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function enableView()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function disableView()
    {
    }

    /**
     * 
     * @param unknown $templates_dir: [备选值：()]
     * @param array $options: [备选值：()]
     * @example 
     * @return 
     */
    public function initView($templates_dir, Array $options)
    {
    }

    /**
     * 
     * @param unknown $view: [备选值：()]
     * @example 
     * @return 
     */
    public function setView($view)
    {
    }

    /**
     * 
     * @param unknown $request: [备选值：()]
     * @example 
     * @return 
     */
    public function setRequest($request)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getApplication()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getRouter()
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getRequest()
    {
    }

    /**
     * 
     * @param unknown $callback: [备选值：()]
     * @param unknown $error_types: [备选值：()]
     * @example 
     * @return 
     */
    public function setErrorHandler($callback, $error_types)
    {
    }

    /**
     * 
     * @param unknown $module: [备选值：()]
     * @example 
     * @return 
     */
    public function setDefaultModule($module)
    {
    }

    /**
     * 
     * @param unknown $controller: [备选值：()]
     * @example 
     * @return 
     */
    public function setDefaultController($controller)
    {
    }

    /**
     * 
     * @param unknown $action: [备选值：()]
     * @example 
     * @return 
     */
    public function setDefaultAction($action)
    {
    }

    /**
     * 
     * @param unknown $flag: [备选值：()]
     * @example 
     * @return 
     */
    public function returnResponse($flag)
    {
    }

    /**
     * 
     * @param unknown $flag: [备选值：()]
     * @example 
     * @return 
     */
    public function autoRender($flag)
    {
    }

    /**
     * 
     * @param unknown $flag: [备选值：()]
     * @example 
     * @return 
     */
    public function flushInstantly($flag)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public static  function getInstance()
    {
    }

    /**
     * 
     * @param unknown $request: [备选值：()]
     * @example 
     * @return 
     */
    public function dispatch($request)
    {
    }

    /**
     * 
     * @param unknown $flag: [备选值：()]
     * @example 
     * @return 
     */
    public function throwException($flag)
    {
    }

    /**
     * 
     * @param unknown $flag: [备选值：()]
     * @example 
     * @return 
     */
    public function catchException($flag)
    {
    }

    /**
     * 
     * @param unknown $plugin: [备选值：()]
     * @example 
     * @return 
     */
    public function registerPlugin($plugin)
    {
    }

}
