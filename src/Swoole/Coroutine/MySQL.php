<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*
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
     * @var bool $connected 
     * 是否连接上了MySQL服务器
     * @access public
     */
    public $connected    =    '';

    /**
     * @var string $connect_error 
     * 发生在sock上的连接错误信息
     * @access public
     */
    public $connect_error    =    '';

    /**
     * @var int $connect_errno 
     * MySQL服务器返回的错误信息
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
     * 
     * @access public
     */
    public $errno    =    0;

    /**
     * 
     *初始化方法
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
     *建立mysql连接
     * @example 
     * @return bool
     */
    public function connect()
    {
    }

    /**
     * 
     *执行mysql查询
     * @example 
     * @return array
     */
    public function query()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function recv()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setDefer()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getDefer()
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

}

