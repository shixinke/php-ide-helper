<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*swoole 事件处理
*/
namespace Swoole;
class Event
{
    /**
     * 
     *将一个socket加入到底层的reactor事件监听中
     * @example 
     * @param int $fd 连接句柄
     * @param callable $read_callback 读事件回调
     * @param callable $write_callback 写事件回调
     * @param int $events 事件类型的掩码，可选择关闭/开启可读可写事件，如SWOOLE_EVENT_READ，SWOOLE_EVENT_WRITE，或者SWOOLE_EVENT_READ | SWOOLE_EVENT_WRITE
     * @return 
     */
    public static  function add(int $fd, Callable $read_callback, Callable $write_callback, int $events)
    {
    
    }

    /**
     * 
     *从reactor中移除监听的socket
     * @example 
     * @param int $fd 连接句柄
     * @return 
     */
    public static  function del(int $fd)
    {
    
    }

    /**
     * 
     *修改事件监听的回调函数和掩码
     * @example 
     * @param int $fd 连接句柄
     * @param callable $read_callback 将修改可读事件回调函数为指定的函数
     * @param callable $write_callback 修改可写事件回调函数为指定的函数
     * @param int $events 可关闭/开启，可写（SW_EVENT_READ）和可读（SW_EVENT_WRITE）事件的监听
     * @return 
     */
    public static  function set(int $fd, Callable $read_callback, Callable $write_callback, int $events)
    {
    
    }

    /**
     * 
     *退出事件循环
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
     * @param int $fd 连接句柄
     * @param string $data 写入的数据
     * @return 
     */
    public static  function write(int $fd, string $data)
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
     *在下一个事件循环开始时执行函数
     * @example 
     * @param callable $callback 执行的函数
     * @return 
     */
    public static  function defer(Callable $callback)
    {
    
    }

    /**
     * 
     *定义事件循环周期执行函数。此函数会在每一轮事件循环结束时调用
     * @example 
     * @param callable $callback 循环调用的函数
     * @return 
     */
    public static  function cycle(Callable $callback)
    {
    
    }

}

