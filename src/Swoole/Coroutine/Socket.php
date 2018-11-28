<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*协程版socket
*/
namespace Swoole\Coroutine;
final class Socket
{
    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * 
     *构造socket对象
     * @example 
     * @param int $domain 使用的协议域(AF_INET、AF_INET6、AF_UNIX)
     * @param int $type 使用的socket类型(SOCK_STREAM、SOCK_DGRAM、SOCK_RAW)
     * @param int $protocol IPPROTO_TCP、IPPROTO_UDP、IPPROTO_STCP、IPPROTO_TIPC
     * @return 
     */
    public function __construct(int $domain, int $type, int $protocol)
    {
    
    }

    /**
     * 
     *绑定地址和端口
     * @example 
     * @param string $address 绑定的地址(一般是IP地址)
     * @param int $port 绑定的端口
     * @return bool
     */
    public function bind(string $address, int $port): bool
    {
    
    }

    /**
     * 
     *监听socket
     * @example 
     * @param int $backlog 监听队列的长度
     * @return bool
     */
    public function listen(int $backlog = 0): bool
    {
    
    }

    /**
     * 
     *接受客户端发起的连接
     * @example 
     * @param float $timeout 设置超时，默认为-1表示永不超时
     * @return 
     */
    public function accept(float $timeout)
    {
            return new Swoole\Coroutine\Socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);
    }

    /**
     * 
     *连接到目标服务器
     * @example 
     * @param string $host 目标服务器的地址
     * @param int $port 目标服务器端口
     * @param float $timeout 超时时间，底层会设置定时器，在规定的时间内未能建立连接
     * @return bool
     */
    public function connect(string $host, int $port, float $timeout): bool
    {
    
    }

    /**
     * 
     *接受对端数据
     * @example 
     * @param float $timeout 超时时间
     * @return string|bool
     */
    public function recv(float $timeout): ?string
    {
    
    }

    /**
     * 
     *向对端发送数据
     * @example 
     * @param string $data 要发送的数据内容，可以为文本或二进制数据
     * @param float $timeout 设置超时时间，默认为-1表示永不超时
     * @return int|bool
     */
    public function send(string $data, float $timeout): ?int
    {
    
    }

    /**
     * 
     *接收数据，并设置来源主机的地址和端口
     * @example 
     * @param array $peername 对端地址和端口，引用类型。函数成功返回时会设置为数组，包括address和port两个元素
     * @param float $timeout 超时时间
     * @return string|false
     */
    public function recvfrom(Array $peername, float $timeout): ?string
    {
    
    }

    /**
     * 
     *向指定的地址和端口发送数据
     * @example 
     * @param string $addr 目标主机的IP地址或UnixSocket路径
     * @param int $port 目标主机的端口，发送广播时可以为0
     * @param string $data 发送的数据，可以为文本或二进制内容
     * @return int|false
     */
    public function sendto(string $addr, int $port, string $data): ?int
    {
    
    }

    /**
     * 
     *获取socket的对端地址和端口信息
     * @example 
     * @return array|false
     */
    public function getpeername(): ?array
    {
    
    }

    /**
     * 
     *获取socket的地址和端口信息
     * @example 
     * @return array|bool
     */
    public function getsockname(): ?array
    {
    
    }

    /**
     * 
     *获取socket连接句柄
     * @example 
     * @return int
     */
    public function getSocket(): int
    {
    
    }

    /**
     * 
     *关闭socket
     * @example 
     * @return bool
     */
    public function close(): bool
    {
    
    }

}

