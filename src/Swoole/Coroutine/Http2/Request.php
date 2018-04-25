<?php
/**
* Swoole自动补全类(基于最新的2.1.3版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/04/25
*/

/**
*协程版http2请求客户端
*/
namespace Swoole\Coroutine\Http2;
class Request
{
    /**
     * @var string $method 
     * 请求方式
     * @access public
     */
    public $method;

    /**
     * @var array $headers 
     * 请求头
     * @access public
     */
    public $headers;

    /**
     * @var array $data 
     * 请求数据
     * @access public
     */
    public $data;

    /**
     * @var unknown $pipeline 
     * 
     * @access public
     */
    public $pipeline    =    '';

    /**
     * @var array $files 
     * 请求中的文件上传信息
     * name 浏览器上传时传入的文件名称
     * @access public
     */
    public $files;

}

