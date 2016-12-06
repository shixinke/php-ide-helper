<?php
/**
* Yaf_Action_Abstract自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yaf_Action_Abstract extends Yaf_Controller_Abstract
{

     /**
操作定义
     */
    public $actions;

     /**
当前模块
     */
    protected $_module;

     /**
当前操作名
     */
    protected $_name;

     /**
当前请求对象
     */
    protected $_request;

     /**
当前响应对象
     */
    protected $_response;

     /**
参数
     */
    protected $_invoke_args;

     /**
当前视图对象
     */
    protected $_view;

     /**
当前控制器
     */
    protected $_controller;
    /**
     * 执行操作
     * @example 
     * @return 
     */
    public function execute()
    {
    }

    /**
     * 获取控制器对象
     * @example 
     * @return 
     */
    public function getController()
    {
    }

    /**
     * 调用视图并返回
     * @param string $tpl:模板文件 
     * @param array $parameters:模板赋值数据 [备选值：()]
     * @example 
     * @return 
     */
    protected function render($tpl, Array $parameters)
    {
    }

    /**
     * 调用模板并显示
     * @param string $tpl:模板文件 
     * @param array $parameters:模板赋值数据 
     * @example 
     * @return 
     */
    protected function display($tpl, Array $parameters)
    {
    }

    /**
     * 获取当前请求对象
     * @example 
     * @return 
     */
    public function getRequest()
    {
    }

    /**
     * 获取当前响应对象
     * @example 
     * @return 
     */
    public function getResponse()
    {
    }

    /**
     * 获取当前模块名
     * @example 
     * @return 
     */
    public function getModuleName()
    {
    }

    /**
     * 获取视图对象
     * @example 
     * @return 
     */
    public function getView()
    {
    }

    /**
     * 初始化视图
     * @param array $options:视图初始化参数 
     * @example 
     * @return 
     */
    public function initView(Array $options)
    {
    }

    /**
     * 设置视图目录
     * @param string $view_directory:视图目录 
     * @example 
     * @return 
     */
    public function setViewpath($view_directory)
    {
    }

    /**
     * 获取视图目录
     * @example 
     * @return 
     */
    public function getViewpath()
    {
    }

    /**
     * 跳转到应用内部某个地址
     * @param string $module:模块名 
     * @param string $controller:控制器名 
     * @param string $action:操作名 
     * @param array $parameters:操作参数 
     * @example 
     * @return 
     */
    public function forward($module, $controller, $action, Array $parameters)
    {
    }

    /**
     * 跳转到某个URL
     * @param string $url:跳转的URL 
     * @example 
     * @return 
     */
    public function redirect($url)
    {
    }

    /**
     * 获取控制反转的参数列表(操作中传入的参数)
     * @example 
     * @return 
     */
    public function getInvokeArgs()
    {
    }

    /**
     * 获取控制反转的指定参数(操作中传入的参数)
     * @param string $name:参数名 
     * @example 
     * @return 
     */
    public function getInvokeArg($name)
    {
    }

    /**
     * 构造方法
     * @example 
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 克隆方法
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

}
