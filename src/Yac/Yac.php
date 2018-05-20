<?php
/**
* Yac自动补全类(基于最新的2.0.3-dev版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*Yac是一个用于PHP的共享和无锁存储器用户数据缓存.它可以用于替换APC或本地memcached。
*注：目前它还不是稳定版。因为是无锁的，这意味着，有时候你可能得到一个错误的数据（这取决于分配了多少个键槽和有多少键存储），所以你最好确保你的产品不是很敏感
*/
/**
 * php.ini配置选项: 

 * 是否启用yac
 * yac.enable=1

 * 是否开启yac的debug模式
 * yac.debug=0

 * yac的键所占用的总的内存大小
 * yac.keys_memory_size=4M

 * yac的键值所占用的总的内存大小
 * yac.values_memory_size=64M

 * yac缓存压缩开关
 * yac.compress_threshold=-1

 * 是否启用yac的cli
 * yac.enable_cli=0

*/
/**
yac 版本
*/
define('YAC_VERSION', '2.0.1');
/**
yac 键的最大长度
*/
define('YAC_MAX_KEY_LEN', 48);
/**
yac 键值的最大长度
*/
define('YAC_MAX_VALUE_RAW_LEN', 67108863);
/**
yac 原始数据的最大压缩长度
*/
define('YAC_MAX_RAW_COMPRESSED_LEN', 1048576);
/**
yac使用的序列化方法
*/
define('YAC_SERIALIZER', 'PHP');
class Yac
{
    /**
     * @var string $_prefix 
     * 缓存键前缀
     * @access protected
     */
    protected $_prefix    =    '';

    /**
     * 
     *
     * @example $yac = new Yac();
     * $yac = new Yac('cache_')
     * @param string $prefix 缓存键前缀
     * @return 
     */
    public function __construct(string $prefix)
    {
    
    }

    /**
     * 
     *添加键值对
     * @example 
     * @param string $keys 键名
     * @param mixed $value 键值
     * @param int $ttl 有效期
     * @return 
     */
    public function add(string $keys, $value, int $ttl)
    {
    
    }

    /**
     * 
     *设置键值
     * @example 
     * @param mixed $keys 键名或键值对
     * @param mixed $value 键值
     * @param int $ttl 有效期
     * @return 
     */
    public function set($keys, $value, int $ttl)
    {
    
    }

    /**
     * 
     *设置键值的魔术方法
     * @example $yac->goods = 'apple';//相当于$yac->set('goods', 'apple');
     * @param string $key 键
     * @param mixed $value 值
     * @return 
     */
    public function __set(string $key, $value)
    {
    
    }

    /**
     * 
     *获取某个键的值或某些键的值
     * @example $yac->get('goods');
     * $yac->get(array('goods', 'test'));
     * @param mixed $keys 键名
     * @return 
     */
    public function get($keys)
    {
    
    }

    /**
     * 
     *获取某个键值的魔术方法
     * @example return $yac->goods;//相当于$yac->get('goods')
     * @param string $key 键名
     * @return 
     */
    public function __get(string $key)
    {
    
    }

    /**
     * 
     *删除某个键或某几个键
     * @example $yac->delete('goods');
     * $yac->delete(array('goods', 'test'));
     * @param mixed $keys 要删除的键
     * @param int $ttl 延迟删除时间
     * @return 
     */
    public function delete($keys, int $ttl)
    {
    
    }

    /**
     * 
     *刷新缓存，即清空缓存
     * @example 
     * @return 
     */
    public function flush()
    {
    
    }

    /**
     * 
     *获取缓存使用情况等信息
     * @example var_dump($yac->info());
     * array(11) {    ["memory_size"]=> int(541065216)
     *     ["slots_memory_size"]=> int(4194304)
     *     ["values_memory_size"]=> int(536870912)
     *     ["segment_size"]=> int(4194304)
     *     ["segment_num"]=> int(128)
     *     ["miss"]=> int(0)
     *     ["hits"]=> int(955)
     *     ["fails"]=> int(0)
     *     ["kicks"]=> int(0)
     *     ["slots_size"]=> int(32768)
     *     ["slots_used"]=> int(955)
     * }
     * @return array
     */
    public function info(): array
    {
    
    }

    /**
     * 
     *导出缓存
     * @example 
     * @return 
     */
    public function dump()
    {
    
    }

}

