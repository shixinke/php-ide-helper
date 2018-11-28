<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*协程版HTTP2客户端
*/
namespace Co\Http2;
class Client
{
    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $errMsg 
     * 
     * @access public
     */
    public $errMsg    =    0;

    /**
     * @var int $sock 
     * 此socket的文件描述符
     * @access public
     */
    public $sock    =    0;

    /**
     * @var int $type 
     * socket类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var array $setting 
     * 配置选项
     * @access public
     */
    public $setting    =    array();

    /**
     * @var bool $connected 
     * 是否已连接
     * @access public
     */
    public $connected    =    false;

    /**
     * @var string $host 
     * 请求的服务器地址
     * @access public
     */
    public $host;

    /**
     * @var int $port 
     * 请求的服务器端口
     * @access public
     */
    public $port    =    0;

    /**
     * 
     *http2客户端初始化
     * @example 
     * @param string $host 目标主机的IP地址，$host如果为域名底层需要进行一次DNS查询
     * @param int $port 目标端口，Http一般为80端口，Https一般为443端口
     * @param bool $ssl 是否开启TLS/SSL隧道加密，https网站必须设置为true
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
     *设置客户端参数
     * @example 
     * @param array $settings 配置选项
     * @return 
     */
    public function set(Array $settings)
    {
    
    }

    /**
     * 
     *连接到目标服务器。此方法没有任何参数。发起connect后，底层会自动进行协程调度，当连接成功或失败时connect会返回。连接建立后可以调用send方法向服务器发送请求
     * @example 
     * @return bool
     */
    public function connect(): bool
    {
    
    }

    /**
     * 
     *向服务器发送请求，底层会自动建立一个Http2的stream。可以同时发起多个请求(成功返回流的编号，编号为从1开始自增的奇数)
     * @example 
     * @param Object $request 接受Swoole\Coroutine\Http2\Request类的对象作为参数
     * @return int | false
     */
    public function send(Object $request): ?int
    {
    
    }

    /**
     * 
     *接受请求，调用此方法时会yield让出协程控制权，服务器返回响应内容后resume当前协程(成功后返回 Http2\Response 对象)
     * @example 
     * @return 
     */
    public function recv()
    {
         return new \Swoole\Http2\Response();
    }

    /**
     * 
     *向服务器发送更多数据帧，可以多次调用write向同一个stream写入数据帧。
     * @example 
     * @param int $stream_id 流编号，由send方法返回
     * @param mixed $data 数据帧的内容，可以为字符串或数组
     * @param bool $end_stream 是否关闭流
     * @return 
     */
    public function write(int $stream_id, $data, bool $end_stream)
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

}

