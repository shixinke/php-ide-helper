<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Session
*/
final class Yaf_Session
{
    /**
     * @var unknown $_instance 
     * 
     * @access protected
    protected static  $_instance;

    /**
     * @var unknown $_session 
     * 
     * @access protected
    protected $_session;

    /**
     * @var unknown $_started 
     * 
     * @access protected
    protected $_started    =    '';

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__clone魔术方法（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取Session实例（单例模式）
     * @example 
     * @return 
     */
    public static  function getInstance()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *开启会话
     * @example 
     * @return 
     */
    public function start()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取session变量
     * @return 
     */
    public function get($name)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function has($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
设置session变量
     * @param mixed $value (Yaf >= 3.0.2)
设置session变量
     * @return 
     */
    public function set($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *撤消session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
撤消session变量
     * @return 
     */
    public function del($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回session变量的数量
     * @example 
     * @return 
     */
    public function count()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置遍历位置
     * @example 
     * @return 
     */
    public function rewind()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *向前移动到下一个元素
     * @example 
     * @return 
     */
    public function next()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回当前变量
     * @example 
     * @return 
     */
    public function current()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *返回当前配置节点的key
     * @example 
     * @return 
     */
    public function key()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *判断是否可以继续遍历
     * @example 
     * @return 
     */
    public function valid()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function clear()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
获取session变量
     * @return 
     */
    public function offsetGet($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
设置session变量
     * @param mixed $value (Yaf >= 3.0.2)
设置session变量
     * @return 
     */
    public function offsetSet($name, $value)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *测试某个session变量是否存在
     * @example 
     * @param mixed $name (Yaf >= 3.0.2)
测试某个session变量是否存在
     * @return 
     */
    public function offsetExists($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *撤消某个session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
撤消某个session变量
     * @return 
     */
    public function offsetUnset($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取session变量值
     *当不传递$name参数时，返回全部变量
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function __get($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *魔术方法，当isset()检测session变量是否存在时调用
     * @example 
     * @param string $name (Yaf >= 3.0.2)
魔术方法，当isset()检测session变量是否存在时调用
     * @return 
     */
    public function __isset($name)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置session变量
     * @example 
     * @param string $name (Yaf >= 3.0.2)
设置session变量
     * @param mixed $value (Yaf >= 3.0.2)
设置session变量
     * @return 
     */
    public function __set($name, $value)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @return 
     */
    public function __unset($name)
    {
    }

}

