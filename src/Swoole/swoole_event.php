<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole事件处理器
*/
class swoole_event
{
    /**
     * 
     *将一个socket加入到swoole的reactor事件监听中
     * @example 
     * @param int $fd 将一个socket加入到swoole的reactor事件监听中
     * @param mixed $read_callback 将一个socket加入到swoole的reactor事件监听中
     * @param mixed $write_callback 将一个socket加入到swoole的reactor事件监听中
     * @param int $events 将一个socket加入到swoole的reactor事件监听中
     * @return 
     */
    public static  function add($fd, $read_callback, $write_callback, $events)
    {
    }

    /**
     * 
     *用于从reactor中移除监听的socket
     * @example 
     * @param int $fd 用于从reactor中移除监听的socket
     * @return 
     */
    public static  function del($fd)
    {
    }

    /**
     * 
     *修改事件监听的回调函数和掩码
     * @example 
     * @param int $fd 修改事件监听的回调函数和掩码
     * @param mixed $read_callback 修改事件监听的回调函数和掩码
     * @param mixed $write_callback 修改事件监听的回调函数和掩码
     * @param int $events 修改事件监听的回调函数和掩码
     * @return 
     */
    public static  function set($fd, $read_callback, $write_callback, $events)
    {
    }

    /**
     * 
     *退出事件轮询，此函数仅在Client程序中有效
     * @example 
     * @return 
     */
    public static  function exit()
    {
    }

    /**
     * 
     *将stream/sockets资源的数据发送变成异步的，当缓冲区满了或者返回EAGAIN，swoole底层会将数据加入到发送队列，并监听可写。socket可写时swoole底层会自动写入
     * @example 
     * @param int $fd 将stream/sockets资源的数据发送变成异步的，当缓冲区满了或者返回EAGAIN，swoole底层会将数据加入到发送队列，并监听可写。socket可写时swoole底层会自动写入
     * @param string $data 将stream/sockets资源的数据发送变成异步的，当缓冲区满了或者返回EAGAIN，swoole底层会将数据加入到发送队列，并监听可写。socket可写时swoole底层会自动写入
     * @return 
     */
    public static  function write($fd, $data)
    {
    }

    /**
     * 
     *使脚本开始进行事件轮询
     * @example 
     * @return 
     */
    public static  function wait()
    {
    }

    /**
     * 
     *延后执行一个PHP函数
     * @example 
     * @param callable $callback 延后执行一个PHP函数
     * @return 
     */
    public static  function defer(Callable $callback)
    {
    }

}

