<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*异步IO操作
*/
class swoole_async
{
    /**
     * 
     *异步读文件，使用此函数读取文件是非阻塞的，当读操作完成时会自动回调指定的函数
     * @example 
     * @param string $filename 异步读文件，使用此函数读取文件是非阻塞的，当读操作完成时会自动回调指定的函数
     * @param callable $callback 异步读文件，使用此函数读取文件是非阻塞的，当读操作完成时会自动回调指定的函数
     * @param int $chunk_size 异步读文件，使用此函数读取文件是非阻塞的，当读操作完成时会自动回调指定的函数
     * @param int $offset 异步读文件，使用此函数读取文件是非阻塞的，当读操作完成时会自动回调指定的函数
     * @return bool
     */
    public static  function read($filename, Callable $callback, $chunk_size, $offset)
    {
    }

    /**
     * 
     *异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
     * @example 
     * @param string $filename 异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
     * @param string $content 异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
     * @param int $offset 异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
     * @param callable $callback 异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
     * @return 
     */
    public static  function write($filename, $content, $offset, Callable $callback)
    {
    }

    /**
     * 
     *异步读取文件内容
     * @example 
     * @param string $filename 异步读取文件内容
     * @param callable $callback 异步读取文件内容
     * @return 
     */
    public static  function readFile($filename, Callable $callback)
    {
    }

    /**
     * 
     *异步写文件
     * @example 
     * @param string $filename 异步写文件
     * @param string $content 异步写文件
     * @param 写完的回调函数 $callback 
     * @param int $flags 异步写文件
     * @return 
     */
    public static  function writeFile($filename, $content, $callback, $flags)
    {
    }

    /**
     * 
     *将域名解析为IP地址。调用此函数是非阻塞的，调用会立即返回。将向下执行后面的代码(当DNS查询完成时，自动回调指定的callback函数)
     * @example 
     * @param string $domain_name 将域名解析为IP地址。调用此函数是非阻塞的，调用会立即返回。将向下执行后面的代码(当DNS查询完成时，自动回调指定的callback函数)
     * @param callable $content 将域名解析为IP地址。调用此函数是非阻塞的，调用会立即返回。将向下执行后面的代码(当DNS查询完成时，自动回调指定的callback函数)
     * @return 
     */
    public static  function dnsLookup($domain_name, Callable $content)
    {
    }

    /**
     * 
     *设置选项
     * @example 
     * @param array $settings 设置选项
     * @return 
     */
    public static  function set(Array $settings)
    {
    }

}

