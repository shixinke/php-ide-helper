<?php
/**
* Redis自动补全类(基于最新的4.1.0RC1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/06/20
*/

/**
*与key相关的redis数组(也有人翻译为redis阵列)
*/
class RedisArray
{
    /**
     * 
     *创建一个Redis数组
     * @example $ra = new RedisArray(array("host1", "host2:63792", "host2:6380")); //这里的host1/host2在php.ini中定义的
     * @param array $hosts redis节点数组
     * @return 
     */
    public function __construct(Array $hosts)
    {
    
    }

    /**
     * 
     *方法不存在时调用的魔术方法
     * @example 
     * @param string $function_name 方法名
     * @param mixed $arguments 参数
     * @return 
     */
    public function __call(string $function_name, $arguments)
    {
    
    }

    /**
     * 
     *返回主机列表
     * @example 
     * @return array
     */
    public function _hosts(): array
    {
    
    }

    /**
     * 
     *返回指定键分布的节点host
     * @example 
     * @param string $key 键名
     * @return string
     */
    public function _target(string $key): string
    {
    
    }

    /**
     * 
     *返回连接到指定host的实例
     * @example 
     * @param string $host 主机
     * @return 
     */
    public function _instance(string $host)
    {
    
    }

    /**
     * 
     *返回键分布使用的函数
     * @example 
     * @return string
     */
    public function _function(): string
    {
    
    }

    /**
     * 
     *键分布函数名
     * @example 
     * @return string
     */
    public function _distributor(): string
    {
    
    }

    /**
     * 
     *重新对键进行hash分布
     * @example 
     * @return 
     */
    public function _rehash()
    {
    
    }

    /**
     * 
     *切换数据库
     * @example 
     * <pre>
     * $redis->select(0);       // switch to DB 0
     * $redis->set('x', '42');  // write 42 to x
     * $redis->move('x', 1);    // move to DB 1
     * $redis->select(1);       // switch to DB 1
     * $redis->get('x');        // will return 42
     * </pre>
     * @param int $dbIndex 数据库编号
     * @return bool
     */
    public function select(int $dbIndex): bool
    {
    
    }

    /**
     * 
     *获取Redis服务器的信息和统计数据
     * @example 
     * <pre>
     * $redis->info();
     * or
     * $redis->info("COMMANDSTATS"); //Information on the commands that have been run (>=2.6 only)
     * $redis->info("CPU"); // just CPU information from Redis INFO
     * </pre>
     * @return array
     */
    public function info(): array
    {
    
    }

    /**
     * 
     *检查当前redis连接状态(成功时返回PONG)
     * @example 
     * @return string
     */
    public function ping(): string
    {
    
    }

    /**
     * 
     *删除当前数据库的所有键
     * @example $redis->flushDB();
     * @return bool
     */
    public function flushDB(): bool
    {
    
    }

    /**
     * 
     *删除当前实例的所有键
     * @example $redis->flushAll();
     * @return bool
     */
    public function flushAll(): bool
    {
    
    }

    /**
     * 
     *批量获取键名
     * @example 
     * <pre>
     * $redis->delete('x', 'y', 'z', 'h');	// remove x y z
     * $redis->mset(array('x' => 'a', 'y' => 'b', 'z' => 'c'));
     * $redis->hset('h', 'field', 'value');
     * var_dump($redis->mget(array('x', 'y', 'z', 'h')));
     * // Output:
     * // array(3) {
     * // [0]=>
     * // string(1) "a"
     * // [1]=>
     * // string(1) "b"
     * // [2]=>
     * // string(1) "c"
     * // [3]=>
     * // bool(false)
     * // }
     * </pre>
     * @param array $keys 键名数组
     * @return 
     */
    public function mget(Array $keys)
    {
    
    }

    /**
     * 
     *批量设置值
     * @example 
     * <pre>
     * $redis->mset(array('key0' => 'value0', 'key1' => 'value1'));
     * var_dump($redis->get('key0'));
     * var_dump($redis->get('key1'));
     * // Output:
     * // string(6) "value0"
     * // string(6) "value1"
     * </pre>
     * @param array $values 要设置的键值对
     * @return bool
     */
    public function mset(Array $values): bool
    {
    
    }

    /**
     * 
     *删除一个或多个键
     * @example $redis->delete('key1', 'key2'); 
     * $redis->delete(array('key3', 'key4')); 
     * @param array|string $keys 键名
     * @return int
     */
    public function del(array $keys): int
    {
    
    }

    /**
     * 
     *获取客户端选项
     * @example 
     * // return Redis::SERIALIZER_NONE, Redis::SERIALIZER_PHP, or Redis::SERIALIZER_IGBINARY.
     * $redis->getOption(Redis::OPT_SERIALIZER);
     * @param string $optionName 选项名
     * @return int
     */
    public function getOption(string $optionName): int
    {
    
    }

    /**
     * 
     *设置客户端选项.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_NONE);        // don't serialize data
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);         // use built-in serialize/unserialize
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_IGBINARY);    // use igBinary serialize/unserialize
     * $redis->setOption(Redis::OPT_PREFIX, 'myAppName:');                      // use custom prefix on all keys
     * </pre>
     * @param string $optionName 选项名
     * @param string $optionValue 选项值
     * @return bool
     */
    public function setOption(string $optionName, string $optionValue): bool
    {
    
    }

    /**
     * 
     *根据匹配模式获取键名(如*)
     * @example 
     * $allKeys = $redis->keys('*');
     * $keyWithUserPrefix = $redis->keys('user*');
     * @param string $pattern 匹配模式
     * @return array
     */
    public function keys(string $pattern): array
    {
    
    }

    /**
     * 
     *将数据同步到硬盘上
     * @example $redis->save();
     * @return boolean
     */
    public function save(): boolean
    {
    
    }

    /**
     * 
     *将数据存入到硬盘上(异步操作)
     * @example 
     * @return 
     */
    public function bgSave()
    {
    
    }

    /**
     * 
     *开始一个事务.
     * @example 
     * <pre>
     * $ret = $redis->multi()
     * ->set('key1', 'val1')
     * ->get('key1')
     * ->set('key2', 'val2')
     * ->get('key2')
     * ->exec();
     * //$ret == array (
     * //    0 => TRUE,
     * //    1 => 'val1',
     * //    2 => TRUE,
     * //    3 => 'val2');
     * </pre>
     * @return 
     */
    public function multi()
    {
    
    }

    /**
     * 
     *取消事务
     * @example 
     * @return 
     */
    public function discard()
    {
    
    }

    /**
     * 
     *执行事务
     * @example 
     * @return 
     */
    public function exec()
    {
    
    }

    /**
     * 
     *取消观察某个键在其他客户端的变化情况
     * @example 
     * @param string|array $keys 键名
     * @return 
     */
    public function unwatch(string $keys)
    {
    
    }

    /**
     * 
     *删除一个或多个键
     * @example $redis->delete('key1', 'key2'); 
     * $redis->delete(array('key3', 'key4')); 
     * @param array|string $keys 键名
     * @return int
     */
    public function delete(array $keys): int
    {
    
    }

    /**
     * 
     *批量获取键值
     * @example 
     * <pre>
     * $redis->set('key1', 'value1');
     * $redis->set('key2', 'value2');
     * $redis->set('key3', 'value3');
     * $redis->getMultiple(array('key1', 'key2', 'key3')); // array('value1', 'value2', 'value3');
     * $redis->getMultiple(array('key0', 'key1', 'key5')); // array(`FALSE`, 'value2', `FALSE`);
     * </pre>
     * @param array $keys 键名数组
     * @return array
     */
    public function getMultiple(Array $keys): array
    {
    
    }

}

