<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*面向生产环境的 PHP 异步网络通信引擎。使 PHP 开发人员可以编写高性能的异步并发 TCP、UDP、Unix Socket、HTTP，WebSocket 服务。Swoole 可以广泛应用于互联网、移动通信、企业软件、云计算、网络游戏、物联网（IOT）、车联网、智能家居等领域
*/
/**
 * php.ini配置选项: 

 * 是否开启协程模式
 * swoole.enable_coroutine=On

 * swoole异步IO线程数
 * swoole.aio_thread_num=2

 * 是否显示错误
 * swoole.display_errors=On

 * 是否启用命名空间
 * swoole.use_namespace=1

 * 是否启用短命名
 * swoole.use_shortname=On

 * 是否开启对异步任务数据进行序列化功能(开启使用On)
 * swoole.fast_serialize=Off

 * unix域连接的缓冲区大小
 * swoole.unixsock_buffer_size=8388608

*/
/**
Base模式，传统的异步非阻塞模式，如果回调函数中有阻塞操作会导致server退化为同步模式
*/
define('SWOOLE_BASE', 4);
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
define('SWOOLE_VERSION', '4.1.0');
/**
内存分配失败错误
*/
define('SWOOLE_ERROR_MALLOC_FAIL', 501);
/**
系统调用失败错误
*/
define('SWOOLE_ERROR_SYSTEM_CALL_FAIL', 502);
/**
PHP严重错误
*/
define('SWOOLE_ERROR_PHP_FATAL_ERROR', 503);
/**
名称过长错误
*/
define('SWOOLE_ERROR_NAME_TOO_LONG', 504);
/**
非法参数错误
*/
define('SWOOLE_ERROR_INVALID_PARAMS', 505);
/**
队列已满错误
*/
define('SWOOLE_ERROR_QUEUE_FULL', 506);
/**
文件不存在错误
*/
define('SWOOLE_ERROR_FILE_NOT_EXIST', 700);
/**
文件过大错误
*/
define('SWOOLE_ERROR_FILE_TOO_LARGE', 701);
/**
文件为空错误
*/
define('SWOOLE_ERROR_FILE_EMPTY', 702);
/**
重复DNS查找请求错误
*/
define('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST', 703);
/**
DNS查找失败错误
*/
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED', 704);
/**
错误的ipv6地址
*/
define('SWOOLE_ERROR_BAD_IPV6_ADDRESS', 705);
/**
未注册的信号错误
*/
define('SWOOLE_ERROR_UNREGISTERED_SIGNAL', 706);
/**
会话被服务端关闭错误
*/
define('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER', 1001);
/**
会话被客户端关闭错误
*/
define('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT', 1002);
/**
会话关闭中错误
*/
define('SWOOLE_ERROR_SESSION_CLOSING', 1003);
/**
会话已关闭错误
*/
define('SWOOLE_ERROR_SESSION_CLOSED', 1004);
/**
会话不存在错误
*/
define('SWOOLE_ERROR_SESSION_NOT_EXIST', 1005);
/**
非法会话ID错误
*/
define('SWOOLE_ERROR_SESSION_INVALID_ID', 1006);
/**
会话丢弃超时数据错误
*/
define('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA', 1007);
/**
输出缓冲区溢出错误
*/
define('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW', 1008);
/**
SSL连接未就绪错误
*/
define('SWOOLE_ERROR_SSL_NOT_READY', 1009);
/**
SSL连接不能使用sendfile错误
*/
define('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE', 1010);
/**
SSL证书为空错误
*/
define('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE', 1011);
/**
SSL证书验证失败错误
*/
define('SWOOLE_ERROR_SSL_VEFIRY_FAILED', 1012);
/**
客户端非法错误
*/
define('SWOOLE_ERROR_SSL_BAD_CLIENT', 1013);
/**
非法SSL协议错误
*/
define('SWOOLE_ERROR_SSL_BAD_PROTOCOL', 1014);
/**
包长度过大错误
*/
define('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE', 1201);
/**
数据长度过大错误
*/
define('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE', 1202);
/**
任务包过大错误
*/
define('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG', 2001);
/**
任务分发失败错误
*/
define('SWOOLE_ERROR_TASK_DISPATCH_FAIL', 2002);
/**
http2流ID过大错误
*/
define('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG', 3001);
/**
http2缺少header错误
*/
define('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER', 3002);
/**
http2流未找到错误
*/
define('SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND', 3003);
/**
异步IO请求类型错误
*/
define('SWOOLE_ERROR_AIO_BAD_REQUEST', 4001);
/**
客户端没有连接错误
*/
define('SWOOLE_ERROR_CLIENT_NO_CONNECTION', 5001);
/**
socket被关闭错误
*/
define('SWOOLE_ERROR_SOCKET_CLOSED', 5002);
/**
不支持的socket版本错误
*/
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION', 7001);
/**
不支持的请求方式错误
*/
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD', 7002);
/**
socket验证失败错误
*/
define('SWOOLE_ERROR_SOCKS5_AUTH_FAILED', 7003);
/**
socket服务端错误
*/
define('SWOOLE_ERROR_SOCKS5_SERVER_ERROR', 7004);
/**
http代理握手错误
*/
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR', 8001);
/**
http非法协议
*/
define('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL', 8002);
/**
websocket非法客户端
*/
define('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT', 8501);
/**
websocket非法操作码
*/
define('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE', 8502);
/**
websocket未连接
*/
define('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED', 8503);
/**
websocket握手失败
*/
define('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED', 8504);
/**
服务端连接必须先于客户端创建
*/
define('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT', 9001);
/**
socket连接过多
*/
define('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET', 9002);
/**
服务端中止
*/
define('SWOOLE_ERROR_SERVER_WORKER_TERMINATED', 9003);
/**
非法的监听端口
*/
define('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT', 9004);
/**
监听端口过多
*/
define('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT', 9005);
/**
缓冲区已满
*/
define('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL', 9006);
/**
没有空闲的工作进程
*/
define('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER', 9007);
/**
服务器只能启动一个
*/
define('SWOOLE_ERROR_SERVER_ONLY_START_ONE', 9008);
/**
主进程发送数据错误
*/
define('SWOOLE_ERROR_SERVER_SEND_IN_MASTER', 9009);
/**
非法请求错误
*/
define('SWOOLE_ERROR_SERVER_INVALID_REQUEST', 9010);
/**
工作进程退出超时
*/
define('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT', 9009);
/**
协程溢出错误
*/
define('SWOOLE_ERROR_CO_OUT_OF_COROUTINE', 10001);
/**
协程已经被绑定错误
*/
define('SWOOLE_ERROR_CO_HAS_BEEN_BOUND', 10002);
/**
自旋锁被两次解锁错误
*/
define('SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK', 10003);
/**
块对象被锁定错误
*/
define('SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED', 10004);
/**
块对象等待错误
*/
define('SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING', 10005);
/**
让出协程出错误
*/
define('SWOOLE_ERROR_CO_YIELD_FAILED', 10006);
/**
获取协程上下文出错
*/
define('SWOOLE_ERROR_CO_GETCONTEXT_FAILED', 10007);
/**
协程切换上下文出错
*/
define('SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED', 10008);
/**
协程设置上下文出错
*/
define('SWOOLE_ERROR_CO_MAKECONTEXT_FAILED', 10009);
/**
IOCP初始化错误
*/
define('SWOOLE_ERROR_CO_IOCPINIT_FAILED', 10010);
/**
保护栈错误
*/
define('SWOOLE_ERROR_CO_PROTECT_STACK_FAILED', 10011);
/**
线程连接错误
*/
define('SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR', 10012);
/**
禁用多线程错误
*/
define('SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD', 10013);
/**
服务端调试
*/
define('SWOOLE_TRACE_SERVER', 2);
/**
客户端调试
*/
define('SWOOLE_TRACE_CLIENT', 4);
/**
缓冲区调试
*/
define('SWOOLE_TRACE_BUFFER', 8);
/**
连接调试
*/
define('SWOOLE_TRACE_CONN', 16);
/**
事件调试
*/
define('SWOOLE_TRACE_EVENT', 32);
/**
工作进程调试
*/
define('SWOOLE_TRACE_WORKER', 64);
/**
线程调试
*/
define('SWOOLE_TRACE_REACTOR', 256);
/**
PHP调试
*/
define('SWOOLE_TRACE_PHP', 512);
/**
http2调试
*/
define('SWOOLE_TRACE_HTTP2', 1024);
/**
协议尾调试
*/
define('SWOOLE_TRACE_EOF_PROTOCOL', 2048);
/**
协议长度调试
*/
define('SWOOLE_TRACE_LENGTH_PROTOCOL', 4096);
/**
协议关闭调试
*/
define('SWOOLE_TRACE_CLOSE', 8192);
/**
http客户端调试
*/
define('SWOOLE_TRACE_HTTP_CLIENT', 16384);
/**
协程调试
*/
define('SWOOLE_TRACE_COROUTINE', 32768);
/**
redis客户端调试
*/
define('SWOOLE_TRACE_REDIS_CLIENT', 65536);
/**
mysql客户端调试
*/
define('SWOOLE_TRACE_MYSQL_CLIENT', 131072);
/**
异步IO调试
*/
define('SWOOLE_TRACE_AIO', 262144);
/**
SSL调试
*/
define('SWOOLE_TRACE_SSL', 524288);
/**
普通调试
*/
define('SWOOLE_TRACE_NORMAL', 1048576);
/**
所有的调试
*/
define('SWOOLE_TRACE_ALL', 4294967295);
/**
调试日志，仅作为内核开发调试使用
*/
define('SWOOLE_LOG_DEBUG', 0);
/**
跟踪日志，可用于跟踪系统问题，调试日志是经过精心设置的，会携带关键性信息
*/
define('SWOOLE_LOG_TRACE', 1);
/**
普通信息，仅作为信息展示
*/
define('SWOOLE_LOG_INFO', 2);
/**
提示信息，系统可能存在某些行为，如重启、关闭
*/
define('SWOOLE_LOG_NOTICE', 3);
/**
警告信息，系统可能存在某些问题
*/
define('SWOOLE_LOG_WARNING', 4);
/**
错误信息，系统发生了某些关键性的错误，需要即时解决
*/
define('SWOOLE_LOG_ERROR', 5);
/**
无进程间通信
*/
define('SWOOLE_IPC_NONE', 0);
/**
unix的socket进程通信
*/
define('SWOOLE_IPC_UNIXSOCK', 1);
/**
socket进程通信
*/
define('SWOOLE_IPC_SOCKET', 3);
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
关联数组
*/
define('SW_PGSQL_ASSOC', 1);
/**
数字
*/
define('SW_PGSQL_NUM', 2);
/**
两种格式都返回
*/
define('SW_PGSQL_BOTH', 3);
/**
默认最大协程数量
*/
define('SWOOLE_DEFAULT_MAX_CORO_NUM', 3000);
/**
最大协程限制数
*/
define('SWOOLE_MAX_CORO_NUM_LIMIT', 9223372036854775807);
/**
协程嵌套深度
*/
define('SWOOLE_MAX_CORO_NESTING_LEVEL', 128);
/**
协程初始化
*/
define('SWOOLE_CORO_INIT', 0);
/**
协程等待中
*/
define('SWOOLE_CORO_WAITING', 1);
/**
协程运行中
*/
define('SWOOLE_CORO_RUNNING', 2);
/**
协程结束
*/
define('SWOOLE_CORO_END', 3);
/**
在协程中退出
*/
define('SWOOLE_EXIT_IN_COROUTINE', 2);
/**
从服务器中退出
*/
define('SWOOLE_EXIT_IN_SERVER', 4);
/**
使用类似于Node.js的线程池同步阻塞模拟异步
*/
define('SWOOLE_AIO_BASE', 0);
/**
Linux异步IO
*/
define('SWOOLE_AIO_LINUX', 1);
/**
文件钩子
*/
define('SWOOLE_HOOK_FILE', 2);
/**
SLEEP钩子
*/
define('SWOOLE_HOOK_SLEEP', 4);
/**
TCP钩子
*/
define('SWOOLE_HOOK_TCP', 8);
/**
UDP钩子
*/
define('SWOOLE_HOOK_UDP', 16);
/**
UNIX钩子
*/
define('SWOOLE_HOOK_UNIX', 32);
/**
UDG钩子
*/
define('SWOOLE_HOOK_UDG', 64);
/**
SSL钩子
*/
define('SWOOLE_HOOK_SSL', 128);
/**
TLS钩子
*/
define('SWOOLE_HOOK_TLS', 256);
/**
阻塞函数钩子
*/
define('SWOOLE_HOOK_BLOCKING_FUNCTION', 512);
/**
所有钩子
*/
define('SWOOLE_HOOK_ALL', 2147483647);
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
websocket关闭状态
*/
define('WEBSOCKET_STATUS_CLOSING', 4);
/**
websocket继续操作码
*/
define('WEBSOCKET_OPCODE_CONTINUATION', 0);
/**
UTF-8文本字符数据(websocket数据帧类型)
*/
define('WEBSOCKET_OPCODE_TEXT', 1);
/**
二进制数据(websocket数据帧类型)
*/
define('WEBSOCKET_OPCODE_BINARY', 2);
/**
websocket关闭操作码
*/
define('WEBSOCKET_OPCODE_CLOSE', 8);
/**
ping数据(websocket数据帧类型)
*/
define('WEBSOCKET_OPCODE_PING', 9);
/**
websocket的PONG响应操作码
*/
define('WEBSOCKET_OPCODE_PONG', 10);
/**
websocket正常关闭
*/
define('WEBSOCKET_CLOSE_NORMAL', 1000);
/**
websocket因连接断开关闭
*/
define('WEBSOCKET_CLOSE_GOING_AWAY', 1001);
/**
websocket因协议错误关闭
*/
define('WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);
/**
websocket因数据错误关闭
*/
define('WEBSOCKET_CLOSE_DATA_ERROR', 1003);
/**
websocket因为状态错误关闭
*/
define('WEBSOCKET_CLOSE_STATUS_ERROR', 1005);
/**
websocket非正常关闭
*/
define('WEBSOCKET_CLOSE_ABNORMAL', 1006);
/**
websocket因消息错误被关闭
*/
define('WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);
/**
websocket因为权限问题被关闭错误
*/
define('WEBSOCKET_CLOSE_POLICY_ERROR', 1008);
/**
websocket因消息太大而被关闭
*/
define('WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);
/**
websocket因为扩展名丢失被关闭
*/
define('WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);
/**
websocket服务端关闭错误
*/
define('WEBSOCKET_CLOSE_SERVER_ERROR', 1011);
/**
websocket　LTS连接关闭
*/
define('WEBSOCKET_CLOSE_TLS', 1015);
/**
通道正常状态
*/
define('SWOOLE_CHANNEL_OK', 0);
/**
通道超时状态
*/
define('SWOOLE_CHANNEL_TIMEOUT', -1);
/**
通道被关闭状态
*/
define('SWOOLE_CHANNEL_CLOSED', -2);
/**
HTTP2的DATA帧(传送与流关联的任意长度可变的八位字节序列)
*/
define('SWOOLE_HTTP2_TYPE_DATA', 0);
/**
HTTP2的HEADERS帧(用于打开一个流，并且还携带一个头块段)
*/
define('SWOOLE_HTTP2_TYPE_HEADERS', 1);
/**
HTTP2的PRIORITY帧(指定了流发送者建议的优先级)
*/
define('SWOOLE_HTTP2_TYPE_PRIORITY', 2);
/**
HTTP2的RST_STREAM帧(允许立即终止一个流)
*/
define('SWOOLE_HTTP2_TYPE_RST_STREAM', 3);
/**
HTTP2的SETTINGS帧(传达影响端点通信方式的配置参数)
*/
define('SWOOLE_HTTP2_TYPE_SETTINGS', 4);
/**
HTTP2的PUSH_PROMISE帧(用于在发送者打算启动的流之前通知对端)
*/
define('SWOOLE_HTTP2_TYPE_PUSH_PROMISE', 5);
/**
HTTP2的PING帧(用于测量来自发送方的最小往返时间，以及确定空闲连接是否仍然有效)
*/
define('SWOOLE_HTTP2_TYPE_PING', 6);
/**
HTTP2的GOWAY帧(用于启动连接关闭或发出严重错误状态信号)
*/
define('SWOOLE_HTTP2_TYPE_GOAWAY', 7);
/**
HTTP2的WINDOW_UPDATE帧(用于实现流量控制)
*/
define('SWOOLE_HTTP2_TYPE_WINDOW_UPDATE', 8);
/**
HTTP2的CONTINUATION帧(用于继续一系列头块分片)
*/
define('SWOOLE_HTTP2_TYPE_CONTINUATION', 9);
/**
HTTP2没有错误(关联的条件不是错误的结果。例如，GOAWAY帧可以包含此错误码，表明优雅地关闭连接)
*/
define('SWOOLE_HTTP2_ERROR_NO_ERROR', 0);
/**
HTTP2协议错误(端点检测到的没有特别指定的协议错误。适用于无法提供更加具体的错误码的情况)
*/
define('SWOOLE_HTTP2_ERROR_PROTOCOL_ERROR', 1);
/**
HTTP2内部错误(端点遇到的意外的内部错误)
*/
define('SWOOLE_HTTP2_ERROR_INTERNAL_ERROR', 2);
/**
HTTP2流量控制错误
*/
define('SWOOLE_HTTP2_ERROR_FLOW_CONTROL_ERROR', 3);
/**
HTTP2设置超时错误
*/
define('SWOOLE_HTTP2_ERROR_SETTINGS_TIMEOUT', 4);
/**
HTTP2流关闭错误
*/
define('SWOOLE_HTTP2_ERROR_STREAM_CLOSED', 5);
/**
HTTP2帧大小错误
*/
define('SWOOLE_HTTP2_ERROR_FRAME_SIZE_ERROR', 6);
/**
HTTP2帧被拒绝错误
*/
define('SWOOLE_HTTP2_ERROR_REFUSED_STREAM', 7);
/**
HTTP2连接取消错误
*/
define('SWOOLE_HTTP2_ERROR_CANCEL', 8);
/**
HTTP2压缩错误
*/
define('SWOOLE_HTTP2_ERROR_COMPRESSION_ERROR', 9);
/**
HTTP2连接错误
*/
define('SWOOLE_HTTP2_ERROR_CONNECT_ERROR', 10);
/**
HTTP2超负载错误(端点检测到远端表现出有可能产生过大负载的行为)
*/
define('SWOOLE_HTTP2_ERROR_ENHANCE_YOUR_CALM', 11);
/**
HTTP2安全性错误(底层传输存在不满足最低安全需求的属性)
*/
define('SWOOLE_HTTP2_ERROR_INADEQUATE_SECURITY', 12);
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
function swoole_version(): string
{

}

/**
* 
*获取本机CPU的数量
* @example 
* $num = swoole_cpu_num();
* @return int
*/
function swoole_cpu_num(): int
{

}

/**
* 
*获取最近一次的错误码
* @example 
* $errno = swoole_last_error();
* @return int
*/
function swoole_last_error(): int
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
function swoole_event_add(int $fd, Callable $read_callback, Callable $write_callback, int $events): boolean
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
function swoole_event_set(int $fd, Callable $read_callback, Callable $write_callback, int $events): boolean
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
function swoole_event_del(int $fd): boolean
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
function swoole_event_write(int $fd, string $data)
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
function swoole_event_cycle(Callable $callback): boolean
{

}

/**
* 
*事件派发(仅执行一次reactor->wait操作，在Linux平台下相当手工调用一次epoll_wait。与swoole_event_wait不同的是，swoole_event_wait在底层内部维持了循环)
* @example 
* 
* @return 
*/
function swoole_event_dispatch()
{

}

/**
* 
*检测传入的$fd是否已加入了事件监听
* @example 
* 
* @param int $fd:任意的socket文件描述符，参考 swoole_event_add 文档 
* @param int $events:检测的事件类型(SWOOLE_EVENT_READ：是否监听了可读事件SWOOLE_EVENT_WRITE：是否监听了可写事件;;SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE：监听可读或可写事件) 
* @return 
*/
function swoole_event_isset(int $fd, int $events)
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
function swoole_timer_after(int $ms, Callable $callback, $param): int
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
function swoole_timer_tick(int $ms, Callable $callback): int
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
function swoole_timer_exists(int $timer_id): bool
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
function swoole_timer_clear(int $timer_id): bool
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
function swoole_async_read(string $filename, Callable $callback, int $chunk_size, int $offset): bool
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
function swoole_async_write(string $filename, string $content, int $offset, Callable $callback)
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
function swoole_async_readfile(string $filename, Callable $callback)
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
* @param int $flags:其他写入选项，如可以使用FILE_APPEND表示追加到文件末尾 
* @return 
*/
function swoole_async_writefile(string $filename, string $content, Callable $callback, int $flags)
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
function swoole_async_dns_lookup(string $hostname, Callable $callback)
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
function swoole_async_dns_lookup_coro(string $domain_name): ?string
{

}

/**
* 
*创建一个协程
* @example 
* 
* @param callable $func:执行的函数 
* @return 
*/
function swoole_coroutine_create(Callable $func)
{

}

/**
* 
*协程执行一个命令
* @example 
* 
* @param string $command:执行的命令(如shell命令) 
* @return 
*/
function swoole_coroutine_exec(string $command)
{

}

/**
* 
*通过协程延迟执行某个函数
* @example 
* 
* @param Callable $callback:延迟执行的函数 
* @return 
*/
function swoole_coroutine_defer(Callable $callback)
{

}

/**
* 
*开启一个协程
* @example 
* 
* @param callable | string | array $func:要执行的函数 
* @return 
*/
function go(callable $func)
{

}

/**
* 
*延迟执行某个函数
* @example 
* 
* @param Callable $callback:延迟执行的函数 
* @return 
*/
function defer(Callable $callback)
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
function swoole_client_select(Array $read_array, Array $write_array, Array $error_array, float $timeout): int
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
function swoole_select(Array $read_array, Array $write_array, Array $error_array, float $timeout)
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
function swoole_set_process_name(string $process_name)
{

}

/**
* 
*用于获取本地所有网络接口的IP地址(返回以interface名称为key的关联数组)
* @example 
* $ips = swoole_get_local_ip();
* @return array
*/
function swoole_get_local_ip(): array
{

}

/**
* 
*获取本地所有网络接口的mac地址(返回以interface名称为key的关联数组)
* @example 
* $macs = swoole_get_local_mac();
* @return array
*/
function swoole_get_local_mac(): array
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
function swoole_strerror(int $errno): string
{

}

/**
* 
*获取最近一次系统调用的错误码
* @example 
* echo swoole_strerror(swoole_errno());
* @return int
*/
function swoole_errno(): int
{

}

/**
* 
*获取指定的数据的哈希码
* @example 
* 
* @param string $data:指定的数据 
* @param int $type:类型 
* @return string
*/
function swoole_hashcode(string $data, int $type): string
{

}

/**
* 
*获取文件的MIME类型
* @example 
* 
* @param string $filename:文件名 
* @return string|null
*/
function swoole_get_mime_type(string $filename): ?string
{

}

/**
* 
*请求状态是否为用户自定义关闭操作的开始阶段
* @example 
* 
* @return bool
*/
function swoole_call_user_shutdown_begin(): bool
{

}

