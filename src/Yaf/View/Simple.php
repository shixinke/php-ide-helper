<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*简单视图对象
*/
namespace Yaf\View;
class Simple implements \Yaf\View_Interface
{
    /**
     * @var array $_tpl_vars 
     * 储存所有模板变量
     * @access protected
     */
    protected $_tpl_vars    =    array();

    /**
     * @var string $_tpl_dir 
     * 模板文件目录
     * @access protected
     */
    protected $_tpl_dir;

    /**
     * @var array $_options 
     * 配置选项
     * @access protected
     */
    protected $_options    =    array();

    /**
     * 
     *构造方法
     * @example 
     * @param string $tpl_dir 模板文件目录
     * @param array $options 此属性在php-5.4以下版本中适用，用以设置模板渲染的方式
     * @return 
     */
    public function __construct(string $tpl_dir, Array $options)
    {
    
    }

    /**
     * 
     *当isset检测某个属性是否存在时自动调用（判断是否传递某个模板变量）
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function __isset(string $name)
    {
    
    }

    /**
     * 
     *获取某个模板变量的值
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function __get(string $name)
    {
    
    }

    /**
     * 
     *获取某个模板变量的值
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function get(string $name)
    {
    
    }

    /**
     * 
     *传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function __set(string $name, string $value)
    {
    
    }

    /**
     * 
     *清空某个模板变量的值
     * @example 
     * @param string $name 模板变量名
     * @return 
     */
    public function clear(string $name)
    {
    
    }

    /**
     * 
     *传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function assign(string $name, string $value)
    {
    
    }

    /**
     * 
     *以引用的方式传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function assignRef(string $name, string $value)
    {
    
    }

    /**
     * 
     *渲染模板并直接输出
     * @example 
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量数组
     * @return 
     */
    public function display(string $tpl, Array $var_array = [])
    {
    
    }

    /**
     * 
     *渲染模板并返回结果
     * @example 
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量数组
     * @return 
     */
    public function render(string $tpl, Array $var_array = [])
    {
    
    }

    /**
     * 
     *设置模板文件目录
     * @example 
     * @param string $tpl_dir 模板文件目录
     * @return 
     */
    public function setScriptPath(string $tpl_dir)
    {
    
    }

    /**
     * 
     *获取模板目录文件
     * @example 
     * @return string
     */
    public function getScriptPath(): string
    {
    
    }

}

