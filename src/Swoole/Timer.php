<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*swoole定时器
*/
namespace Swoole;
class Timer
{
    /**
     * 
     *设置一个间隔时钟定时器，与after定时器不同的是tick定时器会持续触发，直到调用swoole_timer_clear清除
     * @example 
     * @param int $ms 指定时间，单位为毫秒
     * @param callable $callback 回调函数
     * @param mixed $param 用户参数, 该参数会被传递到$callback_function中. 如果有多个参数可以使用数组形式. 也可以使用匿名函数的use语法传递参数到回调函数中
     * @return 
     */
    public static  function tick(int $ms, Callable $callback, $param)
    {
    
    }

    /**
     * 
     *在指定的时间后执行函数
     * @example 
     * @param int $ms 指定时间，单位为毫秒
     * @param callable $callback 回调函数
     * @return 
     */
    public static  function after(int $ms, Callable $callback)
    {
    
    }

    /**
     * 
     *检查某个定时器是否存在
     * @example 
     * @param int $timer_id 定时器ID
     * @return 
     */
    public static  function exists(int $timer_id)
    {
    
    }

    /**
     * 
     *删除指定的定时器
     * @example 
     * @param int $timer_id 定时器ID
     * @return 
     */
    public static  function clear(int $timer_id)
    {
    
    }

}

