<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*异步MySQL客户端
*/
namespace Swoole;
class MySQL
{
    /**     
    *查询状态
    */
    const STATE_QUERY    =    0;

    /**     
    *读开始状态
    */
    const STATE_READ_START    =    1;

    /**     
    *读失败状态
    */
    const STATE_READ_FIELD     =    2;

    /**     
    *读数据行状态
    */
    const STATE_READ_ROW    =    3;

    /**     
    *读完成状态
    */
    const STATE_READ_END    =    5;

    /**     
    *关闭状态
    */
    const STATE_CLOSED    =    6;

    /**
     * @var array $serverInfo 
     * 连接信息，保存的是传递给构造函数的数组
     * @access public
     */
    public $serverInfo    =    array();

    /**
     * @var int $sock 
     * 连接使用的文件描述符
     * @access public
     */
    public $sock;

    /**
     * @var boolean $connected 
     * 是否连接上了MySQL服务器
     * @access public
     */
    public $connected    =    '';

    /**
     * @var int $errno 
     * 错误码
     * @access public
     */
    public $errno    =    0;

    /**
     * @var int $connect_errno 
     * 连接错误码
     * @access public
     */
    public $connect_errno    =    0;

    /**
     * @var string $error 
     * 错误信息
     * @access public
     */
    public $error;

    /**
     * @var string $connect_error 
     * 连接错误信息
     * @access public
     */
    public $connect_error;

    /**
     * @var int $insert_id 
     * 最后一个插入的记录id
     * @access public
     */
    public $insert_id;

    /**
     * @var int $affected_rows 
     * 影响的行数
     * @access public
     */
    public $affected_rows;

    /**
     * @var callable $onConnect 
     * 连接时的回调函数
     * @access public
     */
    public $onConnect;

    /**
     * @var callable $onClose 
     * 关闭连接时的回调函数
     * @access public
     */
    public $onClose;

    /**
     * 
     *mysql异步客户端初始化
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
     * @example $server = array(
     *     'host' => '192.168.56.102',
     *     'user' => 'test',
     *     'password' => 'test',
     *     'database' => 'test',
     *     'charset' => 'utf8',
     * );
     * 回调函数：function onConnect(swoole_mysql $db, bool $result);
     * @param array $server_config 连接配置信息
     * @param callable $callback 连接成功的回调
     * @return 
     */
    public function connect(Array $server_config, Callable $callback)
    {
    
    }

    /**
     * 
     *启动事务
     * @example 
     * @param callable $callback 启动一个MySQL事务，事务启动成功会回调指定的函数
     * @return 
     */
    public function begin(Callable $callback)
    {
    
    }

    /**
     * 
     *提交事务
     * @example 
     * @param callable $callback 提交事务，当服务器返回响应时回调此函数
     * @return 
     */
    public function commit(Callable $callback)
    {
    
    }

    /**
     * 
     *回滚事务(必须先调用begin启动事务才能调用rollback否则底层会抛出异常)
     * @example 
     * @param callable $callback 回滚完成后执行的回调
     * @return 
     */
    public function rollback(Callable $callback)
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
     * @param string $sql 要执行的SQL语句
     * @param callable $callback 执行成功后会回调此函数
     * @return 
     */
    public function query(string $sql, Callable $callback)
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
     *获取当前服务器状态
     * @example 
     * @return int
     */
    public function getState(): int
    {
    
    }

    /**
     * 
     *设置事件回调函数（目前仅支持onClose事件回调）
     * @example 
     * @param String $event_name 事件名称(目前仅支持Close)
     * @param callable $callback 连接关闭时回调此函数
     * @return 
     */
    public function on(String $event_name, Callable $callback)
    {
    
    }

}

