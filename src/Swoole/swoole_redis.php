<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*异步Redis客户端
*/
class swoole_redis
{
    /**
     * 
     *建立一个Redis客户端
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
     *注册事件回调函数(目前swoole_redis支持2种事件回调函数(close和message)。on方法必须在connect前被调用)
     * @example 
     * @param string $event_name 注册事件回调函数(目前swoole_redis支持2种事件回调函数(close和message)。on方法必须在connect前被调用)
     * @param callable $callback 注册事件回调函数(目前swoole_redis支持2种事件回调函数(close和message)。on方法必须在connect前被调用)
     * @return 
     */
    public function on($event_name, Callable $callback)
    {
    }

    /**
     * 
     *连接Redis服务器
     * @example 
     * @param string $host 连接Redis服务器
     * @param int $port 连接Redis服务器
     * @param callable $callback 连接Redis服务器
     * @return 
     */
    public function connect($host, $port, Callable $callback)
    {
    }

    /**
     * 
     *关闭Redis连接
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *魔术方法，方法名会映射为Redis指令，参数作为Redis指令的参数
     * @example 
     * @param string $command 魔术方法，方法名会映射为Redis指令，参数作为Redis指令的参数
     * @param array $params 魔术方法，方法名会映射为Redis指令，参数作为Redis指令的参数
     * @return 
     */
    public function __call($command, Array $params)
    {
    }

}

