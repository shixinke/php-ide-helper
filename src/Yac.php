<?php
/**
 * Yac自动补全类(基于最新的2.0版本)
 * @author shixinke(http://www.shixinke.com)
 * @modified 2016/06/09
 */

define('YAC_VERSION',                   "2.0.0");
define('YAC_MAX_KEY_LEN',      48);
define('YAC_MAX_VALUE_RAW_LEN',       67108863);
define('YAC_MAX_RAW_COMPRESSED_LEN',       1048576);
define('YAC_SERIALIZER',      'PHP');


class Yac
{
    public function __construct($prefix = ''){}
    public function add($key, $value = null, $ttl = -1){}
    public function set($key, $value = null, $ttl = -1){}
    public function __set($name, $value){}
    public function get($key){}
    public function __get($name){}
    public function delete($key, $delay = 0){}
    public function flush(){}
    public function info(){}
    public function dump(){}
}
