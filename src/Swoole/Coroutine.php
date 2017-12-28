<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/28
*/

/**
*swoole内置协程(协程可以理解为纯用户态的线程，其通过协作而不是抢占来进行切换。相对于进程或者线程，协程所有的操作都可以在用户态完成，创建和切换的消耗更低。Swoole可以为每一个请求创建对应的协程，根据IO的状态来合理的调度协程)
*/
namespace Swoole;
class Coroutine
{
    /**
     * 
     *创建协程
     * @example 
     * @return 
     */
    public static  function create()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function cli_wait()
    {
    }

    /**
     * 
     *挂起当前协程
     * @example 
     * @return 
     */
    public static  function suspend()
    {
    }

    /**
     * 
     *恢复某个协程，使其继续运行
     * @example 
     * @return 
     */
    public static  function resume()
    {
    }

    /**
     * 
     *获取当前协程的ID
     * @example 
     * @return int
     */
    public static  function getuid()
    {
    }

    /**
     * 
     *进入等待状态。相当于PHP的sleep函数，不同的是Coroutine::sleep是协程调度器实现的，底层会yield当前协程，让出时间片，并添加一个异步定时器，当超时时间到达时重新resume当前协程，恢复运行。使用sleep接口可以方便地实现超时等待功能。
     * @example 
     * @param float $seconds 为睡眠的时间，单位为秒，支持浮点型，最小精度为毫秒
     * @return 
     */
    public static  function sleep($seconds)
    {
    }

    /**
     * 
     *协程版反射调用函数
     * @example 
     * @return 
     */
    public static  function call_user_func()
    {
    }

    /**
     * 
     *协程版反射调用函数
     * @example 
     * @return 
     */
    public static  function call_user_func_array()
    {
    }

}

