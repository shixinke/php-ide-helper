<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/26
*/

/**
*
*/
class swoole_client_coro
{
    /**     
    *
    */
    const MSG_OOB    =    1;

    /**     
    *
    */
    const MSG_PEEK    =    2;

    /**     
    *
    */
    const MSG_DONTWAIT    =    64;

    /**     
    *
    */
    const MSG_WAITALL    =    256;

    /**
     * @var unknown $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock    =    0;

    /**
     * @var unknown $type 
     * 
     * @access public
     */
    public $type    =    0;

    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

    /**
     * 
     *
     * @example 
     * @param  mixed $type 
     * @return 
     */
    public function __construct($type)
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
     * @param array $settings 
     * @return 
     */
    public function set(Array $settings)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $timeout 
     * @return 
     */
    public function connect($host, $port, $timeout)
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
     * @param  mixed $data 
     * @param  mixed $flag 
     * @return 
     */
    public function send($data, $flag)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @param  mixed $length 
     * @return 
     */
    public function sendfile($filename, $offset, $length)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $ip 
     * @param  mixed $port 
     * @param  mixed $data 
     * @return 
     */
    public function sendto($ip, $port, $data)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function isConnected()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getsockname()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getpeername()
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

