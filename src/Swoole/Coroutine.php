<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*swoole内置协程(协程可以理解为纯用户态的线程，其通过协作而不是抢占来进行切换。相对于进程或者线程，协程所有的操作都可以在用户态完成，创建和切换的消耗更低。Swoole可以为每一个请求创建对应的协程，根据IO的状态来合理的调度协程)
*/
namespace Swoole;
class Coroutine
{
    /**
     * 
     *创建一个新的协程，并立即执行
     * @example 
     * @param callable $func 协程执行的代码
     * @return bool
     */
    public static  function create(Callable $func): bool
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
    public static  function cli_wait(): int
    {
    
    }

    /**
     * 
     *挂起当前协程
     * @example 
     * @param string $uid 要挂起协程的ID
     * @return 
     */
    public static  function suspend(string $uid)
    {
    
    }

    /**
     * 
     *让出当前协程的执行权(必须与Coroutine::resume()方法成对使用。该协程yield以后，必须由其他外部协程resume，否则将会造成协程泄漏，被挂起的协程永远不会执行)
     * @example 
     * @return 
     */
    public static  function yield()
    {
    
    }

    /**
     * 
     *恢复某个协程，使其继续运行
     * @example 
     * @param string $uid 为要恢复的协程ID，在协程内可以使用getuid获取到协程的ID
     * @return 
     */
    public static  function resume(string $uid)
    {
    
    }

    /**
     * 
     *获取当前协程的唯一ID
     * @example 
     * @return int
     */
    public static  function getuid(): int
    {
    
    }

    /**
     * 
     *进入等待状态。相当于PHP的sleep函数，不同的是Coroutine::sleep是协程调度器实现的，底层会yield当前协程，让出时间片，并添加一个异步定时器，当超时时间到达时重新resume当前协程，恢复运行。使用sleep接口可以方便地实现超时等待功能。
     * @example 
     * @param float $seconds 为睡眠的时间，单位为秒，支持浮点型，最小精度为毫秒
     * @return 
     */
    public static  function sleep(float $seconds)
    {
    
    }

    /**
     * 
     *协程方式按行读取文件内容
     * @example 
     * @param resource $handle 文件句柄(文件流)
     * @return 
     */
    public static  function fgets(resource $handle)
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
    public static  function fread(resource $handle, int $length)
    {
    
    }

    /**
     * 
     *协程读取文件
     * @example 
     * @param string $filename 文件名称
     * @return 
     */
    public static  function readFile(string $filename)
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
    public static  function fwrite(resource $handle, string $string, int $length)
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
    public static  function writeFile(string $filename, string $content, int $flags): bool
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
    public static  function gethostbyname(string $domain_name, int $family)
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
    public static  function getaddrinfo(string $hostname, int $family, int $socktype, int $protocol, string $service): ?array
    {
    
    }

    /**
     * 
     *执行一条shell指令。底层自动进行协程调度
     * @example 
     * @param string $cmd 要执行的shell指令
     * @return array
     */
    public static  function exec(string $cmd): array
    {
    
    }

    /**
     * 
     *获取协程状态,返回数组包含：coroutine_num： 当前运行的协程数量;coroutine_peak_num： 当前运行的协程数量的峰值
     * @example 
     * @return array
     */
    public static  function stats(): array
    {
    
    }

    /**
     * 
     *获取文件系统信息
     * @example go(function() {
     *     var_dump(co::statvfs('/'));
     * });
     * @param string $path 文件系统挂载的目录，如/，可以使用df和mount -l命令获取
     * @return array | false
     */
    public static  function statvfs(string $path): ?array
    {
    
    }

    /**
     * 
     *遍历当前进程内的所有协程
     * @example $coros = Coroutine::listCoroutines();
     * foreach($coros as $cid)
     * {
     *     var_dump(Coroutine::getBackTrace($cid));
     * }
     * @return \Swoole\Coroutine\Iterator
     */
    public static  function listCoroutines()
    {
    
    }

    /**
     * 
     *将域名解析为IP，基于同步的线程池模拟实现。底层自动进行协程调度
     * @example 
     * @param int $cid 协程的ID，默认为当前协程
     * @param int $options 设置选项(DEBUG_BACKTRACE_PROVIDE_OBJECT: 是否填充object的索引;DEBUG_BACKTRACE_IGNORE_ARGS: 是否忽略args的索引，包括所有的 function/method 的参数，能够节省内存开销)
     * @param int $limit 限制返回堆栈帧的数量
     * @return array|bool
     */
    public static  function getBackTrace(int $cid, int $options, int $limit): ?array
    {
    
    }

    /**
     * 
     *延迟执行函数，用于资源的释放, 会在协程关闭之前(即协程函数执行完毕时)进行调用, 就算抛出了异常, 已注册的defer也会被执行
     * @example 
     * @param Callable $callabck 延迟执行的函数
     * @return 
     */
    public static  function defer(Callable $callabck)
    {
    
    }

}

