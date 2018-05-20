<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf配置抽象类
*/
abstract class Yaf_Config_Abstract
{
    /**
     * @var array $_config 
     * 存储已解析的配置
     * @access protected
     */
    protected $_config    =    array();

    /**
     * @var int $_readonly 
     * 配置是否只读，默认为1.
     * @access protected
     */
    protected $_readonly    =    1;

    /**
     * 
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param string $name 配置键
     * @param mixed $value 默认值
     * @return mixed
     */
    public abstract  function get(string $name, $value);

    /**
     * 
     *设置配置节点的值(只读)
     * @example 
     * @return Yaf_Config_Abstract
     */
    public abstract  function set(): Yaf_Config_Abstract;

    /**
     * 
     *配置是否只读
     * @example 
     * @return bool
     */
    public abstract  function readonly(): bool;

    /**
     * 
     *将配置转换为数组
     * @example 
     * @return array
     */
    public abstract  function toArray(): array;

    /**
     * 
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param string $name 配置键
     * @return mixed
     */
    public function __get(string $name)
    {
    
    }

    /**
     * 
     *返回当前值
     * @example 
     * @return void
     */
    public abstract  function current();

    /**
     * 
     *返回下一个值
     * @example 
     * @return void
     */
    public abstract  function next();

    /**
     * 
     *返回当前键
     * @example 
     * @return 
     */
    public abstract  function key();

    /**
     * 
     *验证当前对象是否合法
     * @example 
     * @return void
     */
    public abstract  function valid();

    /**
     * 
     *将迭代器重置到第一个位置
     * @example 
     * @return void
     */
    public abstract  function rewind();

    /**
     * 
     *返回当前迭代器的个数
     * @example 
     * @return 
     */
    public abstract  function count();

    /**
     * 
     *当前索引对应的对象是否存在
     * @example 
     * @param string $offset 索引
     * @return void
     */
    public abstract  function offsetExists(string $offset);

    /**
     * 
     *通过索引获取当前对象
     * @example 
     * @param string $offset 索引
     * @return void
     */
    public abstract  function offsetGet(string $offset);

    /**
     * 
     *通过索引设置值
     * @example 
     * @param string $offset 索引
     * @param mixed $value 配置值
     * @return void
     */
    public abstract  function offsetSet(string $offset, $value);

    /**
     * 
     *通过索引删除值
     * @example 
     * @param string $offset 索引
     * @return void
     */
    public abstract  function offsetUnset(string $offset);

}

