<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*mysql操作协程客户端
*/
namespace Swoole\Coroutine;
class MySQL
{
    /**
     * @var array $serverInfo 
     * 连接信息，保存的是传递给构造函数的数组
     * @access private
     */
    private $serverInfo    =    '';

    /**
     * @var int $sock 
     * 连接使用的文件描述符
     * @access public
     */
    public $sock    =    0;

    /**
     * @var boolean $connected 
     * 是否连接上了MySQL服务器
     * @access public
     */
    public $connected    =    '';

    /**
     * @var string $connect_error 
     * 连接错误信息
     * @access public
     */
    public $connect_error    =    '';

    /**
     * @var int $connect_errno 
     * 连接错误码
     * @access public
     */
    public $connect_errno    =    0;

    /**
     * @var int $affected_rows 
     * 影响的行数
     * @access public
     */
    public $affected_rows    =    0;

    /**
     * @var int $insert_id 
     * 最后一个插入的记录id
     * @access public
     */
    public $insert_id    =    0;

    /**
     * @var string $error 
     * 错误信息
     * @access public
     */
    public $error    =    '';

    /**
     * @var int $errno 
     * 错误码
     * @access public
     */
    public $errno    =    0;

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
     * @param array $server_config 连接配置信息
     * @return 
     */
    public function connect(Array $server_config)
    {
    
    }

    /**
     * 
     *执行sql语句
     * @example 
     * @param string $sql 要执行的sql语句
     * @param double $timeout 超时时间，超时的话会断开MySQL连接，0表示不设置超时时间
     * @return array|boolean
     */
    public function query(string $sql, double $timeout): ?array
    {
    
    }

    /**
     * 
     *接收包(获取延迟收包的结果，当没有进行延迟收包或者收包超时，返回false)
     * @example 
     * @return mixed
     */
    public function recv()
    {
    
    }

    /**
     * 
     *启动事务
     * @example 
     * @return 
     */
    public function begin()
    {
    
    }

    /**
     * 
     *提交事务
     * @example 
     * @return 
     */
    public function commit()
    {
    
    }

    /**
     * 
     *回滚事务(必须先调用begin启动事务才能调用rollback否则底层会抛出异常)
     * @example 
     * @return 
     */
    public function rollback()
    {
    
    }

    /**
     * 
     *设置是否延迟
     * @example 
     * @param boolean $defer 为true时，表明该Client要延迟收包，为false时，表明该Client非延迟收包，默认值为true
     * @return boolean
     */
    public function setDefer(bool $defer): boolean
    {
    
    }

    /**
     * 
     *返回当前设置的defer
     * @example 
     * @return boolean
     */
    public function getDefer(): boolean
    {
    
    }

    /**
     * 
     *关闭连接
     * @example 
     * @return 
     */
    public function close()
    {
    
    }

    /**
     * 
     *序列化函数调用的魔术方法(在PHP进行序列化时，serialize() 检查类中是否有 __sleep() ,如果有，则该函数将在任何序列化之前运行。该函数必须返回一个需要进行序列化保存的成员属性数组，并且只序列化该函数返回的这些成员属性. 该函数有两个作用: 第一. 在序列化之前,关闭对象可能具有的任何数据库连接等. 第二. 指定对象中需要被序列化的成员属性,如果某个属性比较大而不需要储存下来,可以不把它写进__sleep要返回的数组中,这样该属性就不会被序列化)
     * @example 
     * @return 
     */
    public function __sleep()
    {
    
    }

    /**
     * 
     *反序列化函数调用的魔术方法(unserialize() 从字节流中创建了一个对象之后,马上检查是否具有__wakeup 的函数的存在。如果存在，__wakeup 立刻被调用。使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务)
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    
    }

}

