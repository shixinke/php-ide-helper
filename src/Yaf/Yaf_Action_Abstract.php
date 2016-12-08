<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Action_Abstract
*/
abstract class Yaf_Action_Abstract extends Yaf_Controller_Abstract
{
    /**
     * @var unknown $actions 
     * 
     * @access public
    public $actions;

    /**
     * @var unknown $_module 
     * 
     * @access protected
    protected $_module;

    /**
     * @var unknown $_name 
     * 
     * @access protected
    protected $_name;

    /**
     * @var unknown $_request 
     * 
     * @access protected
    protected $_request;

    /**
     * @var unknown $_response 
     * 
     * @access protected
    protected $_response;

    /**
     * @var unknown $_invoke_args 
     * 
     * @access protected
    protected $_invoke_args;

    /**
     * @var unknown $_view 
     * 
     * @access protected
    protected $_view;

    /**
     * @var unknown $_controller 
     * (Yaf >= 3.0.2)
     * 当前请求的控制器实例
     * @access protected
    protected $_controller;

    /**
     * 
     *(Yaf >= 3.0.2)
     *动作入口方法，由Yaf框架自动调用
     * @example 
     * @return 
     */
    public abstract  function execute();

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前请求的控制器实例
     * @example 
     * @return 
     */
    public function getController()
    {
    }

    /**
     * 
     *
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
     *
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
     *
     * @example 
     * @return 
     */
    public function getRequest()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getResponse()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getModuleName()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getView()
    {
    }

    /**
     * 
     *
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
     *
     * @example 
     * @param  mixed $module 
     * @param  mixed $controller 
     * @param  mixed $action 
     * @param array $parameters 
     * @return 
     */
    public function forward($module, $controller, $action, Array $parameters)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $url 
     * @return 
     */
    public function redirect($url)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getInvokeArgs()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function getInvokeArg($name)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public final  function __construct()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    private final  function __clone()
    {
    }

}

