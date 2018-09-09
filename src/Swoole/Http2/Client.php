<?php
/**
* Swoole自动补全类(基于最新的4.1.2版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/09/09
*/

/**
*异步HTTP2.0客户端
*/
namespace Swoole\Http2;
class Client extends \Swoole\Client
{
    /**     
    *读取带外数据
    */
    const MSG_OOB    =    1;

    /**     
    *窥视socket缓存区中的数据。设置MSG_PEEK参数后，recv读取数据不会修改指针，因此下一次调用recv仍然会从上一次的位置起返回数据
    */
    const MSG_PEEK    =    2;

    /**     
    *非阻塞接收数据，无论是否有数据都会立即返回
    */
    const MSG_DONTWAIT    =    64;

    /**     
    *阻塞等待直到收到指定长度的数据后返回
    */
    const MSG_WAITALL    =    256;

    /**     
    *读写中断
    */
    const SHUT_RDWR    =    2;

    /**     
    *读中断
    */
    const SHUT_RD    =    0;

    /**     
    *写中断
    */
    const SHUT_WR    =    1;

    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $sock 
     * 此socket的文件描述符
     * @access public
     */
    public $sock    =    0;

    /**
     * @var boolean $reuse 
     * 表示此连接是新创建的还是复用已存在的
     * @access public
     */
    public $reuse    =    '';

    /**
     * @var int $reuseCount 
     * 表示此连接复用次数
     * @access public
     */
    public $reuseCount    =    0;

    /**
     * @var int $type 
     * 连接的类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var int $id 
     * 客户端连接ID
     * @access public
     */
    public $id;

    /**
     * @var array $setting 
     * 配置选项
     * @access public
     */
    public $setting    =    array();

    /**
     * @var callable $onConnect 
     * 连接的回调函数
     * @access public
     */
    public $onConnect;

    /**
     * @var callable $onError 
     * 发生错误时的回调函数
     * @access public
     */
    public $onError;

    /**
     * @var callable $onReceive 
     * 客户端收到来自于服务器端的数据时会回调此函数
     * @access public
     */
    public $onReceive;

    /**
     * @var callable $onClose 
     * 连接被关闭时回调此函数
     * @access public
     */
    public $onClose;

    /**
     * @var callable $onBufferFull 
     * 当缓存区达到最高水位时触发此事件
     * @access public
     */
    public $onBufferFull;

    /**
     * @var callable $onBufferEmpty 
     * 当缓存区低于最低水位线时触发此事件
     * @access public
     */
    public $onBufferEmpty;

    /**
     * @var callable $onSSLReady 
     * 当SSL连接就绪时的回调函数
     * @access public
     */
    public $onSSLReady;

    /**
     * @var array $requestHeaders 
     * 请求头
     * @access public
     */
    public $requestHeaders    =    array();

    /**
     * @var array $cookies 
     * 请求响应的cookie
     * @access public
     */
    public $cookies    =    array();

    /**
     * 
     *客户端连接初始化
     * @example 
     * @param string $host 连接的主机IP
     * @param int $port 连接的主机端口
     * @param boolean $ssl 是否开启TLS/SSL隧道加密，https网站必须设置为true
     * @return 
     */
    public function __construct(string $host, int $port, bool $ssl)
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

    /**
     * 
     *设置请求头
     * @example 
     * @param array $headers 请求头
     * @return 
     */
    public function setHeaders(Array $headers)
    {
    
    }

    /**
     * 
     *设置cookie
     * @example 
     * @param array $cookies cookie数组
     * @return 
     */
    public function setCookies(Array $cookies)
    {
    
    }

    /**
     * 
     *发起GET请求
     * @example 
     * @param string $path 请求路径
     * @param callable $callback 请求成功后的回调函数
     * @return 
     */
    public function get(string $path, Callable $callback)
    {
    
    }

    /**
     * 
     *发送POST请求
     * @example 
     * @param string $path 请求地址
     * @param mixed $data 求的包体数据，如果$data为数组底层自动会打包为x-www-form-urlencoded格式的POST内容，并设置Content-Type为application/x-www-form-urlencoded
     * @param callable $callback 请求成功后的回调
     * @return 
     */
    public function post(string $path, $data, Callable $callback)
    {
    
    }

    /**
     * 
     *连接成功后回调函数
     * @example 
     * @param callable $callback 连接成功后的回调
     * @return 
     */
    public function onConnect(Callable $callback)
    {
    
    }

    /**
     * 
     *发生错误时的回调函数
     * @example 
     * @param callable $callback 连接成功后的回调
     * @return 
     */
    public function onError(Callable $callback)
    {
    
    }

    /**
     * 
     *接收到数据时的回调函数
     * @example 
     * @param callable $callback 连接成功后的回调
     * @return 
     */
    public function onReceive(Callable $callback)
    {
    
    }

    /**
     * 
     *关闭连接时的回调函数
     * @example 
     * @param callable $callback 连接成功后的回调
     * @return 
     */
    public function onClose(Callable $callback)
    {
    
    }

    /**
     * 
     *打开数据流时的回调函数
     * @example 
     * @param callable $callback 连接成功后的回调
     * @return 
     */
    public function openStream(Callable $callback)
    {
    
    }

    /**
     * 
     *向WebSocket服务器发送数据
     * @example 
     * @param string $data 要发送的数据内容，默认为UTF-8文本格式，如果为其他格式编码或二进制数据，请使用WEBSOCKET_OPCODE_BINARY
     * @param int $opcode 操作类型，默认为WEBSOCKET_OPCODE_TEXT_FRAME表示发送文本
     * @param boolean $finish 发送成功后是否结束
     * @return 
     */
    public function push(string $data, int $opcode, bool $finish)
    {
    
    }

    /**
     * 
     *关闭数据流时的回调函数
     * @example 
     * @param callable $callback 连接成功后的回调
     * @return 
     */
    public function closeStream(Callable $callback)
    {
    
    }

    /**
     * 
     *设置客户端参数
     * @example 
     * @param array $settings 设置的参数
     * @return 
     */
    public function set(Array $settings)
    {
    
    }

    /**
     * 
     *连接远程服务器
     * @example 
     * @param string $host 是远程服务器的地址，1.9.24或更高版本已支持自动异步解析域名，$host可直接传入域名
     * @param int $port 是远程服务器端口
     * @param float $timeout 是网络IO的超时，包括connect/send/recv，单位是s，支持浮点数。默认为0.5s，即500ms
     * @param int $sock_flag 在UDP类型时表示是否启用udp_connect 设定此选项后将绑定$host与$port，此UDP将会丢弃非指定host/port的数据包;
     * @return 
     */
    public function connect(string $host, int $port, float $timeout, int $sock_flag)
    {
    
    }

    /**
     * 
     *从服务器端接收数据
     * @example 
     * @param int $size 接收数据的缓存区最大长度，此参数不要设置过大，否则会占用较大内存
     * @param boolean $flag 是否等待所有数据到达后返回
     * @return string
     */
    public function recv(int $size, bool $flag): string
    {
    
    }

    /**
     * 
     *发送数据到远程服务器
     * @example 
     * @param string $data 要发送的数据
     * @param boolean $flag 是否等待所有数据到达后返回
     * @return 
     */
    public function send(string $data, bool $flag)
    {
    
    }

    /**
     * 
     *将客户端收到的数据重定向到另外一个文件描述符，可以是服务器的连接fd、stream资源、sockets资源、其他Swoole_Client、Swoole_Process的管道
     * @example 
     * @param int $dst_socket 目标文件描述符
     * @return 
     */
    public function pipe(int $dst_socket)
    {
    
    }

    /**
     * 
     *向服务器发送文件
     * @example 
     * @param string $filename 指定要发送文件的路径
     * @param int $offset 上传文件的偏移量，可以指定从文件的中间部分开始传输数据。此特性可用于支持断点续传
     * @param int $length 发送数据的尺寸，默认为整个文件的尺寸
     * @return boolean
     */
    public function sendfile(string $filename, int $offset, int $length): boolean
    {
    
    }

    /**
     * 
     *向任意主机发送UDP数据包
     * @example 
     * @param string $ip 目标主机的IP地址，支持IPv4/IPv6
     * @param int $port 目标主机端口
     * @param string $data 要发送的数据内容，不得超过64K
     * @return boolean
     */
    public function sendto(string $ip, int $port, string $data): boolean
    {
    
    }

    /**
     * 
     *调用此方法会从事件循环中移除当前socket的可读监听，停止接收数据
     * @example 
     * @return 
     */
    public function sleep()
    {
    
    }

    /**
     * 
     *调用此方法会重新监听可读事件，将socket连接从睡眠中唤醒
     * @example 
     * @return 
     */
    public function wakeup()
    {
    
    }

    /**
     * 
     *停止接收数据
     * @example 
     * @return 
     */
    public function pause()
    {
    
    }

    /**
     * 
     *恢复数据接收。与pause方法成对使用
     * @example 
     * @return 
     */
    public function resume()
    {
    
    }

    /**
     * 
     *动态开启SSL隧道加密。客户端在建立连接时使用明文通信，中途希望改为SSL隧道加密通信，可以使用enableSSL方法来实现
     * @example 
     * @param callable $callback 启用后的回调函数
     * @return 
     */
    public function enableSSL(Callable $callback)
    {
    
    }

    /**
     * 
     *获取服务器端证书信息
     * @example 
     * @return string | bool
     */
    public function getPeerCert(): ?string
    {
    
    }

    /**
     * 
     *验证服务端证书信息
     * @example 
     * @return 
     */
    public function verifyPeerCert()
    {
    
    }

    /**
     * 
     *连接是否成功
     * @example 
     * @return boolean
     */
    public function isConnected(): boolean
    {
    
    }

    /**
     * 
     *用于获取客户端socket的本地host:port，必须在连接之后才可以使用
     * @example 
     * @return 
     */
    public function getsockname()
    {
    
    }

    /**
     * 
     *获取对端socket的IP地址和端口
     * @example 
     * @return 
     */
    public function getpeername()
    {
    
    }

    /**
     * 
     *关闭连接
     * @example 
     * @param boolean $force 表示强制关闭连接，可用于关闭SWOOLE_KEEP长连接
     * @return 
     */
    public function close(bool $force)
    {
    
    }

    /**
     * 
     *绑定事件
     * @example 
     * @param string $event_name 事件名称
     * @param callable $callback 事件对应的回调函数
     * @return 
     */
    public function on(string $event_name, Callable $callback)
    {
    
    }

}

