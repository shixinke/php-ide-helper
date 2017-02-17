<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*新的内存数据结构Channel，类似于Go的chan，底层基于共享内存+Mutex互斥锁实现，可实现用户态的高性能内存队列
*/
class swoole_channel
{
    /**
     * 
     *创建通道
     * @example 
     * @param int $size 创建通道
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
     *向通道写入数据
     * @example 
     * @param mixed $data 向通道写入数据
     * @return bool
     */
    public function push($data)
    {
    }

    /**
     * 
     *弹出数据(当通道内有数据时自动将数据弹出并还原为PHP变量;当通道内没有任何数据时pop会失败并返回false)
     * @example 
     * @return mixed
     */
    public function pop()
    {
    }

    /**
     * 
     *获取通道的状态(返回一个数组，包括2项信息:queue_num 通道中的元素数量;queue_bytes 通道当前占用的内存字节数)
     * @example 
     * @return array
     */
    public function stats()
    {
    }

}

