<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
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
     * @param string $filename 读入的文件名
     * @param callable $callback 读文件完成后的回调函数(回调函数可使用的参数$fileName, $content)
     * @param int $chunk_size 每次读入的块大小
     * @param int $offset 读入每次的偏移量
     * @return boolean
     */
    public static  function read(string $filename, Callable $callback, int $chunk_size = 8192, int $offset = 0): boolean
    {
    
    }

    /**
     * 
     *异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
     * @example 
     * @param string $filename 写入的文件名
     * @param string $content 写入的内容
     * @param int $offset 写入的位置
     * @param callable $callback 写操作完成后的回调函数
     * @return 
     */
    public static  function write(string $filename, string $content, int $offset, Callable $callback)
    {
    
    }

    /**
     * 
     *异步读取文件内容
     * @example 
     * @param string $filename 读入的文件名
     * @param callable $callback 读文件完成后的回调函数
     * @return 
     */
    public static  function readFile(string $filename, Callable $callback)
    {
    
    }

    /**
     * 
     *异步写文件
     * @example 
     * @param string $filename 写入的文件名
     * @param string $content 写入的内容
     * @param callable $callback 写操作完成后的回调函数
     * @param int $flags 参数4为写入的选项，可以使用FILE_APPEND表示追加到文件末尾
     * @return 
     */
    public static  function writeFile(string $filename, string $content, Callable $callback, int $flags)
    {
    
    }

    /**
     * 
     *将域名解析为IP地址。调用此函数是非阻塞的，调用会立即返回。将向下执行后面的代码(当DNS查询完成时，自动回调指定的callback函数)
     * @example 
     * @param string $hostname 域名
     * @param callable $callback 解析完成后的回调函数
     * @return 
     */
    public static  function dnsLookup(string $hostname, Callable $callback)
    {
    
    }

    /**
     * 
     *协程DNS查询
     * @example 
     * @param string $domain_name 解析的域名
     * @return 
     */
    public static  function dnsLookupCoro(string $domain_name)
    {
    
    }

    /**
     * 
     *置异步IO相关的选项
     *设置的选项可以为以下值:
     * thread_num : 设置异步文件IO线程的数量
     *    aio_mode : 设置异步文件IO的操作模式，目前支持SWOOLE_AIO_BASE（使用类似于Node.js的线程池同步阻塞模拟异步）、SWOOLE_AIO_LINUX（Linux Native AIO） 2种模式
     *    enable_signalfd : 开启和关闭signalfd特性的使用
     *    socket_buffer_size : 设置SOCKET内存缓存区尺寸
     *    socket_dontwait :在内存缓存区已满的情况下禁止底层阻塞等待
     *    log_file :设置日志文件路径
     *    log_level : 设置错误日志等级
     * @example 
     * @param array $settings 要设置的选项
     * @return 
     */
    public static  function set(Array $settings)
    {
    
    }

    /**
     * 
     *异步执行Shell命令。相当于shell_exec函数，执行后底层会fork一个子进程，并执行对应的command命令
     * @example 
     * @param string $command 为执行的终端指令，如ls
     * @param callable $callback 命令执行完毕子进程退出后会回调指定的$callback函数，回调函数接收2个参数，第一个参数为命令执行后的屏幕输出内容$result，第二个参数为进程退出的状态信息$status
     * @return 
     */
    public static  function exec(string $command, Callable $callback)
    {
    
    }

}

