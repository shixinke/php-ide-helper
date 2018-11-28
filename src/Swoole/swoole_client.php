<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*提供了tcp/udp socket的客户端的封装代码
*/
class swoole_client
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
    *读写被关闭
    */
    const SHUT_RDWR    =    2;

    /**     
    *读被关闭
    */
    const SHUT_RD    =    0;

    /**     
    *写被关闭
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
     * @access private
     */
    private $onConnect;

    /**
     * @var callable $onError 
     * 发生错误时的回调函数
     * @access private
     */
    private $onError;

    /**
     * @var callable $onReceive 
     * 客户端收到来自于服务器端的数据时会回调此函数
     * @access private
     */
    private $onReceive;

    /**
     * @var callable $onClose 
     * 连接被关闭时回调此函数
     * @access private
     */
    private $onClose;

    /**
     * @var callable $onBufferFull 
     * 当缓存区达到最高水位时触发此事件
     * @access private
     */
    private $onBufferFull;

    /**
     * @var callable $onBufferEmpty 
     * 当缓存区低于最低水位线时触发此事件
     * @access private
     */
    private $onBufferEmpty;

    /**
     * @var callable $onSSLReady 
     * 当SSL连接就绪时的回调函数
     * @access private
     */
    private $onSSLReady;

    /**
     * 
     *创建tcp客户端对象
     * @example 
     * @param int $type 表示socket的类型，如TCP/UDP(使用常量)
     * @param boolean $async 表示同步阻塞还是异步非阻塞，默认为同步阻塞
     * @return 
     */
    public function __construct(int $type, bool $async)
    {
    
    }

    /**
     * 
     *析构方法
     * @example 
     * @return 
     */
    public function __destruct()
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
     *返回swoole_client的连接状态
     * @example 
     * @return 
     */
    public function isConnected()
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
     *绑定事件(为事件注册函数)
     * @example 
     * @param string $event_name 事件类型，支持connect/error/receive/close 4种
     * @param callable $callback 回调函数，可以是函数名字符串、匿名函数、类静态方法、对象方法
     * @return 
     */
    public function on(string $event_name, Callable $callback)
    {
    
    }

}

