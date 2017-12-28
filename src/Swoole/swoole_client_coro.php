<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/28
*/

/**
*swoole 协程客户端
*/
class swoole_client_coro
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
     * @var int $type 
     * 连接的类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var array $setting 
     * 配置选项
     * @access public
     */
    public $setting;

    /**
     * 
     *创建tcp客户端对象
     * @example 
     * @param int $type 表示socket的类型，如TCP/UDP(使用常量)
     * @return 
     */
    public function __construct($type)
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
     *连接远程TCP服务端
     * @example 
     * @param string $host 是远程服务器的地址，1.9.24或更高版本已支持自动异步解析域名，$host可直接传入域名
     * @param int $port 是远程服务器端口
     * @param float $timeout 是网络IO的超时，包括connect/send/recv，单位是s，支持浮点数。默认为0.5s，即500ms
     * @return 
     */
    public function connect($host, $port, $timeout)
    {
    }

    /**
     * 
     *从远程接收数据
     * @example 
     * @return 
     */
    public function recv()
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
    public function send($data, $flag)
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
    public function sendfile($filename, $offset, $length)
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
    public function sendto($ip, $port, $data)
    {
    }

    /**
     * 
     *动态开启SSL隧道加密。客户端在建立连接时使用明文通信，中途希望改为SSL隧道加密通信，可以使用enableSSL方法来实现
     * @example 
     * @return 
     */
    public function enableSSL()
    {
    }

    /**
     * 
     *获取服务器端证书信息
     * @example 
     * @return string | bool
     */
    public function getPeerCert()
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
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *序列化函数调用的魔术方法(在PHP进行序列化时，serialize() 检查类中是否有 __sleep() ,如果有，则该函数将在任何序列化之前运行。该函数必须返回一个需要进行序列化保存的成员属性数组，并且只序列化该函数返回的这些成员属性. 该函数有两个作用: 第一. 在序列化之前,关闭对象可能具有的任何数据库连接等. 第二. 指定对象中需要被序列化的成员属性,如果某个属性比较大而不需要储存下来,可以不把它写进__sleep要返回的数组中,这样该属性就不会被序列化)
     * @example 
     * @return 
     */
    public function __sleep()
    {
    }

    /**
     * 
     *反序列化函数调用的魔术方法(unserialize() 从字节流中创建了一个对象之后,马上检查是否具有__wakeup 的函数的存在。如果存在，__wakeup 立刻被调用。使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务)
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

}

