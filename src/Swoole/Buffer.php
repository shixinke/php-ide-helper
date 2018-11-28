<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*让PHP开发者可以像C一样直接读写内存，提升程序的性能，又不用担心内存越界。swoole_buffer会检测offset(swoole_buffer申请的内存并非共享内存，所以无法在多个进程间被共享)
*/
namespace Swoole;
class Buffer
{
    /**
     * @var int $length 
     * 当前数据的长度
     * @access public
     */
    public $length    =    0;

    /**
     * @var int $capacity 
     * 当前缓存区的容量
     * @access public
     */
    public $capacity    =    0;

    /**
     * 
     *buffer初始化(创建一个内存对象)
     * @example 
     * @param int $size 指定了缓冲区内存的初始尺寸。当申请的内存容量不够时swoole底层会自动扩容
     * @return 
     */
    public function __construct(int $size)
    {
    
    }

    /**
     * 
     *析构方法
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *将对象转化为string
     * @example 
     * @return 
     */
    public function __toString()
    {
    
    }

    /**
     * 
     *从缓冲区取出内容(会复制一次内存)
     * @example 
     * @param int $offset 表示偏移量，如果为负数，表示倒数计算偏移量
     * @param int $length 表示读取数据的长度，默认为从 $offset 到整个缓存区末尾
     * @param boolean $seek 表示从缓冲区的头部将此数据移除
     * @return string
     */
    public function substr(int $offset, int $length, bool $seek): string
    {
    
    }

    /**
     * 
     *往缓冲区中写入内容(向缓存区的任意内存位置写数据。read/write函数可以直接读写内存。所以使用务必要谨慎，否则可能会破坏现有数据。)
     * @example 
     * @param int $offset 偏移量
     * @param string $data 写入的数据
     * @return 
     */
    public function write(int $offset, string $data)
    {
    
    }

    /**
     * 
     *从缓冲区读内容(此接口是一个底层接口，可直接操作内存)
     * @example 
     * @param int $offset 偏移量
     * @param int $length 要读取的数据长度
     * @return 
     */
    public function read(int $offset, int $length)
    {
    
    }

    /**
     * 
     *将数据添加到缓冲区末尾
     * @example 
     * @param string $data 要写入的数据，支持二进制内容
     * @return int
     */
    public function append(string $data): int
    {
    
    }

    /**
     * 
     *给缓冲区扩容
     * @example 
     * @param int $size 指定新的缓冲区尺寸，必须大于当前的尺寸
     * @return 
     */
    public function expand(int $size)
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
     *清理缓冲区数据(执行此操作后，缓存区将重置。swoole_buffer对象就可以用来处理新的请求了)
     * @example 
     * @return 
     */
    public function clear()
    {
    
    }

    /**
     * 
     *序列化函数调用的魔术方法(在PHP进行序列化时，serialize() 检查类中是否有 __sleep() ,如果有，则该函数将在任何序列化之前运行。该函数必须返回一个需要进行序列化保存的成员属性数组，并且只序列化该函数返回的这些成员属性. 该函数有两个作用: 第一. 在序列化之前,关闭对象可能具有的任何数据库连接等. 第二. 指定对象中需要被序列化的成员属性,如果某个属性比较大而不需要储存下来,可以不把它写进__sleep要返回的数组中,这样该属性就不会被序列化)
     * @example 
     * @return 
     */
    public function __sleep()
    {
    
    }

    /**
     * 
     *反序列化函数调用的魔术方法(unserialize() 从字节流中创建了一个对象之后,马上检查是否具有__wakeup 的函数的存在。如果存在，__wakeup 立刻被调用。使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务)
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    
    }

}

