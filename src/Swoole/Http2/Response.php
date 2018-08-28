<?php
/**
* Swoole自动补全类(基于最新的4.1.0-beta.2版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/08/28
*/

/**
*异步HTTP2响应
*/
namespace Swoole\Http2;
class Response
{
    /**
     * @var int $streamId 
     * 数据流ID
     * @access public
     */
    public $streamId    =    0;

    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var int $statusCode 
     * 状态码
     * @access public
     */
    public $statusCode    =    0;

    /**
     * @var bool $pipeline 
     * 
     * @access public
     */
    public $pipeline    =    false;

    /**
     * @var unknown $headers 
     * 
     * @access public
     */
    public $headers;

    /**
     * @var unknown $set_cookie_headers 
     * 
     * @access public
     */
    public $set_cookie_headers;

    /**
     * @var unknown $cookies 
     * 
     * @access public
     */
    public $cookies;

    /**
     * @var unknown $data 
     * 
     * @access public
     */
    public $data;

}

