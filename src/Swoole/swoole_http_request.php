<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
class swoole_http_request
{
    /**
     * 
     * 请求头
     * @var array header
     * 每个key都是小写
     * @access public
     * @example 
     * 
     */
    public $header    =     array() ;

    /**
     * 
     * 请求相当的服务器信息
     * @var array $server：相当于$_SERVER
     * @access public
     * @example 
     * 
     */
    public $server    =     array() ;

    /**
     * 
     * get请求参数
     * @var array get
     * @access public
     * @example 
     * 
     */
    public $get    =     array() ;

    /**
     * 
     * post请求数据
     * @var array post
     * @access public
     * @example 
     * 
     */
    public $post    =     array() ;

    /**
     * 
     * @var array $files:请求中的文件上传信息
     * name 浏览器上传时传入的文件名称
     * @access public
     * @example 
     * 
     */
    public $files    =     array() ;

    /**
     * 
     * 请求中的cookie数据
     * @var array cookie
     * @access public
     * @example 
     * 
     */
    public $cookie    =     array() ;

    /**
     * 
     *获取请求的原始数据
     * @example 
     * @return 
     */
    public function rawcontent()
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

}

