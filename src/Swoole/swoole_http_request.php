<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole http请求对象
*/
class swoole_http_request
{
    /**
     * @var array $header 
     * 请求头
     * @access public
     */
    public $header    =    'array()';

    /**
     * @var array $server 
     * Http请求相关的服务器信息
     * @access public
     */
    public $server    =    'array()';

    /**
     * @var array $get 
     * Http请求的GET参数
     * @access public
     */
    public $get    =    'array';

    /**
     * @var array $post 
     * HTTP POST参数，格式为数组
     * @access public
     */
    public $post    =    'array';

    /**
     * @var array $cookie 
     * HTTP请求携带的COOKIE信息，与PHP的$_COOKIE相同，格式为数组
     * @access public
     */
    public $cookie    =    'array';

    /**
     * @var array $files 
     * 文件上传信息。类型为以form名称为key的二维数组。与PHP的$_FILES相同。
     * @access public
     */
    public $files    =    'array';

    /**
     * 
     *获取原始的POST包体，用于非application/x-www-form-urlencoded格式的Http POST请求
     * @example 
     * @return string
     */
    public function rawcontent()
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

