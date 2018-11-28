<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*swoole消息队列模块
*/
namespace Swoole;
class MsgQueue
{
    /**
     * 
     *初始化消息队列
     * @example 
     * @param int $len 队列长度
     * @return 
     */
    public function __construct(int $len)
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
     *向队列中添加数据
     * @example 
     * @param mixed $data 向队列中添加的数据
     * @param int $type 类型
     * @return 
     */
    public function push($data, int $type)
    {
    
    }

    /**
     * 
     *从队列中移除数据
     * @example 
     * @param int $type 类型
     * @return 
     */
    public function pop(int $type)
    {
    
    }

    /**
     * 
     *设置是否阻塞
     * @example 
     * @param bool $blocking 是否阻塞
     * @return 
     */
    public function setBlocking(bool $blocking)
    {
    
    }

    /**
     * 
     *获取队列统计信息(成功时返回一个包含queue_num和queue_bytes两个元素的数组，不成功时返回false)
     * @example 
     * @return array|bool
     */
    public function stats(): ?array
    {
    
    }

    /**
     * 
     *销毁队列
     * @example 
     * @return 
     */
    public function destory()
    {
    
    }

}

