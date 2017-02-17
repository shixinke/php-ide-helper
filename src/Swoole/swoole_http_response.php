<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole http响应对象
*/
class swoole_http_response
{
    /**
     * 
     *设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @example 
     * @param string $name 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @param string $value 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @param int $expires 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @param string $path 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @param string $domain 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @param bool $secure 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @param bool $httponly 设置HTTP响应的cookie信息。此方法参数与PHP的setcookie完全一致
     * @return 
     */
    public function cookie($name, $value, $expires, $path, $domain, $secure, $httponly)
    {
    }

    /**
     * 
     *设置原始cookie(对URL不进行转码)
     * @example 
     * @param string $name 设置原始cookie(对URL不进行转码)
     * @param string $value 设置原始cookie(对URL不进行转码)
     * @param int $expires 设置原始cookie(对URL不进行转码)
     * @param string $path 设置原始cookie(对URL不进行转码)
     * @param string $domain 设置原始cookie(对URL不进行转码)
     * @param bool $secure 设置原始cookie(对URL不进行转码)
     * @param bool $httponly 设置原始cookie(对URL不进行转码)
     * @return 
     */
    public function rawcookie($name, $value, $expires, $path, $domain, $secure, $httponly)
    {
    }

    /**
     * 
     *发送Http状态码
     * @example 
     * @param int $http_code 发送Http状态码
     * @return 
     */
    public function status($http_code)
    {
    }

    /**
     * 
     *启用Http GZIP压缩。压缩可以减小HTML内容的尺寸，有效节省网络带宽，提高响应时间。必须在write/end发送内容之前执行gzip，否则会抛出错误
     * @example 
     * @param int $compress_level 启用Http GZIP压缩。压缩可以减小HTML内容的尺寸，有效节省网络带宽，提高响应时间。必须在write/end发送内容之前执行gzip，否则会抛出错误
     * @return 
     */
    public function gzip($compress_level)
    {
    }

    /**
     * 
     *设置HTTP响应的Header信息
     * @example 
     * @param string $key 设置HTTP响应的Header信息
     * @param string $value 设置HTTP响应的Header信息
     * @param bool $ucwords 设置HTTP响应的Header信息
     * @return 
     */
    public function header($key, $value, $ucwords)
    {
    }

    /**
     * 
     *启用Http Chunk分段向浏览器发送相应内容
     * @example 
     * @param string $content 启用Http Chunk分段向浏览器发送相应内容
     * @return 
     */
    public function write($content)
    {
    }

    /**
     * 
     *发送Http响应体，并结束请求处理(end操作后将向客户端浏览器发送HTML内容，并销毁$request/$response对象)
     * @example 
     * @param string $content 发送Http响应体，并结束请求处理(end操作后将向客户端浏览器发送HTML内容，并销毁$request/$response对象)
     * @return 
     */
    public function end($content)
    {
    }

    /**
     * 
     *发送文件到浏览器
     * @example 
     * @param string $filename 发送文件到浏览器
     * @param int $offset 发送文件到浏览器
     * @return 
     */
    public function sendfile($filename, $offset)
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

