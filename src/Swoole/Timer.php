<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole定时器
*/
namespace Swoole;
class Timer
{
    /**
     * 
     *创建一个指定时间为循环时间间隔的定时器
     * @example 
     * @param int $ms 创建一个指定时间为循环时间间隔的定时器
     * @param callable $callback 创建一个指定时间为循环时间间隔的定时器
     * @param array $param 创建一个指定时间为循环时间间隔的定时器
     * @return int
     */
    public static  function tick($ms, Callable $callback, Array $param)
    {
    }

    /**
     * 
     *创建一个在指定时间后执行某个函数的定时器
     * @example 
     * @param int $ms 创建一个在指定时间后执行某个函数的定时器
     * @param callable $callback 创建一个在指定时间后执行某个函数的定时器
     * @return int
     */
    public static  function after($ms, Callable $callback)
    {
    }

    /**
     * 
     *判断某个定时器是否存在
     * @example 
     * @param int $timer_id 判断某个定时器是否存在
     * @return 
     */
    public static  function exists($timer_id)
    {
    }

    /**
     * 
     *清除某个定时器
     * @example 
     * @param int $timer_id 清除某个定时器
     * @return 
     */
    public static  function clear($timer_id)
    {
    }

}

