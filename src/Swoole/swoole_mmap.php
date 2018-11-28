<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*提供了对操作系统mmap的封装。使用mmap可以很方便地将一个磁盘文件映射为内存，读写性能更高。
*/
class swoole_mmap
{
    /**
     * 
     *创建文件内存映射(执行成功将返回一个PHP的stream资源，可使用PHP提供的流式操作函数读写数据)
     * @example 
     * @param string $filename 磁盘文件名称，必须是存在的文件，如果文件不存在将会创建失败。可以使用file_put_contents来初始化文件
     * @param int $size 映射操作，默认为整个文件的长度，操作系统会分配同等大小的内存。注意不要尝试将超过系统内存尺寸的文件进行映射
     * @param int $offset 文件的映射起始位置，默认为0
     * @return 
     */
    public static  function open(string $filename, int $size, int $offset)
    {
    
    }

}

