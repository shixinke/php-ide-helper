<?php
/**
* Swoole自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
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
     * 
     *创建tcp客户端对象
     * @example 
     * @return 
     */
    public function __construct()
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
     * @return 
     */
    public function set()
    {
    }

    /**
     * 
     *连接远程服务器
     * @example 
     * @return 
     */
    public function connect()
    {
    }

    /**
     * 
     *从服务器端接收数据
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
     * @return 
     */
    public function send()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pipe()
    {
    }

    /**
     * 
     *向服务器发送文件
     * @example 
     * @return 
     */
    public function sendfile()
    {
    }

    /**
     * 
     *向任意主机发送UDP数据包
     * @example 
     * @return 
     */
    public function sendto()
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
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *绑定事件(为事件注册函数)
     * @example 
     * @return 
     */
    public function on()
    {
    }

}

