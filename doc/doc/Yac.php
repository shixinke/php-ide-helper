<?php
/**
* Yac自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/05
*/
//YAC版本号
define('YAC_VERSION', '2.0.1');
//YAC缓存键的最大长度
define('YAC_MAX_KEY_LEN', 48);
//YAC缓存项的值最大长度
define('YAC_MAX_VALUE_RAW_LEN', 67108863);
//YAC缓存项压缩最大长度
define('YAC_MAX_RAW_COMPRESSED_LEN', 1048576);
//YAC使用的序列化函数类型
define('YAC_SERIALIZER', 'PHP');

class Yac
{
    //YAC缓存项键前缀
    protected $_prefix    =    "";
    /**
     * 初始化函数
     * @param string $prefix:缓存项键前缀 
     * @example  $yac = new Yac('yac_');
     *           $yac = new Yac();

     * @return  Object
     */
    public function __construct($prefix)
    {
    }

    /**
     * 添加缓存项
     * @param string $keys:缓存键名 [备选值：()]
     * @param mixed $value:缓存键值 [备选值：()]
     * @param int $ttl:有效期 [备选值：()]
     * @example  $yac->add('name', 'shixinke');

     * @return  boolean
     */
    public function add($keys, $value, $ttl)
    {
    }

    /**
     * 设置缓存项
     * @param string $keys:缓存键 [备选值：()]
     * @param mixed $value:缓存值 [备选值：()]
     * @param int $ttl:有效期 [备选值：()]
     * @example  $yac->set('name', 'shixinke');

     * @return 
     */
    public function set($keys, $value, $ttl)
    {
    }

    /**
     * 设置属性魔术方法
     * @param string $key:设置的属性名 [备选值：()]
     * @param mixed $value:设置的属性值 [备选值：()]
     * @example $yac->name = 'shixinke';

     * @return  mixed
     */
    public function __set($key, $value)
    {
    }

    /**
     * 获取缓存项的值
     * @param string $keys:获取的缓存项的键 [备选值：()]
     * @example $yac->get('name');

     * @return 
     */
    public function get($keys)
    {
    }

    /**
     * 获取属性的魔术方法
     * @param string $key:缓存项键 [备选值：()]
     * @example  echo $yac->name;

     * @return  mixed
     */
    public function __get($key)
    {
    }

    /**
     * 删除缓存项
     * @param string $keys:缓存键 [备选值：()]
     * @param int $ttl:有效期 [备选值：()]
     * @example $yac->delete('name');

     * @return 
     */
    public function delete($keys, $ttl)
    {
    }

    /**
     * 刷新缓存
     * @example 
     * @return 
     */
    public function flush()
    {
    }

    /**
     * 获取缓存信息
     * @example 
     * @return 
     */
    public function info()
    {
    }

    /**
     * 导出缓存
     * @example 
     * @return 
     */
    public function dump()
    {
    }

}
