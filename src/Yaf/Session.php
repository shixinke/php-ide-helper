<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf的会话对象
*/
namespace Yaf;
final class Session implements \Iterator,\Traversable,\ArrayAccess,\Countable
{
    /**
     * @var Yaf_Session $_instance 
     * session对象
     * @access protected
     */
    protected static  $_instance;

    /**
     * @var array $_session 
     * session存储对象
     * @access protected
     */
    protected $_session    =    array();

    /**
     * @var bool $_started 
     * 是否开启session
     * @access protected
     */
    protected $_started    =    false;

    /**
     * 
     *重置__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    
    }

    /**
     * 
     *重置__clone魔术方法（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    
    }

    /**
     * 
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    
    }

    /**
     * 
     *获取Session实例（单例模式）
     * @example 
     * @return Yaf_Session
     */
    public static  function getInstance(): Yaf_Session
    {
    
    }

    /**
     * 
     *开启会话
     * @example 
     * @return 
     */
    public function start()
    {
    
    }

    /**
     * 
     *重置__destruct魔术方法.
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *魔术方法，当isset()检测session变量是否存在时调用
     * @example 
     * @param string $name 节点名称
     * @return 
     */
    public function __isset(string $name)
    {
    
    }

    /**
     * 
     *获取session变量
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public function get(string $name)
    {
    
    }

    /**
     * 
     *设置session变量
     * @example 
     * @param string $name 变量名
     * @param mixed $value 变量值
     * @return 
     */
    public function set(string $name, $value)
    {
    
    }

    /**
     * 
     *撤消session变量
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public function del(string $name)
    {
    
    }

    /**
     * 
     *返回session变量的数量
     * @example 
     * @return 
     */
    public function count()
    {
    
    }

    /**
     * 
     *重置遍历位置
     * @example 
     * @return 
     */
    public function rewind()
    {
    
    }

    /**
     * 
     *返回当前变量
     * @example 
     * @return 
     */
    public function current()
    {
    
    }

    /**
     * 
     *向前移动到下一个元素
     * @example 
     * @return 
     */
    public function next()
    {
    
    }

    /**
     * 
     *判断是否可以继续遍历
     * @example 
     * @return 
     */
    public function valid()
    {
    
    }

    /**
     * 
     *返回当前配置节点的key
     * @example 
     * @return 
     */
    public function key()
    {
    
    }

    /**
     * 
     *撤消某个session变量
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public function offsetUnset(string $name)
    {
    
    }

    /**
     * 
     *测试某个session变量是否存在
     * @example 
     * @param mixed $name 变量名
     * @return 
     */
    public function offsetExists($name)
    {
    
    }

    /**
     * 
     *获取session变量
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public function offsetGet(string $name)
    {
    
    }

    /**
     * 
     *设置session变量
     * @example 
     * @param string $name 变量名
     * @param mixed $value 变量值
     * @return 
     */
    public function offsetSet(string $name, $value)
    {
    
    }

    /**
     * 
     *获取session变量值
     *当不传递$name参数时，返回全部变量
     * @example 
     * @param string $name session键名
     * @return 
     */
    public function __get(string $name)
    {
    
    }

    /**
     * 
     *设置session变量
     * @example 
     * @param string $name 变量名
     * @param mixed $value 变量值
     * @return 
     */
    public function __set(string $name, $value)
    {
    
    }

}

