<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_View_Simple
*/
class Yaf_View_Simple
{
    /**
     * @var unknown $_tpl_vars 
     * (Yaf >= 3.0.2)
     * 储存所有模板变量
     * @access protected
    protected $_tpl_vars;

    /**
     * @var unknown $_tpl_dir 
     * (Yaf >= 3.0.2)
     * 模板文件目录
     * @access protected
    protected $_tpl_dir;

    /**
     * @var unknown $_options 
     * (Yaf >= 3.0.2)
     * @access protected
    protected $_options;

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造方法
     * @example 
     * @param  mixed $template_dir 
     * @param array $options (Yaf >= 3.0.2)
构造方法
     * @return 
     */
    public final  function __construct($template_dir, Array $options)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *当isset检测某个属性是否存在时自动调用（判断是否传递某个模板变量）
     * @example 
     * @param string $name (Yaf >= 3.0.2)
当isset检测某个属性是否存在时自动调用（判断是否传递某个模板变量）
     * @return 
     */
    public function __isset($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取某个模板变量的值
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取某个模板变量的值
     * @return 
     */
    public function get($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *传递变量到模板
     * @example 
     * @param string $name (Yaf >= 3.0.2)
传递变量到模板
     * @param string $value (Yaf >= 3.0.2)
传递变量到模板
     * @return 
     */
    public function assign($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *渲染模板并返回结果
     * @example 
     * @param string $tpl (Yaf >= 3.0.2)
渲染模板并返回结果
     * @param  mixed $tpl_vars 
     * @return 
     */
    public function render($tpl, $tpl_vars)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $tpl_str 
     * @param  mixed $vars 
     * @return 
     */
    public function eval($tpl_str, $vars)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *渲染模板并直接输出
     * @example 
     * @param string $tpl (Yaf >= 3.0.2)
渲染模板并直接输出
     * @param  mixed $tpl_vars 
     * @return 
     */
    public function display($tpl, $tpl_vars)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *以引用的方式传递变量到模板
     * @example 
     * @param string $name (Yaf >= 3.0.2)
以引用的方式传递变量到模板
     * @param string $value (Yaf >= 3.0.2)
以引用的方式传递变量到模板
     * @return 
     */
    public function assignRef($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *清空某个模板变量的值
     * @example 
     * @param string $name (Yaf >= 3.0.2)
清空某个模板变量的值
     * @return 
     */
    public function clear($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置模板文件目录
     * @example 
     * @param  mixed $template_dir 
     * @return 
     */
    public function setScriptPath($template_dir)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取模板目录文件
     * @example 
     * @return 
     */
    public function getScriptPath()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取某个模板变量的值
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取某个模板变量的值
     * @return 
     */
    public function __get($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *传递变量到模板
     * @example 
     * @param string $name (Yaf >= 3.0.2)
传递变量到模板
     * @param string $value (Yaf >= 3.0.2)
传递变量到模板
     * @return 
     */
    public function __set($name, $value)
    {
    }

}

