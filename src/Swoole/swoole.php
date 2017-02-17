<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*PHP的异步、并行、高性能网络通信引擎，使用纯C语言编写，提供了PHP语言的异步多线程服务器，异步TCP/UDP网络客户端，异步MySQL，异步Redis，数据库连接池，AsyncTask，消息队列，毫秒定时器，异步文件读写，异步DNS查询。 Swoole内置了Http/WebSocket服务器端/客户端、Http2.0服务器端。
*/
/**
 * php.ini配置选项: 

 * swoole异步IO线程数
 * swoole.aio_thread_num=2

 * 是否显示错误
 * swoole.display_errors=On

 * 是否使用命名空间
 * swoole.use_namespace=0

 * 设置消息队列的KEY
 * swoole.message_queue_key=0

 * unix的缓冲区大小
 * swoole.unixsock_buffer_size=8388608

*/
/**
Base模式，传统的异步非阻塞模式，如果回调函数中有阻塞操作会导致server退化为同步模式
*/
define('SWOOLE_BASE', 4);
/**
线程模式(已废弃)，多线程Worker模式。Reactor线程来处理网络事件轮询，读取数据。得到的请求交给worker线程去处理
*/
define('SWOOLE_THREAD', 2);
/**
进程模式(默认)。提供完善的进程管理、内存保护机制
*/
define('SWOOLE_PROCESS', 3);
/**
使用Unix的socket进行进程间通信
*/
define('SWOOLE_IPC_UNSOCK', 1);
/**
使用消息队列进行进程间通信
*/
define('SWOOLE_IPC_MSGQUEUE', 2);
/**
抢占式进程间通信
*/
define('SWOOLE_IPC_PREEMPTIVE', 3);
/**
TCP IPv4 socket
*/
define('SWOOLE_SOCK_TCP', 1);
/**
TCP IPv6 socket
*/
define('SWOOLE_SOCK_TCP6', 3);
/**
UDP IPv4 socket
*/
define('SWOOLE_SOCK_UDP', 2);
/**
UDP IPv6 socket
*/
define('SWOOLE_SOCK_UDP6', 4);
/**
UNIX UDP socket(数据报文)
*/
define('SWOOLE_SOCK_UNIX_DGRAM', 5);
/**
UNIX TCP socket(数据流)
*/
define('SWOOLE_SOCK_UNIX_STREAM', 6);
/**
TCP IPv4
*/
define('SWOOLE_TCP', 1);
/**
TCP IPv6
*/
define('SWOOLE_TCP6', 3);
/**
UDP IPv4
*/
define('SWOOLE_UDP', 2);
/**
UDP IPv6
*/
define('SWOOLE_UDP6', 4);
/**
UNIX数据报文(一般是UDP协议)
*/
define('SWOOLE_UNIX_DGRAM', 5);
/**
UNIX数据流(一般是TCP协议)
*/
define('SWOOLE_UNIX_STREAM', 6);
/**
同步socket
*/
define('SWOOLE_SOCK_SYNC', 0);
/**
异步socket
*/
define('SWOOLE_SOCK_ASYNC', 1);
/**
swoole同步
*/
define('SWOOLE_SYNC', 2048);
/**
swoole异步
*/
define('SWOOLE_ASYNC', 1024);
/**
长连接
*/
define('SWOOLE_KEEP', 4096);
/**
swoole读事件
*/
define('SWOOLE_EVENT_READ', 512);
/**
swoole写事件
*/
define('SWOOLE_EVENT_WRITE', 1024);
/**
swoole版本
*/
define('SWOOLE_VERSION', '2.0.6');
/**
Redis事务模式
*/
define('SWOOLE_REDIS_MODE_MULTI', 0);
/**
Redis管道模式
*/
define('SWOOLE_REDIS_MODE_PIPELINE', 1);
/**
Redis的未知类型
*/
define('SWOOLE_REDIS_TYPE_NOT_FOUND', 0);
/**
Redis的string(字符串)类型
*/
define('SWOOLE_REDIS_TYPE_STRING', 1);
/**
Redis的set(集合)类型
*/
define('SWOOLE_REDIS_TYPE_SET', 2);
/**
Redis的list(列表)类型
*/
define('SWOOLE_REDIS_TYPE_LIST', 3);
/**
Redis的zset(有序集合)类型
*/
define('SWOOLE_REDIS_TYPE_ZSET', 4);
/**
Redis的hash(字典)类型
*/
define('SWOOLE_REDIS_TYPE_HASH', 5);
/**
使用类似于Node.js的线程池同步阻塞模拟异步
*/
define('SWOOLE_AIO_BASE', 0);
/**
Linux异步IO
*/
define('SWOOLE_AIO_LINUX', 1);
/**
swoole文件锁
*/
define('SWOOLE_FILELOCK', 2);
/**
swoole互斥锁
*/
define('SWOOLE_MUTEX', 3);
/**
swoole信号量
*/
define('SWOOLE_SEM', 4);
/**
swoole读写锁
*/
define('SWOOLE_RWLOCK', 1);
/**
swoole自旋锁
*/
define('SWOOLE_SPINLOCK', 5);
/**
UTF-8文本字符数据(websocket数据帧类型)
*/
define('WEBSOCKET_OPCODE_TEXT', 1);
/**
二进制数据(websocket数据帧类型)
*/
define('WEBSOCKET_OPCODE_BINARY', 2);
/**
ping数据(websocket数据帧类型)
*/
define('WEBSOCKET_OPCODE_PING', 9);
/**
连接进入等待握手
*/
define('WEBSOCKET_STATUS_CONNECTION', 1);
/**
websocket正在握手状态
*/
define('WEBSOCKET_STATUS_HANDSHAKE', 2);
/**
已握手成功等待浏览器发送数据帧
*/
define('WEBSOCKET_STATUS_FRAME', 3);
/**
websocket活动连接状态
*/
define('WEBSOCKET_STATUS_ACTIVE', 3);
/**
* 
*获取swoole扩展的版本号
* @example 
* $version = swoole_version();
* @return string
*/
function swoole_version()
{
}

/**
* 
*获取本地CPU的数量
* @example 
* $num = swoole_cpu_num();
* @return int
*/
function swoole_cpu_num()
{
}

/**
* 
*获取最近一次的错误码
* @example 
* 
* @return int
*/
function swoole_last_error()
{
}

/**
* 
*为指定的socket添加事件监听器
* @example 
* 
* @param int $fd
* @param callable $read_callback
* @param callable $write_callback
* @param  $events
* @return boolean
*/
function swoole_event_add($fd, Callable $read_callback, Callable $write_callback, $events)
{
}

/**
* 
*修改socket事件的设置
* @example 
* 
* @param int $fd
* @param callable $read_callback
* @param callable $write_callback
* @param  $events
* @return boolean
*/
function swoole_event_set($fd, Callable $read_callback, Callable $write_callback, $events)
{
}

/**
* 
*删除一个事件(必须在swoole_event_add后面使用)
* @example 
* 
* @param int $fd
* @return boolean
*/
function swoole_event_del($fd)
{
}

/**
* 
*退出事件循环
* @example 
* 
* @return void
*/
function swoole_event_exit()
{
}

/**
* 
*事件轮询
* @example 
* 
* @return void
*/
function swoole_event_wait()
{
}

/**
* 
*异步写事件
* @example 
* 
* @param int $fd
* @param string $data
* @return 
*/
function swoole_event_write($fd, $data)
{
}

/**
* 
*延后执行一个PHP函数
* @example 
* 
* @param callable $callback
* @return 
*/
function swoole_event_defer(Callable $callback)
{
}

/**
* 
*添加一个在指定的时间后执行某个函数的定时器
* @example 
* 
* @param int $ms
* @param callable $callback
* @param mixed $param
* @return int
*/
function swoole_timer_after($ms, Callable $callback, $param)
{
}

/**
* 
*添加一个在指定时间循环执行某个函数的定时器
* @example 
* 
* @param int $ms
* @param callable $callback
* @return int
*/
function swoole_timer_tick($ms, Callable $callback)
{
}

/**
* 
*检查一个定时器是否存在
* @example 
* 
* @param int $timer_id
* @return boolean
*/
function swoole_timer_exists($timer_id)
{
}

/**
* 
*清除某个定时器
* @example 
* 
* @param int $timer_id
* @return 
*/
function swoole_timer_clear($timer_id)
{
}

/**
* 
*置异步IO相关的选项
* @example 
* 
* @param array $settings
* @return 
*/
function swoole_async_set(Array $settings)
{
}

/**
* 
*异步读文件，使用此函数读取文件是非阻塞的，当读操作完成时会自动回调指定的函数
* @example 
* 
* @param string $filename
* @param callable $callback
* @param int $chunk_size
* @param int $offset
* @return boolean
*/
function swoole_async_read($filename, Callable $callback, $chunk_size, $offset)
{
}

/**
* 
*异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
* @example 
* 
* @param string $filename
* @param string $content
* @param int $offset
* @param callable $callback
* @return boolean
*/
function swoole_async_write($filename, $content, $offset, Callable $callback)
{
}

/**
* 
*异步读取文件内容
* @example 
* 
* @param string $filename
* @param callable $callback
* @return boolean
*/
function swoole_async_readfile($filename, Callable $callback)
{
}

/**
* 
*异步写文件，调用此函数后会立即返回。当写入完成时会自动回调指定的callback函数
* @example 
* 
* @param string $filename
* @param string $content
* @param callable $callback
* @param int $flags
* @return 
*/
function swoole_async_writefile($filename, $content, Callable $callback, $flags)
{
}

/**
* 
*将域名解析为IP地址。调用此函数是非阻塞的，调用会立即返回
* @example 
* swoole_async_dns_lookup("www.baidu.com", function($host, $ip){
*     echo "{$host} : {$ip}
* ";
* });
* @param string $domain_name
* @param callable $callback
* @return 
*/
function swoole_async_dns_lookup($domain_name, Callable $callback)
{
}

/**
* 
*swoole_client的并行处理中用了select来做IO事件循环
* @example 
* 
* @param array $read_array
* @param array $write_array
* @param array $error_array
* @param float $timeout
* @return int
*/
function swoole_client_select(Array $read_array, Array $write_array, Array $error_array, $timeout)
{
}

/**
* 
*swoole的并行处理中用了select来做IO事件循环
* @example 
* 
* @param array $read_array
* @param array $write_array
* @param array $error_array
* @param float $timeout
* @return int
*/
function swoole_select(Array $read_array, Array $write_array, Array $error_array, $timeout)
{
}

/**
* 
*设置进程的名称(存在兼容性问题，优先使用PHP内置的cli_set_process_title函数)
* @example 
* swoole_set_process_name('swoole_server');
* @param string $process_name
* @return 无
*/
function swoole_set_process_name($process_name)
{
}

/**
* 
*用于获取本地所有网络接口的IP地址(返回以interface名称为key的关联数组)
* @example 
* $ips = swoole_get_local_ip();
* 
* @return array (只返回IPv4地址，返回结果会过滤掉本地的loop地址127.0.0.1,类似于array('eth0'=>'192.168.0.25'))
*/
function swoole_get_local_ip()
{
}

/**
* 
*从标准的Unix Errno错误码转换成错误信息
* @example 
* $errmsg = swoole_strerror($errno);
* @param int $errno
* @return string
*/
function swoole_strerror($errno)
{
}

/**
* 
*获取最近一次系统调用的错误码
* @example 
* echo swoole_strerror(swoole_errno());
* @return int
*/
function swoole_errno()
{
}

/**
* 
*动态加载扩展模块
* @example 
* 
* @param string $name
* @return 
*/
function swoole_load_module($name)
{
}

