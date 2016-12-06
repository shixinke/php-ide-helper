<?php
/**
* Yaf_Controller_Abstract自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Controller_Abstract
{

     /**

     */
    public $actions;

     /**

     */
    protected $_module;

     /**

     */
    protected $_name;

     /**

     */
    protected $_request;

     /**

     */
    protected $_response;

     /**

     */
    protected $_invoke_args;

     /**

     */
    protected $_view;
    /**
     * 
     * @param unknown $tpl: [备选值：()]
     * @param array $parameters: [备选值：()]
     * @example 
     * @return 
     */
    protected function render($tpl, Array $parameters)
    {
    }

    /**
     * 
     * @param unknown $tpl: [备选值：()]
     * @param array $parameters: [备选值：()]
     * @example 
     * @return 
     */
    protected function display($tpl, Array $parameters)
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
     * @example 
     * @return 
     */
    public function getResponse()
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
    public function getView()
    {
    }

    /**
     * 
     * @param array $options: [备选值：()]
     * @example 
     * @return 
     */
    public function initView(Array $options)
    {
    }

    /**
     * 
     * @param unknown $view_directory: [备选值：()]
     * @example 
     * @return 
     */
    public function setViewpath($view_directory)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getViewpath()
    {
    }

    /**
     * 
     * @param unknown $module: [备选值：()]
     * @param unknown $controller: [备选值：()]
     * @param unknown $action: [备选值：()]
     * @param array $parameters: [备选值：()]
     * @example 
     * @return 
     */
    public function forward($module, $controller, $action, Array $parameters)
    {
    }

    /**
     * 
     * @param unknown $url: [备选值：()]
     * @example 
     * @return 
     */
    public function redirect($url)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function getInvokeArgs()
    {
    }

    /**
     * 
     * @param unknown $name: [备选值：()]
     * @example 
     * @return 
     */
    public function getInvokeArg($name)
    {
    }

    /**
     * 
     * @example 
     * @return 
     */
    public function __construct()
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

}
