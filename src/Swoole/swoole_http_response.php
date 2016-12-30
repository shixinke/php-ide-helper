<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
class swoole_http_response
{
    /**
     * 
     *设置cookie
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     * @param  mixed $expires 
     * @param  mixed $path 
     * @param  mixed $domain 
     * @param  mixed $secure 
     * @param  mixed $httponly 
     * @return 
     */
    public function cookie($name, $value, $expires, $path, $domain, $secure, $httponly)
    {
    }

    /**
     * 
     *设置最原始的cookie信息
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     * @param  mixed $expires 
     * @param  mixed $path 
     * @param  mixed $domain 
     * @param  mixed $secure 
     * @param  mixed $httponly 
     * @return 
     */
    public function rawcookie($name, $value, $expires, $path, $domain, $secure, $httponly)
    {
    }

    /**
     * 
     *设置http状态码
     * @example 
     * @param  mixed $http_code 
     * @return 
     */
    public function status($http_code)
    {
    }

    /**
     * 
     *启用gzip压缩
     * @example 
     * @param  mixed $compress_level 
     * @return 
     */
    public function gzip($compress_level)
    {
    }

    /**
     * 
     *设置响应头信息
     * @example 
     * @param  mixed $key 
     * @param  mixed $value 
     * @param  mixed $ucwords 
     * @return 
     */
    public function header($key, $value, $ucwords)
    {
    }

    /**
     * 
     *启用Http Chunk分段向浏览器发送相应内容
     * @example 
     * @param  mixed $content 
     * @return 
     */
    public function write($content)
    {
    }

    /**
     * 
     *发送响应体，并结束当前请求
     * @example 
     * @param  mixed $content 
     * @return 
     */
    public function end($content)
    {
    }

    /**
     * 
     *发送文件给浏览器
     * @example 
     * @param  mixed $filename 
     * @param  mixed $offset 
     * @return 
     */
    public function sendfile($filename, $offset)
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

