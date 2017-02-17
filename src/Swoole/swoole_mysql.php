<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*异步MySQL客户端
*/
class swoole_mysql
{
    /**
     * 
     *创建异步mysql客户端
     * @example 
     * @return object
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
     *异步连接到MySQL服务器
     * @example $db = new Swoole\MySQL();
     * $server = array(
     *     'host' => '192.168.56.102',
     *     'user' => 'test',
     *     'password' => 'test', 
     *     'database' => 'test', 
     *     'charset' => 'utf8', 
     * );
     *     $db->connect($server, function($db, $result){
     *     if (!$result) {
     *      echo 'connect failed';
     * }
     * })
     * @param array $server_config 异步连接到MySQL服务器
     * @param callable $callback 异步连接到MySQL服务器
     * @return 
     */
    public function connect(Array $server_config, Callable $callback)
    {
    }

    /**
     * 
     *执行SQL查询
     * @example $db->query('select * from user', function($link, $result){
     *  var_dump($result);
     * })
     * @param string $sql 执行SQL查询
     * @param callable $callback 执行SQL查询
     * @return 
     */
    public function query($sql, Callable $callback)
    {
    }

    /**
     * 
     *关闭MySQL连接
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *设置事件回调函数。目前仅支持onClose事件回调
     * @example 
     * @param string $event_name 设置事件回调函数。目前仅支持onClose事件回调
     * @param callable $callback 设置事件回调函数。目前仅支持onClose事件回调
     * @return 
     */
    public function on($event_name, Callable $callback)
    {
    }

}

