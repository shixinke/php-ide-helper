<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf中的操作定义(单独文件定义操作，通常是在控制器文件中定义操作，这里可以通过单独文件来定义操作)
*/
namespace Yaf;
abstract class Action_Abstract extends \Yaf\Controller_Abstract
{
    /**
     * @var array $actions 
     * 操作列表
     * @access public
     */
    public $actions    =    array();

    /**
     * @var string $_module 
     * 当前模块对象
     * @access protected
     */
    protected $_module;

    /**
     * @var string $_name 
     * 当前操作名
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
     * @var Yaf_Controller_Abstract $_controller 
     * 当前请求的控制器实例
     * @access protected
     */
    protected $_controller;

    /**
     * 
     *获取当前请求的控制器实例
     * @example 
     * @return Yaf_Action_Abstract
     */
    public function getController(): Yaf_Action_Abstract
    {
    
    }

    /**
     * 
     *动作入口方法，由Yaf框架自动调用
     * @example 
     * @param mixed $arg 参数
     * @param mixed $arg2 参数2
     * @return Yaf_Action_Abstract
     */
    public abstract  function execute($arg, $arg2): Yaf_Action_Abstract;

}

