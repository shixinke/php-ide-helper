<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*tcp/udp socket的客户端
*/
namespace Swoole;
class Client
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
    *用于swoole_client->recv方法的第二个参数，阻塞等待直到收到指定长度的数据后返回
    */
    const MSG_WAITALL    =    256;

    /**
     * @var int $errCode 
     * 错误码。errCode的值等于Linux errno。可使用socket_strerror将错误码转为错误信息
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $sock 
     * sock属性是此socket的文件描述符
     * @access public
     */
    public $sock    =    0;

    /**
     * @var bool $reuse 
     * 表示此连接是新创建的还是复用已存在的。与SWOOLE_KEEP配合使用
     * @access public
     */
    public $reuse    =    '';

    /**
     * @var int $reuseCount 
     * 
     * @access public
     */
    public $reuseCount    =    0;

    /**
     * 
     *创建tcp/udp客户端
     * @example 
     * @param int $type 创建tcp/udp客户端
     * @param int $async 创建tcp/udp客户端
     * @return 
     */
    public function __construct($type, $async)
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
     *设置客户端参数
     * @example 
     * @param array $settings 设置客户端参数
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *连接到远程服务器
     * @example 
     * @param string $host 连接到远程服务器
     * @param int $port 连接到远程服务器
     * @param float $timeout 连接到远程服务器
     * @param int $sock_flag 连接到远程服务器
     * @return bool
     */
    public function connect($host, $port, $timeout, $sock_flag)
    {
    }

    /**
     * 
     *用于从服务器端接收数据
     * @example 
     * @param int $size 用于从服务器端接收数据
     * @param int $flag 用于从服务器端接收数据
     * @return string
     */
    public function recv($size, $flag)
    {
    }

    /**
     * 
     *发送数据到远程服务器，必须在建立连接后，才可向Server发送数据
     * @example 
     * @param string $data 发送数据到远程服务器，必须在建立连接后，才可向Server发送数据
     * @param  mixed $flag 
     * @return int
     */
    public function send($data, $flag)
    {
    }

    /**
     * 
     *使用管道发送数据
     * @example 
     * @param int $dst_socket 使用管道发送数据
     * @return 
     */
    public function pipe($dst_socket)
    {
    }

    /**
     * 
     *发送文件到服务器，本函数是基于sendfile操作系统调用的
     * @example 
     * @param string $filename 发送文件到服务器，本函数是基于sendfile操作系统调用的
     * @param int $offset 发送文件到服务器，本函数是基于sendfile操作系统调用的
     * @return bool
     */
    public function sendfile($filename, $offset)
    {
    }

    /**
     * 
     *向任意IP:PORT的主机发送UDP数据包，仅支持SWOOLE_SOCK_UDP/SWOOLE_SOCK_UDP6类型的swoole_client对象。
     * @example 
     * @param string $ip 向任意IP:PORT的主机发送UDP数据包，仅支持SWOOLE_SOCK_UDP/SWOOLE_SOCK_UDP6类型的swoole_client对象。
     * @param int $port 向任意IP:PORT的主机发送UDP数据包，仅支持SWOOLE_SOCK_UDP/SWOOLE_SOCK_UDP6类型的swoole_client对象。
     * @param string $data 向任意IP:PORT的主机发送UDP数据包，仅支持SWOOLE_SOCK_UDP/SWOOLE_SOCK_UDP6类型的swoole_client对象。
     * @return bool
     */
    public function sendto($ip, $port, $data)
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
     *调用此方法会重新监听可读事件，将socket连接从睡眠中唤醒(如果socket并未进入sleep模式，wakeup操作没有任何作用)
     * @example 
     * @return 
     */
    public function wakeup()
    {
    }

    /**
     * 
     *暂停数据接收
     * @example 
     * @return 
     */
    public function pause()
    {
    }

    /**
     * 
     *恢复数据接收
     * @example 
     * @return 
     */
    public function resume()
    {
    }

    /**
     * 
     *返回swoole_client的连接状态
     * @example 
     * @return bool
     */
    public function isConnected()
    {
    }

    /**
     * 
     *用于获取客户端socket的本地host:port，必须在连接之后才可以使用
     * @example 
     * @return array
     */
    public function getsockname()
    {
    }

    /**
     * 
     *获取对端socket的IP地址和端口，仅支持SWOOLE_SOCK_UDP/SWOOLE_SOCK_UDP6类型的swoole_client对象(此函数必须在$client->recv() 之后调用)
     * @example 
     * @return bool
     */
    public function getpeername()
    {
    }

    /**
     * 
     *关闭连接
     * @example 
     * @param bool $force 关闭连接
     * @return bool
     */
    public function close($force)
    {
    }

    /**
     * 
     *注册异步事件回调函数，调用on方法会使当前的socket变成非阻塞的
     * @example 
     * @param string $event_name 注册异步事件回调函数，调用on方法会使当前的socket变成非阻塞的
     * @param string $callback 注册异步事件回调函数，调用on方法会使当前的socket变成非阻塞的
     * @return int
     */
    public function on($event_name, $callback)
    {
    }

}

