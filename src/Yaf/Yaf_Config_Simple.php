<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*基础配置对象
*/
final class Yaf_Config_Simple extends Yaf_Config_Abstract implements Iterator, ArrayAccess, Countable
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
    protected $_readonly    =    0;

    /**
     * 
     *构造方法，初始化yaf_Config_Simple对象
     * @example 
     * @param string $config 储存配置的数组
     * @param string $readonly 是否只读
     * @return 
     */
    public function __construct(string $config, string $readonly)
    {
    
    }

    /**
     * 
     *魔术方法，当isset()检测某个配置节点是否存在时调用
     * @example 
     * @param string $name 节点名称
     * @return 
     */
    public function __isset(string $name)
    {
    
    }

    /**
     * 
     *设置配置节点值（无效）
     * @example 
     * @param string $name 变量名
     * @param mixed $value 配置值
     * @return Yaf_Config_Abstract
     */
    public function set(string $name, $value): Yaf_Config_Abstract
    {
    
    }

    /**
     * 
     *返回配置节点的数量
     * @example 
     * @return int
     */
    public function count(): int
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
     *返回当前节点
     * @example 
     * @return mixed
     */
    public function current()
    {
    
    }

    /**
     * 
     *向前移动到下一个元素
     * @example 
     * @return mixed
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
     * @return mixed
     */
    public function key()
    {
    
    }

    /**
     * 
     *撤消某个配置节点（无效）
     * @example 
     * @param string $name 变量名
     * @return mixed
     */
    public function offsetUnset(string $name)
    {
    
    }

    /**
     * 
     *测某个配置节点是否存在
     * @example 
     * @param mixed $name 节点名称
     * @return 
     */
    public function offsetExists($name)
    {
    
    }

    /**
     * 
     *设置配置节点值（无效）
     * @example 
     * @param string $name 配置项名称
     * @param mixed $value 配置值
     * @return 
     */
    public function offsetSet(string $name, $value)
    {
    
    }

    /**
     * 
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param string $name 索引值
     * @return 
     */
    public function offsetGet(string $name)
    {
    
    }

    /**
     * 
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param string $name 配置项名称
     * @return 
     */
    public function get(string $name)
    {
    
    }

    /**
     * 
     *获取配置节点的值
     *当不传递$name参数时，返回配置对象本身
     * @example 
     * @param string $name 配置项名称
     * @return 
     */
    public function __get(string $name)
    {
    
    }

    /**
     * 
     *设置配置节点值（无效）
     * @example 
     * @param string $name 配置项名
     * @param mixed $value 配置值
     * @return 
     */
    public function __set(string $name, $value)
    {
    
    }

    /**
     * 
     *将配置对象转化为数组
     * @example 
     * @return array
     */
    public function toArray(): array
    {
    
    }

    /**
     * 
     *配置是否只读
     * @example 
     * @return bool
     */
    public function readonly(): bool
    {
    
    }

}

