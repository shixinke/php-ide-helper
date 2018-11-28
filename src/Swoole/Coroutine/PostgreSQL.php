<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*协程Postgresql客户端
*/
namespace Swoole\Coroutine;
class PostgreSQL
{
    /**
     * @var int $error 
     * 错误码
     * @access public
     */
    public $error;

    /**
     * 
     *建立pgsql协程客户端
     * @example go(function () {
     * $pg = new Swoole\Coroutine\PostgreSQL();
     * $conn  = $pg -> connect ("host=127.0.0.1 port=5432 dbname=test user=root password=");
     * $result = $pg -> query($conn, 'SELECT * FROM test;');
     * $arr = $pg -> fetchAll($result);
     * var_dump($arr);
     * });
     * @return 
     */
    public function __construct()
    {
    
    }

    /**
     * 
     *建立postgresql 非阻塞的协程连接
     * @example $a = new Swoole\Coroutine\PostgreSQL();
     * $conn  = $a -> connect ("host=127.0.0.1 port=5432 dbname=test user=wuzhenyu password=");
     * @param string $conninfo 连接信息
     * @return resource|bool
     */
    public function connect(string $conninfo): ?resource
    {
    
    }

    /**
     * 
     *postgresql发送异步非阻塞 协程命令
     * @example 
     * @param string $query 执行sql语句
     * @return resource
     */
    public function query(string $query): resource
    {
    
    }

    /**
     * 
     *提取结果中所有行作为一个数组
     * @example 
     * @param resource $result 通过query查询的结果
     * @param int $result_type 获取结果类型(如关联数组等)
     * @return mixed
     */
    public function fetchAll(resource $result, int $result_type)
    {
    
    }

    /**
     * 
     *返回影响的行数
     * @example 
     * @param resource $result 结果
     * @return 
     */
    public function affectedRows(resource $result)
    {
    
    }

    /**
     * 
     *返回结果行数
     * @example 
     * @param resource $result 结果集
     * @return int
     */
    public function numRows(resource $result): int
    {
    
    }

    /**
     * 
     *查看表的元数据 异步非阻塞协程版
     * @example 
     * @param string $table_name 表名
     * @return 
     */
    public function metaData(string $table_name)
    {
    
    }

    /**
     * 
     *提取一行作为对象
     * @example 
     * @param resource $result 结果集
     * @param int $row 行号
     * @return 
     */
    public function fetchObject(resource $result, int $row)
    {
    
    }

    /**
     * 
     *提取一行作为关联数组
     * @example 
     * @param resource $result 结果集
     * @param int $row 要提取的行号
     * @return 
     */
    public function fetchAssoc(resource $result, int $row)
    {
    
    }

    /**
     * 
     *返回一个与所提取的行（元组/记录）相一致的数组。如果没有更多行可供提取，则返回 FALSE
     * @example 
     * @param resource $result 结果集
     * @param int $row 行号
     * @return 
     */
    public function fetchArray(resource $result, int $row)
    {
    
    }

    /**
     * 
     *根据指定的 result 资源提取一行数据（记录）作为数组返回。每个得到的列依次存放在数组中，从偏移量 0 开始。
     * @example 
     * @param resource $result 结果集
     * @param int $row 行号
     * @return 
     */
    public function fetchRow(resource $result, int $row)
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

}

