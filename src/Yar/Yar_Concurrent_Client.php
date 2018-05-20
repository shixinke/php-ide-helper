<?php
/**
* Yar自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yar并发客户端
*/
class Yar_Concurrent_Client
{
    /**
     * @var mixed $_callstack 
     * 调用栈
     * @access protected
     */
    protected static  $_callstack;

    /**
     * @var array $_callback 
     * 成功回调函数列表
     * @access protected
     */
    protected static  $_callback    =    array();

    /**
     * @var array $_error_callback 
     * 错误回调函数列表
     * @access protected
     */
    protected static  $_error_callback    =    array();

    /**
     * @var bool $_start 
     * 是否启动
     * @access protected
     */
    protected static  $_start    =    false;

    /**
     * 
     *调用方法
     * @example 
     * @param string $uri 调用地址
     * @param string $method 请求方法
     * @param array $parameters 参数
     * @param Callable $callback 回调函数
     * @param Callable $error_callback 出错时回调函数
     * @param array $options 配置选项
     * @return int
     */
    public static  function call(string $uri, string $method, Array $parameters, Callable $callback, Callable $error_callback, Array $options): int
    {
    
    }

    /**
     * 
     *发送所有请求
     * @example 
     * @param Callable $callback 回调函数
     * @param Callable $error_callback 出错时回调函数
     * @return bool
     */
    public static  function loop(Callable $callback, Callable $error_callback): bool
    {
    
    }

    /**
     * 
     *取消所有注册的方法
     * @example 
     * @return bool
     */
    public static  function reset(): bool
    {
    
    }

}

