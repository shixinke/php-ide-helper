<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/26
*/

/**
*
*/
class swoole_mysql_coro
{
    /**
     * @var unknown $serverInfo 
     * 
     * @access private
     */
    private $serverInfo    =    '';

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var unknown $connected 
     * 
     * @access public
     */
    public $connected    =    '';

    /**
     * @var unknown $connect_error 
     * 
     * @access public
     */
    public $connect_error    =    '';

    /**
     * @var unknown $connect_errno 
     * 
     * @access public
     */
    public $connect_errno    =    0;

    /**
     * @var unknown $affected_rows 
     * 
     * @access public
     */
    public $affected_rows    =    0;

    /**
     * @var unknown $insert_id 
     * 
     * @access public
     */
    public $insert_id    =    0;

    /**
     * @var unknown $error 
     * 
     * @access public
     */
    public $error    =    '';

    /**
     * @var unknown $errno 
     * 
     * @access public
     */
    public $errno    =    0;

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
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $server_config 
     * @return 
     */
    public function connect(Array $server_config)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $sql 
     * @param  mixed $timeout 
     * @return 
     */
    public function query($sql, $timeout)
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
    public function begin()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function commit()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rollback()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $defer 
     * @return 
     */
    public function setDefer($defer)
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
     *
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __sleep()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

}

