<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*
*/
class swoole_http_client_coro
{
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
     *创建http客户端
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
     *设置请求方式
     * @example 
     * @return 
     */
    public function setMethod()
    {
    }

    /**
     * 
     *设置请求头
     * @example 
     * @return 
     */
    public function setHeaders()
    {
    }

    /**
     * 
     *设置cookie
     * @example 
     * @return 
     */
    public function setCookies()
    {
    }

    /**
     * 
     *设置请求体数据
     * @example 
     * @return 
     */
    public function setData()
    {
    }

    /**
     * 
     *执行请求
     * @example 
     * @return 
     */
    public function execute()
    {
    }

    /**
     * 
     *执行get请求
     * @example 
     * @return 
     */
    public function get()
    {
    }

    /**
     * 
     *执行post请求
     * @example 
     * @return 
     */
    public function post()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function addFile()
    {
    }

    /**
     * 
     *判断是否已经连接
     * @example 
     * @return bool
     */
    public function isConnected()
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
     *设置defer
     * @example 
     * @return bool
     */
    public function setDefer()
    {
    }

    /**
     * 
     *返回当前设置的defer
     * @example 
     * @return bool
     */
    public function getDefer()
    {
    }

    /**
     * 
     *获取延迟收包的结果，当没有进行延迟收包或者收包超时
     * @example 
     * @return mixed
     */
    public function recv()
    {
    }

}

