<?php
/**
* Swoole自动补全类(基于最新的2.1.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/25
*/

/**
*swoole内置协程(协程可以理解为纯用户态的线程，其通过协作而不是抢占来进行切换。相对于进程或者线程，协程所有的操作都可以在用户态完成，创建和切换的消耗更低。Swoole可以为每一个请求创建对应的协程，根据IO的状态来合理的调度协程)
*/
class Co
{
    /**
     * 
     *创建一个新的协程，并立即执行
     * @example 
     * @param callable $func 协程执行的代码
     * @return bool
     */
    public static  function create(Callable $func)
    {
    }

    /**
     * 
     *设置选项
     * @example 
     * @param array $options 选项
     * @return 
     */
    public static  function set(Array $options)
    {
    }

    /**
     * 
     *获取等待的协程数量
     * @example 
     * @return int
     */
    public static  function cli_wait()
    {
    }

    /**
     * 
     *挂起当前协程
     * @example 
     * @param string $uid 要挂起协程的ID
     * @return 
     */
    public static  function suspend($uid)
    {
    }

    /**
     * 
     *恢复某个协程，使其继续运行
     * @example 
     * @param string $uid 为要恢复的协程ID，在协程内可以使用getuid获取到协程的ID
     * @return 
     */
    public static  function resume($uid)
    {
    }

    /**
     * 
     *获取当前协程的唯一ID
     * @example 
     * @return int
     */
    public static  function getuid()
    {
    }

    /**
     * 
     *进入等待状态。相当于PHP的sleep函数，不同的是Coroutine::sleep是协程调度器实现的，底层会yield当前协程，让出时间片，并添加一个异步定时器，当超时时间到达时重新resume当前协程，恢复运行。使用sleep接口可以方便地实现超时等待功能。
     * @example 
     * @param float $seconds 为睡眠的时间，单位为秒，支持浮点型，最小精度为毫秒
     * @return 
     */
    public static  function sleep($seconds)
    {
    }

    /**
     * 
     *协程方式按行读取文件内容
     * @example 
     * @param resource $handle 文件句柄(文件流)
     * @return 
     */
    public static  function fgets($handle)
    {
    }

    /**
     * 
     *协程读取文件
     * @example 
     * @param resource $handle 文件句柄(文件流)
     * @param int $length 读取的长度
     * @return 
     */
    public static  function fread($handle, $length)
    {
    }

    /**
     * 
     *协程读取文件
     * @example 
     * @param string $filename 文件名称
     * @return 
     */
    public static  function readFile($filename)
    {
    }

    /**
     * 
     *协程写入文件
     * @example 
     * @param resource $handle 文件句柄
     * @param string $string 写入的数据
     * @param int $length 写入的数据长度
     * @return 
     */
    public static  function fwrite($handle, $string, $length)
    {
    }

    /**
     * 
     *协程写入文件
     * @example 
     * @param string $filename 文件名
     * @param string $content 写入的数据
     * @param int $flags 为写入的选项，可以使用FILE_APPEND表示追加到文件末尾，默认会清空当前文件内容
     * @return bool
     */
    public static  function writeFile($filename, $content, $flags)
    {
    }

    /**
     * 
     *将域名解析为IP，基于同步的线程池模拟实现。底层自动进行协程调度
     * @example 
     * @param string $domain_name 域名或IP
     * @param int $family 使用的协议族
     * @return 
     */
    public static  function gethostbyname($domain_name, $family)
    {
    }

    /**
     * 
     *进行DNS解析，查询域名对应的IP地址，与gethostbyname不同，getaddrinfo支持更多参数设置，而且会返回多个IP结果。
     * @example 
     * @param string $hostname 主机名
     * @param int $family 协议族
     * @param int $socktype socket类型
     * @param int $protocol 使用的协议
     * @param string $service 服务
     * @return array | bool
     */
    public static  function getaddrinfo($hostname, $family, $socktype, $protocol, $service)
    {
    }

    /**
     * 
     *协程版反射调用函数
     * @example 
     * @param callable $func 调用函数
     * @param mixed $parameters 调用函数的参数(可空变量)
     * @return 
     */
    public static  function call_user_func(Callable $func, $parameters)
    {
    }

    /**
     * 
     *协程版反射调用函数
     * @example 
     * @param callable $func 调用函数
     * @param array $parameters 调用函数的参数列表
     * @return 
     */
    public static  function call_user_func_array(Callable $func, Array $parameters)
    {
    }

    /**
     * 
     *执行一条shell指令。底层自动进行协程调度
     * @example 
     * @param string $cmd 要执行的shell指令
     * @return array
     */
    public static  function exec($cmd)
    {
    }

}

