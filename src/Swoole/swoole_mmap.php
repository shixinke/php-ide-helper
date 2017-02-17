<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*提供了对操作系统mmap的封装。使用mmap可以很方便地将一个磁盘文件映射为内存，读写性能更高。(可以减少读写磁盘操作的IO消耗、减少内存拷贝。在实现高性能的磁盘操作程序中，可以使用mmap来提升性能)
*/
class swoole_mmap
{
    /**
     * 
     *创建文件内存映射
     * @example 
     * @param string $filename 创建文件内存映射
     * @param int $size 创建文件内存映射
     * @param int $offset 创建文件内存映射
     * @return mixed(resource)
     */
    public static  function open($filename, $size, $offset)
    {
    }

}

