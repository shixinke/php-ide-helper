<?php
/**
* Yac自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
/**
YAC版本号
*/
define('YAC_VERSION', '2.0.1');
/**
YAC缓存键的最大长度
*/
define('YAC_MAX_KEY_LEN', 48);
/**
YAC缓存项的值最大长度
*/
define('YAC_MAX_VALUE_RAW_LEN', 67108863);
/**
YAC缓存项压缩最大长度
*/
define('YAC_MAX_RAW_COMPRESSED_LEN', 1048576);
/**
YAC使用的序列化函数类型
*/
define('YAC_SERIALIZER', 'PHP');
class Yac
{
    /**
     * @var unknown $_prefix 
     * 
     * @access protected
     */
    protected $_prefix    =    '';

    /**
     * 
     *
     * @example 
     * @param  mixed $prefix 
     * @return 
     */
    public function __construct($prefix)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @param  mixed $value 
     * @param  mixed $ttl 
     * @return 
     */
    public function add($keys, $value, $ttl)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @param  mixed $value 
     * @param  mixed $ttl 
     * @return 
     */
    public function set($keys, $value, $ttl)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @param  mixed $value 
     * @return 
     */
    public function __set($key, $value)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @return 
     */
    public function get($keys)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function __get($key)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $keys 
     * @param  mixed $ttl 
     * @return 
     */
    public function delete($keys, $ttl)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flush()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function info()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function dump()
    {
    }

}

