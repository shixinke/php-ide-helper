<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*内存表行
*/
namespace Swoole\Table;
class Row implements \ArrayAccess
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
    public function offsetExists(int $offset)
    {
    
    }

    /**
     * 
     *取一个偏移位置的值
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetGet(int $offset)
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
    public function offsetSet(int $offset, $value)
    {
    
    }

    /**
     * 
     *复位一个偏移位置的值
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetUnset(int $offset)
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

