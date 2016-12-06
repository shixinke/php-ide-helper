<?php
/**
* Yar_Concurrent_Client自动补全类(基于最新的1.0.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

class Yar_Concurrent_Client
{
    //调用栈状态
    protected static  $_callstack;
    //调用回调函数
    protected static  $_callback;
    //错误回调函数名
    protected static  $_error_callback;
    //是否已经开始
    protected static  $_start    =    "";
    /**
     * 注册一个并行的服务调用
     * @param string $uri:RPC 服务的 URI(http 或 tcp) 
     * @param 调用的服务名字(也就是服务方法名) $method:string 
     * @param array $parameters:调用的参数 
     * @param callable $callback:回调函数, 在远程服务的返回到达的时候被Yar调用, 从而可以处理返回内容 
     * @example      *function callback($retval, $callinfo)
     * {
     *}
     * Yar_Concurrent_Client::call('http://host/api/', 'some_method', array('parameters'), 'callback');
     * @return 
     */
    public static  function call($uri, $method, $parameters, $callback)
    {
    }

    /**
     * 发送所有注册的并行调用
     * @param callable $callback:如果这个回掉函数被设置, 那么Yar在发送出所有的请求之后立即调用一次这个回掉函数(此时还没有任何请求返回), 调用的时候$callinfo参数是NULL.如果在注册并行调用的时候制定了callback, 那么那个callback有更高的优先级 
     * @param callable $error_callback:错误回掉函数, 如果设置了, 那么Yar在出错的时候会调用这个回掉函数 
     * @example      * function callback($retval, $callinfo)
     *{
     *}

     *function error_callback($type, $error, $callinfo) 
     *{
     *error_log($error);
     *}
     * @return 
     */
    public static  function loop($callback, $error_callback)
    {
    }

    /**
     * 清除所有的服务调用
     * @example 
     * @return 
     */
    public static  function reset()
    {
    }

}
