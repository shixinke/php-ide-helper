<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*缓冲类。提供了一个swoole_buffer类，让PHP开发者可以像C一样直接读写内存，提升程序的性能，又不用担心内存越界
*/
namespace Swoole;
class Buffer
{
    /**
     * 
     *创建内存对象
     * @example 
     * @param int $size 创建内存对象
     * @return 
     */
    public function __construct($size)
    {
    }

    /**
     * 
     *析构函数
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *将对象转化为字符串
     * @example 
     * @return 
     */
    public function __toString()
    {
    }

    /**
     * 
     *从缓冲区中取出内容
     * @example 
     * @param int $offset 从缓冲区中取出内容
     * @param int $length 从缓冲区中取出内容
     * @param bool $seek 从缓冲区中取出内容
     * @return 
     */
    public function substr($offset, $length, $seek)
    {
    }

    /**
     * 
     *向缓存区的任意内存位置写数据。read/write函数可以直接读写内存。所以使用务必要谨慎，否则可能会破坏现有数据
     * @example 
     * @param int $offset 向缓存区的任意内存位置写数据。read/write函数可以直接读写内存。所以使用务必要谨慎，否则可能会破坏现有数据
     * @param string $data 向缓存区的任意内存位置写数据。read/write函数可以直接读写内存。所以使用务必要谨慎，否则可能会破坏现有数据
     * @return 
     */
    public function write($offset, $data)
    {
    }

    /**
     * 
     *读取缓存区任意位置的内存(此接口是一个底层接口，可直接操作内存)
     * @example 
     * @param int $offset 读取缓存区任意位置的内存(此接口是一个底层接口，可直接操作内存)
     * @param int $length 读取缓存区任意位置的内存(此接口是一个底层接口，可直接操作内存)
     * @return 
     */
    public function read($offset, $length)
    {
    }

    /**
     * 
     *将一个字符串数据追加到缓存区末尾
     * @example 
     * @param string $data 将一个字符串数据追加到缓存区末尾
     * @return 
     */
    public function append($data)
    {
    }

    /**
     * 
     *为缓存区扩容
     * @example 
     * @param int $size 为缓存区扩容
     * @return 
     */
    public function expand($size)
    {
    }

    /**
     * 
     *回收缓冲中已经废弃的内存
     * @example 
     * @return 
     */
    public function recycle()
    {
    }

    /**
     * 
     *清理缓存区数据(行此操作后，缓存区将重置。swoole_buffer对象就可以用来处理新的请求了)
     * @example 
     * @return 
     */
    public function clear()
    {
    }

}

