<?php
/**
* Swoole自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
namespace Swoole;
class MySQL
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
     * 回调函数：function onConnect(swooleX_mysql $db, bool $result);
     * @return 
     */
    public function connect()
    {
    }

    /**
     * 
     *执行sql语句
     * @example 
     * 回调函数：function onSQLReady(swooleX_mysqli $link, mixed $result);
     * 注：执行失败，$result为false，读取$link对象的error属性获得错误信息，errno属性获得错误码
     * 执行成功，SQL为非查询语句，$result为true，读取$link对象的affected_rows属性获得影响的行数，insert_id属性获得Insert操作的自增ID
     * 执行成功，SQL为查询语句，$result为结果数组
     * @return 
     */
    public function query()
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
     * @return 
     */
    public function on()
    {
    }

}

