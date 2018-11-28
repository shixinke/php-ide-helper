<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*一个新的内存数据结构Channel，类似于Go的chan通道，底层基于共享内存+Mutex互斥锁实现，可实现用户态的高性能内存队列(Channel可用于多进程环境下，底层在读取写入时会自动加锁，应用层不需要担心数据同步问题;必须在父进程内创建才可以在子进程内使用)
*/
namespace Swoole;
class Channel
{
    /**
     * 
     *创建通道
     * @example 
     * @param int $size 通道占用的内存的尺寸，单位为字节。最小值为64K，最大值没有限制
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
     *向通道写入数据
     * @example 
     * @param mixed $data 可以为任意PHP变量，当$data是非字符串类型时底层会自动进行串化($data的尺寸超过8K时会启用临时文件存储数据;$data必须为非空变量，如空字符串、空数组、0、null、false)
     * @return boolean
     */
    public function push($data): boolean
    {
    
    }

    /**
     * 
     *观察数据
     * @example 
     * @return 
     */
    public function peek()
    {
    
    }

    /**
     * 
     *弹出数据
     * @example 
     * @return 
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
    public function stats(): array
    {
        return [
            'queue_num'=>0,
            'queue_bytes'=>0
        ];
    }

}

