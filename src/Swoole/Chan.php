<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*协程版通道
*/

class Chan
{
    /**
     * @var int $capacity 
     * 通道容量
     * @access public
     */
    public $capacity    =    0;

    /**
     * @var int $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

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
     * @param mixed $data 可以为任意PHP变量，当$data是非字符串类型时底层会自动进行串化($data的尺寸超过8K时会启用临时文件存储数据;$data必须为非空变量，如空字符串、空数组、0、null、false)
     * @return boolean
     */
    public function push($data): boolean
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
     *通道是否为空
     * @example 
     * @return boolean
     */
    public function isEmpty(): boolean
    {
    
    }

    /**
     * 
     *通道是否已满
     * @example 
     * @return boolean
     */
    public function isFull(): boolean
    {
    
    }

    /**
     * 
     *关闭通道
     * @example 
     * @return 
     */
    public function close()
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
    
    }

    /**
     * 
     *通道长度
     * @example 
     * @return int
     */
    public function length(): int
    {
    
    }

    /**
     * 
     *
     * @example 
     * @param array $read_list 读通道
     * @param array $write_list 写通道
     * @param int $timeout 超时时间
     * @return array
     */
    public static  function select(Array $read_list, Array $write_list, int $timeout): array
    {
    
    }

}

