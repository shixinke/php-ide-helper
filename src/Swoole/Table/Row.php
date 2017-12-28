<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/28
*/

/**
*内存表行
*/
namespace Swoole\Table;
class Row
{
    /**
     * @var string $key 
     * 行对应的键
     * @access public
     */
    public $key;

    /**
     * @var mixed $value 
     * 行值
     * @access public
     */
    public $value;

    /**
     * 
     *检查一个偏移位置是否存在
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetExists($offset)
    {
    }

    /**
     * 
     *取一个偏移位置的值
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetGet($offset)
    {
    }

    /**
     * 
     *设置一个偏移位置的值(来自ArrayAccess接口)
     * @example 
     * @param int $offset 偏移量
     * @param mixed $value 需要设置的值
     * @return 
     */
    public function offsetSet($offset, $value)
    {
    }

    /**
     * 
     *复位一个偏移位置的值
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetUnset($offset)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

}

