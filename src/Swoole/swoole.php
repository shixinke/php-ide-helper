<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/28
*/

/**
*面向生产环境的 PHP 异步网络通信引擎。使 PHP 开发人员可以编写高性能的异步并发 TCP、UDP、Unix Socket、HTTP，WebSocket 服务。Swoole 可以广泛应用于互联网、移动通信、企业软件、云计算、网络游戏、物联网（IOT）、车联网、智能家居等领域
*/
/**
 * php.ini配置选项: 

 * swoole异步IO线程数
 * swoole.aio_thread_num=2

 * 是否显示错误
 * swoole.display_errors=On

 * 是否启用命名空间
 * swoole.use_namespace=0

 * 是否开启对异步任务数据进行序列化功能(开启使用On)
 * swoole.fast_serialize=1

 * unix域连接的缓冲区大小
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
创建tcp socket
*/
define('SWOOLE_SOCK_TCP', 1);
/**
创建tcp ipv6 socket
*/
define('SWOOLE_SOCK_TCP6', 3);
/**
创建udp socket
*/
define('SWOOLE_SOCK_UDP', 2);
/**
创建udp ipv6 socket
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
使用SSL
*/
define('SWOOLE_SSL', 512);
/**
SSLv3 加密方法
*/
define('SWOOLE_SSLv3_METHOD', 1);
/**
SSLv3 服务端加密方法
*/
define('SWOOLE_SSLv3_SERVER_METHOD', 2);
/**
SSLv3 客户端加密方法
*/
define('SWOOLE_SSLv3_CLIENT_METHOD', 3);
/**
SSLv2.3 加密方法
*/
define('SWOOLE_SSLv23_METHOD', 0);
/**
SSLv2.3 服务端加密方法
*/
define('SWOOLE_SSLv23_SERVER_METHOD', 4);
/**
SSLv2.3 客户端加密方法
*/
define('SWOOLE_SSLv23_CLIENT_METHOD', 5);
/**
TLSv1.0 加密方法
*/
define('SWOOLE_TLSv1_METHOD', 6);
/**
TLSv1.0 服务端加密方法
*/
define('SWOOLE_TLSv1_SERVER_METHOD', 7);
/**
TLSv1.0 客户端加密方法
*/
define('SWOOLE_TLSv1_CLIENT_METHOD', 8);
/**
TLSv1.1 加密方法
*/
define('SWOOLE_TLSv1_1_METHOD', 9);
/**
TLSv1.1 服务端加密方法
*/
define('SWOOLE_TLSv1_1_SERVER_METHOD', 10);
/**
TLSv1.1 客户端加密方法
*/
define('SWOOLE_TLSv1_1_CLIENT_METHOD', 11);
/**
TLSv1.2 加密方法
*/
define('SWOOLE_TLSv1_2_METHOD', 12);
/**
TLSv1.2 服务端加密方法
*/
define('SWOOLE_TLSv1_2_SERVER_METHOD', 13);
/**
TLSv1.2 客户端加密方法
*/
define('SWOOLE_TLSv1_2_CLIENT_METHOD', 14);
/**
DTLSv1加密方法
*/
define('SWOOLE_DTLSv1_METHOD', 15);
/**
DTLSv1服务端加密方法
*/
define('SWOOLE_DTLSv1_SERVER_METHOD', 16);
/**
DTLSv1客户端加密方法
*/
define('SWOOLE_DTLSv1_CLIENT_METHOD', 17);
/**
swoole读事件
*/
define('SWOOLE_EVENT_READ', 512);
/**
swoole写事件
*/
define('SWOOLE_EVENT_WRITE', 1024);
/**
swoole 版本号
*/
define('SWOOLE_VERSION', '2.0.10');
/**
swoole redis 客户端多条命令同时执行模式(类似于事务)
*/
define('SWOOLE_REDIS_MODE_MULTI', 0);
/**
swoole redis 客户端管道模式
*/
define('SWOOLE_REDIS_MODE_PIPELINE', 1);
/**
swoole redis 未知类型
*/
define('SWOOLE_REDIS_TYPE_NOT_FOUND', 0);
/**
swoole redis 字符串类型
*/
define('SWOOLE_REDIS_TYPE_STRING', 1);
/**
swoole redis 集合类型
*/
define('SWOOLE_REDIS_TYPE_SET', 2);
/**
swoole redis 列表类型
*/
define('SWOOLE_REDIS_TYPE_LIST', 3);
/**
swoole redis 有序集合类型
*/
define('SWOOLE_REDIS_TYPE_ZSET', 4);
/**
swoole redis 字典类型
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
是否开启对异步任务数据进行序列化功能
*/
define('SWOOLE_FAST_PACK', 1);
/**
将对象反序列化为数组
*/
define('UNSERIALIZE_OBJECT_TO_ARRAY', 1);
/**
将对象反序列化为标准类
*/
define('UNSERIALIZE_OBJECT_TO_STDCLASS', 2);
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
*获取本机CPU的数量
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
* $errno = swoole_last_error();
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
* @param int $fd:连接句柄(文件描述符) 
* @param callable $read_callback:读事件回调 
* @param callable $write_callback:写事件回调 
* @param int $events:事件名称，可选择关闭/开启可读可写事件，如SWOOLE_EVENT_READ，SWOOLE_EVENT_WRITE，或者SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE 
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
* @param int $fd:连接句柄 
* @param callable $read_callback:读事件回调 
* @param callable $write_callback:写事件回调 
* @param int $events:事件名称,，可选择关闭/开启可读可写事件，如SWOOLE_EVENT_READ，SWOOLE_EVENT_WRITE，或者SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE 
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
* @param int $fd:连接句柄 
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
* @param int $fd:连接句柄 
* @param string $data:写入的内容 
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
* @param callable $callback:要执行的函数 
* @return 
*/
function swoole_event_defer(Callable $callback)
{
}

/**
* 
*定义事件循环周期执行函数。此函数会在每一轮事件循环结束时调用
* @example 
* 
* @param callable $callback:要设置的回调函数，必须为可执行。$callback为null时表示清除cycle函数 
* @return boolean
*/
function swoole_event_cycle(Callable $callback)
{
}

/**
* 
*添加一个在指定的时间后执行某个函数的定时器(执行成功返回定时器ID)
* @example 
* 
* @param int $ms:延迟的毫秒数 
* @param callable $callback:执行的函数 
* @param mixed $param:函数参数 
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
* @param int $ms:循环周期时间 
* @param callable $callback:执行的函数 
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
* @param int $timer_id:定时器ID 
* @return bool
*/
function swoole_timer_exists($timer_id)
{
}

/**
* 
*清除某个定时器
* @example 
* 
* @param int $timer_id:定时器ID 
* @return bool
*/
function swoole_timer_clear($timer_id)
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
* swoole_async_set(array('thread_num'=>2))
* @param array $settings:设置的选项 
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
* @param string $filename:文件名 
* @param callable $callback:读操作完成后的回调函数, 其回调函数原型：
    bool callback(string $filename, string $content);
    * $filename，文件名称 
     * $content，读取到的分段内容，如果内容为空，表明文件已读完 
* @param int $chunk_size:读的块大小 
* @param int $offset:读文件的指针偏移量 
* @return bool
*/
function swoole_async_read($filename, Callable $callback, $chunk_size, $offset)
{
}

/**
* 
*异步写文件，与swoole_async_writefile不同，write是分段读写的。不需要一次性将要写的内容放到内存里，所以只占用少量内存。swoole_async_write通过传入的offset参数来确定写入的位置
* @example 
* 
* @param string $filename:写入的文件名 
* @param string $content:写入的文件内容 
* @param int $offset:写入的文件位置(指针偏移) 
* @param callable $callback:写完成后执行的回调函数 
* @return 
*/
function swoole_async_write($filename, $content, $offset, Callable $callback)
{
}

/**
* 
*异步读取文件内容(与readfile功能类似)，完成后并执行某个函数
* @example 
* swoole_async_readfile(__DIR__."/server.php", function($filename, $content) {
*       echo "$filename: $content";
* });
* @param string $filename:文件名 
* @param callable $callback:读文件完成后的回调函数 
* @return 
*/
function swoole_async_readfile($filename, Callable $callback)
{
}

/**
* 
*异步写文件，调用此函数后会立即返回。当写入完成时会自动回调指定的callback函数
* @example 
* 
* @param string $filename:写入的文件名 
* @param string $content:写入的内容 
* @param callable $callback:写文件完成后的回调函数 
* @param  $flags: 
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
* echo "{$host} : {$ip}
*     ";
* });
* @param string $hostname:域名 
* @param callable $callback:解析后的回调函数 
* @return 
*/
function swoole_async_dns_lookup($hostname, Callable $callback)
{
}

/**
* 
*协程DNS查询
* @example 
* 
* @param string $domain_name:要查询的域名 
* @return string|bool
*/
function swoole_async_dns_lookup_coro($domain_name)
{
}

/**
* 
*swoole_client的并行处理中用了select来做IO事件循环
* @example 
* 
* @param array $read_array:可读文件描述符 
* @param array $write_array:可写文件描述符 
* @param array $error_array:错误文件描述符 
* @param float $timeout:超时时间 
* @return int
*/
function swoole_client_select(Array $read_array, Array $write_array, Array $error_array, $timeout)
{
}

/**
* 
*swoole的并行处理中用了select来做IO事件循环(是swoole_client_select的别名)
* @example 
* 
* @param array $read_array:可读文件描述符 
* @param array $write_array:可写文件描述符 
* @param array $error_array:错误文件描述符 
* @param float $timeout:超时时间 
* @return 
*/
function swoole_select(Array $read_array, Array $write_array, Array $error_array, $timeout)
{
}

/**
* 
*设置进程的名称(存在兼容性问题，优先使用PHP内置的cli_set_process_title函数)
* @example 
* swoole_set_process_name('swoole_server');
* @param string $process_name:进程名称 
* @return 
*/
function swoole_set_process_name($process_name)
{
}

/**
* 
*用于获取本地所有网络接口的IP地址(返回以interface名称为key的关联数组)
* @example 
* $ips = swoole_get_local_ip();
* @return array (只返回IPv4地址，返回结果会过滤掉本地的loop地址127.0.0.1,类似于array('eth0'=>'192.168.0.25'))
*/
function swoole_get_local_ip()
{
}

/**
* 
*获取本地所有网络接口的mac地址(返回以interface名称为key的关联数组)
* @example 
* $macs = swoole_get_local_mac();
* @return array
*/
function swoole_get_local_mac()
{
}

/**
* 
*从标准的Unix Errno错误码转换成错误信息
* @example 
* 
* @param int $errno:标准错误码 
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

