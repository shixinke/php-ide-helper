<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole协程客户端
*/
namespace Swoole\Coroutine;
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
     * 
     *创建tcp/udp客户端
     * @example 
     * @return 
     */
    public function __construct()
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
     * @return 
     */
    public function set()
    {
    }

    /**
     * 
     *连接到远程服务器
     * @example 
     * @return bool
     */
    public function connect()
    {
    }

    /**
     * 
     *用于从服务器端接收数据
     * @example 
     * @return string
     */
    public function recv()
    {
    }

    /**
     * 
     *发送数据到远程服务器，必须在建立连接后，才可向Server发送数据
     * @example 
     * @return int
     */
    public function send()
    {
    }

    /**
     * 
     *发送文件到服务器，本函数是基于sendfile操作系统调用的
     * @example 
     * @return bool
     */
    public function sendfile()
    {
    }

    /**
     * 
     *向任意IP:PORT的主机发送UDP数据包，仅支持SWOOLE_SOCK_UDP/SWOOLE_SOCK_UDP6类型的swoole_client对象。
     * @example 
     * @return bool
     */
    public function sendto()
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
     * @return bool
     */
    public function close()
    {
    }

}

