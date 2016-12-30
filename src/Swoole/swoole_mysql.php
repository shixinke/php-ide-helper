<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
class swoole_mysql
{
    /**
     * 
     *
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
     *连接mysql服务器
     * @example 
     * 回调函数：function onConnect(swoole_mysql $db, bool $result);
     * @param array $server_config 
     * @param  mixed $callback 
     * @return 
     */
    public function connect(Array $server_config, $callback)
    {
    }

    /**
     * 
     *执行sql语句
     * @example 
     * 回调函数：function onSQLReady(swoole_mysqli $link, mixed $result);
     * 注：执行失败，$result为false，读取$link对象的error属性获得错误信息，errno属性获得错误码
     * 执行成功，SQL为非查询语句，$result为true，读取$link对象的affected_rows属性获得影响的行数，insert_id属性获得Insert操作的自增ID
     * 执行成功，SQL为查询语句，$result为结果数组
     * @param  mixed $sql 
     * @param  mixed $callback 
     * @return 
     */
    public function query($sql, $callback)
    {
    }

    /**
     * 
     *关闭mysql连接
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *设置事件回调函数
     * @example 
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    }

}

