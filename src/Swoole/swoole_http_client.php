<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
class swoole_http_client
{
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
     * 
     *
     * @example 
     * @param  mixed $host 
     * @param  mixed $port 
     * @param  mixed $ssl 
     * @return 
     */
    public function __construct($host, $port, $ssl)
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
     * @param  mixed $method 
     * @return 
     */
    public function setMethod($method)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $headers 
     * @return 
     */
    public function setHeaders(Array $headers)
    {
    }

    /**
     * 
     *
     * @example 
     * @param array $cookies 
     * @return 
     */
    public function setCookies(Array $cookies)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @return 
     */
    public function setData($data)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $name 
     * @param  mixed $type 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @return 
     */
    public function addFile($path, $name, $type, $filename, $offset)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $callback 
     * @return 
     */
    public function execute($path, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $data 
     * @param  mixed $opcode 
     * @param  mixed $finish 
     * @return 
     */
    public function push($data, $opcode, $finish)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $callback 
     * @return 
     */
    public function get($path, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $data 
     * @param  mixed $callback 
     * @return 
     */
    public function post($path, $data, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $callback 
     * @return 
     */
    public function upgrade($path, $callback)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $path 
     * @param  mixed $file 
     * @param  mixed $callback 
     * @param  mixed $offset 
     * @return 
     */
    public function download($path, $file, $callback, $offset)
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
    public function close()
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $event_name 
     * @param  mixed $callback 
     * @return 
     */
    public function on($event_name, $callback)
    {
    }

}

