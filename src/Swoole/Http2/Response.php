<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
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
     * @var array $headers 
     * 响应头
     * @access public
     */
    public $headers    =    array();

    /**
     * @var array $set_cookie_headers 
     * 服务器端返回的原始COOKIE信息，包括了domain和path项
     * @access public
     */
    public $set_cookie_headers    =    array();

    /**
     * @var array $cookies 
     * 服务器设置的COOKIE信息
     * @access public
     */
    public $cookies    =    array();

    /**
     * @var string $data 
     * 服务器发送的响应包体
     * @access public
     */
    public $data;

}

