<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
class swoole_client
{
    /**     
    *
    */
    const MSG_OOB    =    1;

    /**     
    *
    */
    const MSG_PEEK    =    2;

    /**     
    *
    */
    const MSG_DONTWAIT    =    64;

    /**     
    *
    */
    const MSG_WAITALL    =    256;

    /**
     * @var unknown $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var unknown $reuse 
     * 
     * @access public
     */
    public $reuse    =    '';

    /**
     * @var unknown $reuseCount 
     * 
     * @access public
     */
    public $reuseCount    =    0;

    /**
     * 
     *创建tcp客户端对象
     * @example 
     * @param  mixed $type 
     * @param  mixed $async 
     * @return 
     */
    public function __construct($type, $async)
    {
    }

    /**
     * 
     *
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
     * @param array $settings 
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *连接远程服务器
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $timeout 
     * @param  mixed $sock_flag 
     * @return 
     */
    public function connect($host, $port, $timeout, $sock_flag)
    {
    }

    /**
     * 
     *从服务器端接收数据
     * @example 
     * @param  mixed $size 
     * @param  mixed $flag 
     * @return 
     */
    public function recv($size, $flag)
    {
    }

    /**
     * 
     *发送数据到远程服务器
     * @example 
     * @param  mixed $data 
     * @param  mixed $flag 
     * @return 
     */
    public function send($data, $flag)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $dst_socket 
     * @return 
     */
    public function pipe($dst_socket)
    {
    }

    /**
     * 
     *向服务器发送文件
     * @example 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @return 
     */
    public function sendfile($filename, $offset)
    {
    }

    /**
     * 
     *向任意主机发送UDP数据包
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $data 
     * @return 
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
     *调用此方法会重新监听可读事件，将socket连接从睡眠中唤醒
     * @example 
     * @return 
     */
    public function wakeup()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pause()
    {
    }

    /**
     * 
     *
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
     * @param  mixed $force 
     * @return 
     */
    public function close($force)
    {
    }

    /**
     * 
     *绑定事件(为事件注册函数)
     * @example 
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    }

}

