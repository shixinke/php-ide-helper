<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*内存池切片
*/
namespace Swoole\Memory\Pool;
class Slice
{
    /**
     * 
     *从内存池切片中读取数据
     * @example 
     * @param int $size 读取的长度
     * @param int $offset 读取的位置偏移量
     * @return 
     */
    public function read(int $size, int $offset)
    {
    
    }

    /**
     * 
     *往内存池切片中写入数据
     * @example 
     * @param string $data 写入的数据
     * @param int $offset 写入的位置
     * @return 
     */
    public function write(string $data, int $offset)
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

}

