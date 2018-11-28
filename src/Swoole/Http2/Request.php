<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*HTTP2请求
*/
namespace Swoole\Http2;
class Request
{
    /**
     * @var string $path 
     * 请求地址
     * @access public
     */
    public $path;

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
    public $headers    =    array();

    /**
     * @var array $cookies 
     * 请求中的cookie数组
     * @access public
     */
    public $cookies    =    array();

    /**
     * @var array $data 
     * 请求数据
     * @access public
     */
    public $data    =    array();

    /**
     * @var bool $pipeline 
     * 是否分段发送数据帧
     * @access public
     */
    public $pipeline    =    false;

    /**
     * @var array $files 
     * 请求中的文件上传信息
     * name 浏览器上传时传入的文件名称
     * @access public
     */
    public $files    =    array();

}

