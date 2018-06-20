<?php
/**
* Redis自动补全类(基于最新的4.1.0RC1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/06/20
*/

/**
*php操作Redis客户端
*/
/**
 * php.ini配置选项: 

 * 是否自动重新hash
 * redis.arrays.autorehash=

 * redis数组连接超时时间设置(users=1)
 * redis.arrays.connecttimeout=

 * redis键分布函数名称或分布方法
 * redis.arrays.distributor=

 * 设置每个redis数组使用的函数名称(如:users=user_hash)
 * redis.arrays.functions=

 * 设置每个数组的主机名(如:users[]=localhost:6379&users[]=localhost:6380&users[]=localhost:6381&users[]=localhost:6382&friends[]=localhost)
 * redis.arrays.hosts=

 * 设置哪些redis数组使用索引(如:users=1,friends=0)
 * redis.arrays.index=

 * 是否在需要操作某个Redis instance上的数据时，才建立连接
 * redis.arrays.lazyconnect=

 * 可用的redis数组列表(多个使用,隔开,如:users,friends)
 * redis.arrays.names=

 * redis阵列是否启用长连接
 * redis.arrays.pconnect=

 * 旧阵列(当一个新的节点添加到一个数组，phpredis需要知道它。节点的旧列表变成“previous”数组，节点的新列表作为主环)
 * redis.arrays.previous=

 * 阵列读数据超时时间
 * redis.arrays.readtimeout=

 * 指定当客户失去与服务器连接时重新连接的延迟的时间
 * redis.arrays.retryinterval=

 * 集群是否为长连接
 * redis.clusters.persistent=

 * 设置集群的读数据超时时间(如:mycluster=10)
 * redis.clusters.read_timeout=

 * 设置集群对应的主机配置(如:mycluster[]=localhost:7000&test[]=localhost:7001   ;\n　在程序中使用:$obj_cluster = new RedisCluster('mycluster');)
 * redis.clusters.seeds=

 * 设置集群的连接超时时间(如:mycluster=5)
 * redis.clusters.timeout=

 * session是否启用锁
 * redis.session.locking_enabled=

 * 设置用redis来存储session数据的锁有效时间
 * redis.session.lock_expire=

 * 设置用redis来存储session数据的锁重试次数
 * redis.session.lock_retries=

 * 设置用redis来存储session数据的锁等待时间
 * redis.session.lock_wait_time=

*/
class Redis
{
    /**     
    *未知类型
    */
    const REDIS_NOT_FOUND    =    0;

    /**     
    *字符串类型
    */
    const REDIS_STRING    =    1;

    /**     
    *集合类型
    */
    const REDIS_SET    =    2;

    /**     
    *列表类型
    */
    const REDIS_LIST    =    3;

    /**     
    *有序集合类型
    */
    const REDIS_ZSET    =    4;

    /**     
    *字典类型
    */
    const REDIS_HASH    =    5;

    /**     
    *管道模式
    */
    const PIPELINE    =    2;

    /**     
    *原子操作模式
    */
    const ATOMIC    =    0;

    /**     
    *事务模式
    */
    const MULTI    =    1;

    /**     
    *序列化选项
    */
    const OPT_SERIALIZER    =    1;

    /**     
    *前缀选项
    */
    const OPT_PREFIX    =    2;

    /**     
    *读操作超时选项
    */
    const OPT_READ_TIMEOUT    =    3;

    /**     
    *TCP长连接选项
    */
    const OPT_TCP_KEEPALIVE    =    6;

    /**     
    *启用压缩选项
    */
    const OPT_COMPRESSION    =    7;

    /**     
    *不实行序列化
    */
    const SERIALIZER_NONE    =    0;

    /**     
    *PHP序列化
    */
    const SERIALIZER_PHP    =    1;

    /**     
    *
    */
    const COMPRESSION_NONE    =    0;

    /**     
    *扫描选项
    */
    const OPT_SCAN    =    4;

    /**     
    *重新扫描
    */
    const SCAN_RETRY    =    1;

    /**     
    *不重新扫描
    */
    const SCAN_NORETRY    =    0;

    /**     
    *后面位置
    */
    const AFTER    =    'after';

    /**     
    *前面位置
    */
    const BEFORE    =    'before';

    /**
     * 
     *创建一个redis客户端
     * @example $redis = new Redis();
     * @return 
     */
    public function __construct()
    {
    
    }

    /**
     * 
     *析构方法
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *连接redis服务器
     * @example 
     * <pre>
     * $redis->connect('127.0.0.1', 6379);
     * $redis->connect('127.0.0.1');            // port 6379 by default
     * $redis->connect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout.
     * $redis->connect('/tmp/redis.sock');      // unix domain socket.
     * </pre>
     * @param string $host 主机IP
     * @param int $port 端口
     * @param float $timeout 连接超时时间(以秒为单位)
     * @param mixed $reserved 当使用retry_interval时该值为NULL
     * @param int $retry_interval 重试间隔
     * @param float $read_timeout 读操作超时时间
     * @return bool
     */
    public function connect(string $host, int $port, float $timeout, $reserved, int $retry_interval, float $read_timeout): bool
    {
    
    }

    /**
     * 
     *连接redis(长连接)，与connect用法一致
     * @example 
     * <pre>
     * $redis->pconnect('127.0.0.1', 6379);
     * $redis->pconnect('127.0.0.1');            // port 6379 by default
     * $redis->connect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout.
     * $redis->connect('/tmp/redis.sock');      // unix domain socket.
     * </pre>
     * @param string $host 主机IP
     * @param int $port 端口
     * @param float $timeout 连接超时时间(以秒为单位)
     * @param mixed $reserved 当使用retry_interval时该值为NULL
     * @param int $retry_interval 重试间隔
     * @param float $read_timeout 读操作超时时间
     * @return bool
     */
    public function pconnect(string $host, int $port, float $timeout, $reserved, int $retry_interval, float $read_timeout): bool
    {
    
    }

    /**
     * 
     *关闭redis连接(长连接除外)
     * @example 
     * @return 
     */
    public function close()
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
     *向redis发送一个字符串，而且redis服务器将返回一个相同的字符串
     * @example 
     * @param string $str 发送的字符串
     * @return string
     */
    public function echo(string $str): string
    {
    
    }

    /**
     * 
     *获取指定的key的值
     * @example $redis->get('key');
     * @return string|bool
     */
    public function get(): ?string
    {
    
    }

    /**
     * 
     *给指定的键设置值
     * @example 直接设置：
     *  $redis->set('key', 'value');
     * 带有效期的设置:
     * $redis->set('key','value', 10);
     * 当键不存在时，设置期有效期为10秒:
     * $redis->set('key', 'value', Array('nx', 'ex'=>10));
     * 当键存在时，设置期有效期为1000毫秒:
     * $redis->set('key', 'value', Array('xx', 'px'=>1000));
     * 
     * @param string $key 设置的缓存键
     * @param string $value 设置的缓存值
     * @param int|array $options 附加项，可以是超时时间或者一个选项数组
     * @return bool
     */
    public function set(string $key, string $value, int $options): bool
    {
    
    }

    /**
     * 
     *设置键值并设置有效期
     * @example $redis->setex('key', 3600, 'value');
     * @param string $key 设置的缓存键
     * @param string $value 设置的缓存值
     * @param int $ttl 有效期
     * @return bool
     */
    public function setex(string $key, string $value, int $ttl): bool
    {
    
    }

    /**
     * 
     *设置键值并设置有效期(毫秒为单位)
     * @example 
     * @param string $key 设置的缓存键
     * @param string $value 设置的缓存值
     * @param int $ttl 有效期(毫秒为单位)
     * @return 
     */
    public function psetex(string $key, string $value, int $ttl)
    {
    
    }

    /**
     * 
     *当键不存在时设置其值
     * @example 
     * $redis->setnx('key', 'value');
     * 
     * @param string $key 设置的缓存键
     * @param string $value 设置的缓存值
     * @return bool
     */
    public function setnx(string $key, string $value): bool
    {
    
    }

    /**
     * 
     *设置键的值，并返回它的旧的缓存值
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $exValue = $redis->getSet('x', 'lol');   // return '42', replaces x by 'lol'
     * $newValue = $redis->get('x')'            // return 'lol'
     * </pre>
     * @param string $key 设置的缓存键
     * @param string $value 设置的缓存值
     * @return string
     */
    public function getSet(string $key, string $value): string
    {
    
    }

    /**
     * 
     *返回一个随机的键
     * @example 
     * <pre>
     * $key = $redis->randomKey();
     * $surprise = $redis->get($key);  // who knows what's in there.
     * </pre>
     * @return string
     */
    public function randomKey(): string
    {
    
    }

    /**
     * 
     *给键重命名
     * @example 
     * @param string $srcKey 旧键名
     * @param string $dstKey 新键名
     * @return bool
     */
    public function renameKey(string $srcKey, string $dstKey): bool
    {
    
    }

    /**
     * 
     *当目标键名不存在时，给键重命名
     * @example 
     * @param string $srcKey 旧键名
     * @param string $dstKey 新键名
     * @return bool
     */
    public function renameNx(string $srcKey, string $dstKey): bool
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

    /**
     * 
     *判断键是否存在
     * @example 
     * <pre>
     * $redis->set('key', 'value');
     * $redis->exists('key');               //  TRUE
     * $redis->exists('NonExistingKey');    // FALSE
     * </pre>
     * @param string $key 键名
     * @return bool
     */
    public function exists(string $key): bool
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
     *键值自增
     * @example 
     * <pre>
     * $redis->incr('key1'); // key1 didn't exists, set to 0 before the increment and now has the value 1
     * $redis->incr('key1'); // 2
     * $redis->incr('key1'); // 3
     * $redis->incr('key1'); // 4
     * </pre>
     * @param string $key 键名
     * @return int
     */
    public function incr(string $key): int
    {
    
    }

    /**
     * 
     *按指定步长自增
     * @example 
     * <pre>
     * $redis->incr('key1');        // key1 didn't exists, set to 0 before the increment and now has the value 1
     * $redis->incr('key1');        // 2
     * $redis->incr('key1');        // 3
     * $redis->incr('key1');        // 4
     * $redis->incrBy('key1', 10);  // 14
     * </pre>
     * @param string $key 键名
     * @param int $step 自增步长
     * @return int
     */
    public function incrBy(string $key, int $step): int
    {
    
    }

    /**
     * 
     *按指定步长自增
     * @example 
     * <pre>
     * $redis = new Redis();
     * $redis->connect('127.0.0.1');
     * $redis->set('x', 3);
     * var_dump( $redis->incrByFloat('x', 1.5) );   // float(4.5)
     * // ! SIC
     * var_dump( $redis->get('x') );                // string(3) "4.5"
     * </pre>
     * @param string $key 键名
     * @param float $step 自增步长
     * @return float
     */
    public function incrByFloat(string $key, float $step): float
    {
    
    }

    /**
     * 
     *键值自减
     * @example 
     * <pre>
     * $redis->decr('key1'); // key1 didn't exists, set to 0 before the increment and now has the value -1
     * $redis->decr('key1'); // -2
     * $redis->decr('key1'); // -3
     * </pre>
     * @param string $key 键名
     * @return int
     */
    public function decr(string $key): int
    {
    
    }

    /**
     * 
     *按指定步长自减
     * @example 
     * <pre>
     * $redis->decr('key1');        // key1 didn't exists, set to 0 before the increment and now has the value -1
     * $redis->decr('key1');        // -2
     * $redis->decr('key1');        // -3
     * $redis->decrBy('key1', 10);  // -13
     * </pre>
     * @param string $key 键名
     * @param float $step 自减步长
     * @return int
     */
    public function decrBy(string $key, float $step): int
    {
    
    }

    /**
     * 
     *获取指定键的数据类型(需要根据常量匹配)
     * @example $redis->type('key');
     * @param string $key 键名
     * @return int
     */
    public function type(string $key): int
    {
    
    }

    /**
     * 
     *将字符串追加到键值后(返回值的长度)
     * @example 
     * <pre>
     * $redis->set('key', 'value1');
     * $redis->append('key', 'value2'); // 12
     * $redis->get('key');              // 'value1value2'
     * </pre>
     * @param string $key 键名
     * @param string $value 追加的值
     * @return int
     */
    public function append(string $key, string $value): int
    {
    
    }

    /**
     * 
     *获取一个键值的子字符串
     * @example 
     * <pre>
     * $redis->set('key', 'string value');
     * $redis->getRange('key', 0, 5);   // 'string'
     * $redis->getRange('key', -5, -1); // 'value'
     * </pre>
     * @param string $key 键名
     * @param int $start 开始位置
     * @param int $end 结束位置
     * @return string
     */
    public function getRange(string $key, int $start, int $end): string
    {
    
    }

    /**
     * 
     *修改某个键的某个位置的值
     * @example 
     * <pre>
     * $redis->set('key', 'Hello world');
     * $redis->setRange('key', 6, "redis"); // returns 11
     * $redis->get('key');                  // "Hello redis"
     * </pre>
     * @param string $key 键名
     * @param int $offset 开始位置
     * @param string $value 被替换的子串的值
     * @return string
     */
    public function setRange(string $key, int $offset, string $value): string
    {
    
    }

    /**
     * 
     *获取某个键的某个位置的位值
     * @example 
     * <pre>
     * $redis->set('key', "\x7f");  // this is 0111 1111
     * $redis->getBit('key', 0);    // 0
     * $redis->getBit('key', 1);    // 1
     * </pre>
     * @param string $key 键名
     * @param int $offset 所在位置
     * @return int
     */
    public function getBit(string $key, int $offset): int
    {
    
    }

    /**
     * 
     *修改某个键的某个位置的位值
     * @example 
     * <pre>
     * $redis->set('key', "*");     // ord("*") = 42 = 0x2f = "0010 1010"
     * $redis->setBit('key', 5, 1); // returns 0
     * $redis->setBit('key', 7, 1); // returns 0
     * $redis->get('key');          // chr(0x2f) = "/" = b("0010 1111")
     * </pre>
     * @param string $key 键名
     * @param int $offset 开始位置
     * @param bool|int $value 新值
     * @return int
     */
    public function setBit(string $key, int $offset, int $value): int
    {
    
    }

    /**
     * 
     *获取键值的长度
     * @example 
     * <pre>
     * $redis->set('key', 'value');
     * $redis->strlen('key'); // 5
     * </pre>
     * @param string $key 键名
     * @return int
     */
    public function strlen(string $key): int
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
    public function getKeys(string $pattern): array
    {
    
    }

    /**
     * 
     *给列表、集合或有序集合的元素排序
     * @example 
     * <pre>
     * $redis->delete('s');
     * $redis->sadd('s', 5);
     * $redis->sadd('s', 4);
     * $redis->sadd('s', 2);
     * $redis->sadd('s', 1);
     * $redis->sadd('s', 3);
     * var_dump($redis->sort('s')); // 1,2,3,4,5
     * var_dump($redis->sort('s', array('sort' => 'desc'))); // 5,4,3,2,1
     * var_dump($redis->sort('s', array('sort' => 'desc', 'store' => 'out'))); // (int)5
     * </pre>
     * @param string $key 键名
     * @param array $options 排序参数,如：array('sort' => 'desc')
     * @return An
     */
    public function sort(string $key, Array $options): An
    {
    
    }

    /**
     * 
     *给列表、集合或有序集合的元素排序(自小到大顺序)
     * @example 
     * @param string $key 键名
     * @return 
     */
    public function sortAsc(string $key)
    {
    
    }

    /**
     * 
     *给列表、集合或有序集合的元素排序(按字母顺序)
     * @example 
     * @param string $key 键名
     * @return 
     */
    public function sortAscAlpha(string $key)
    {
    
    }

    /**
     * 
     *给列表、集合或有序集合的元素排序(自大到小顺序)
     * @example 
     * @param string $key 键名
     * @return 
     */
    public function sortDesc(string $key)
    {
    
    }

    /**
     * 
     *给列表、集合或有序集合的元素排序(按字母顺序倒序)
     * @example 
     * @param string $key 键名
     * @return 
     */
    public function sortDescAlpha(string $key)
    {
    
    }

    /**
     * 
     *从左侧(头部)向列表插入元素
     * @example 
     * <pre>
     * $redis->lPush('l', 'v1', 'v2', 'v3', 'v4')   // int(4)
     * var_dump( $redis->lRange('l', 0, -1) );
     * //// Output:
     * // array(4) {
     * //   [0]=> string(2) "v4"
     * //   [1]=> string(2) "v3"
     * //   [2]=> string(2) "v2"
     * //   [3]=> string(2) "v1"
     * // }
     * </pre>
     * @param string $key 键名
     * @param string $value 元素值
     * @return int
     */
    public function lPush(string $key, string $value): int
    {
    
    }

    /**
     * 
     *从右侧(尾部)向列表插入元素
     * @example 
     * <pre>
     * $redis->rPush('l', 'v1', 'v2', 'v3', 'v4');    // int(4)
     * var_dump( $redis->lRange('l', 0, -1) );
     * //// Output:
     * // array(4) {
     * //   [0]=> string(2) "v1"
     * //   [1]=> string(2) "v2"
     * //   [2]=> string(2) "v3"
     * //   [3]=> string(2) "v4"
     * // }
     * </pre>
     * @param string $key 键名
     * @param string $value 元素值
     * @return int
     */
    public function rPush(string $key, string $value): int
    {
    
    }

    /**
     * 
     *如果列表存在，从左侧(头部)向列表插入元素
     * @example 
     * <pre>
     * $redis->delete('key1');
     * $redis->lPushx('key1', 'A');     // returns 0
     * $redis->lPush('key1', 'A');      // returns 1
     * $redis->lPushx('key1', 'B');     // returns 2
     * $redis->lPushx('key1', 'C');     // returns 3
     * // key1 now points to the following list: [ 'A', 'B', 'C' ]
     * </pre>
     * @param string $key 键名
     * @param string $value 元素值
     * @return int
     */
    public function lPushx(string $key, string $value): int
    {
    
    }

    /**
     * 
     *如果列表存在，从右侧(尾部)向列表插入元素
     * @example 
     * <pre>
     * $redis->delete('key1');
     * $redis->rPushx('key1', 'A'); // returns 0
     * $redis->rPush('key1', 'A'); // returns 1
     * $redis->rPushx('key1', 'B'); // returns 2
     * $redis->rPushx('key1', 'C'); // returns 3
     * // key1 now points to the following list: [ 'A', 'B', 'C' ]
     * </pre>
     * @param string $key 键名
     * @param string $value 元素值
     * @return int
     */
    public function rPushx(string $key, string $value): int
    {
    
    }

    /**
     * 
     *从列表左侧删除一个元素
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->lPop('key1');        // key1 => [ 'B', 'C' ]
     * </pre>
     * @param string $key 键名
     * @return string
     */
    public function lPop(string $key): string
    {
    
    }

    /**
     * 
     *从列表右侧删除一个元素
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->rPop('key1');        // key1 => [ 'A', 'B' ]
     * </pre>
     * @param string $key 键名
     * @return string
     */
    public function rPop(string $key): string
    {
    
    }

    /**
     * 
     *是一个阻塞lPop原语。 如果至少有一个列表包含至少一个元素，则该元素将从列表头部弹出并返回给调用者。 如果所有通过参数传递的键标识的列表都是空的，blPop将在指定的超时期间阻塞，直到元素被推送到其中一个列表。 这个元素将被弹出。
     * @example 
     * <pre>
     * // Non blocking feature
     * $redis->lPush('key1', 'A');
     * $redis->delete('key2');
     * $redis->blPop('key1', 'key2', 10); // array('key1', 'A')
     * // OR
     * $redis->blPop(array('key1', 'key2'), 10); // array('key1', 'A')
     * $redis->brPop('key1', 'key2', 10); // array('key1', 'A')
     * // OR
     * $redis->brPop(array('key1', 'key2'), 10); // array('key1', 'A')
     * // Blocking feature
     * // process 1
     * $redis->delete('key1');
     * $redis->blPop('key1', 10);
     * // blocking for 10 seconds
     * // process 2
     * $redis->lPush('key1', 'A');
     * // process 1
     * // array('key1', 'A') is returned
     * </pre>
     * @param string|...|array $key 键名
     * @param int $timeout 超时时间
     * @return array
     */
    public function blPop(string $key, int $timeout): array
    {
    
    }

    /**
     * 
     *是一个阻塞rPop原语。 如果至少有一个列表包含至少一个元素，则该元素将从列表尾部弹出并返回给调用者。 如果所有通过参数传递的键标识的列表都是空的，brPop将在指定的超时期间阻塞，直到元素被推送到其中一个列表。 这个元素将被弹出。
     * @example 
     * <pre>
     * // Non blocking feature
     * $redis->lPush('key1', 'A');
     * $redis->delete('key2');
     * $redis->blPop('key1', 'key2', 10); // array('key1', 'A')
     * // OR
     * $redis->blPop(array('key1', 'key2'), 10); // array('key1', 'A')
     * $redis->brPop('key1', 'key2', 10); // array('key1', 'A')
     * // OR
     * $redis->brPop(array('key1', 'key2'), 10); // array('key1', 'A')
     * // Blocking feature
     * // process 1
     * $redis->delete('key1');
     * $redis->blPop('key1', 10);
     * // blocking for 10 seconds
     * // process 2
     * $redis->lPush('key1', 'A');
     * // process 1
     * // array('key1', 'A') is returned
     * </pre>
     * @param string|...|array $key 键名
     * @param int $timeout 超时时间
     * @return array
     */
    public function brPop(string $key, int $timeout): array
    {
    
    }

    /**
     * 
     *返回列表的长度
     * @example 
     * @param string|...|array $key 键名
     * @return int | bool
     */
    public function lSize(string $key): ?int
    {
    
    }

    /**
     * 
     *从列表中删除指定值的元素。 如果count为零，则删除所有匹配的元素。 如果计数是负数，则元素从尾部移到头部。
     * @example 
     * @param string $key 键名
     * @param string $value 元素值
     * @param int $count 删除的个数
     * @return int | bool
     */
    public function lRemove(string $key, string $value, int $count): ?int
    {
    
    }

    /**
     * 
     *删除指定范围外的其他元素
     * @example 
     * @param string $key 键名
     * @param int $start 开始索引
     * @param int $end 结束索引
     * @return array | bool
     */
    public function listTrim(string $key, int $start, int $end): ?array
    {
    
    }

    /**
     * 
     *获取列表中指定索引的值
     * @example 
     * @param string $key 键名
     * @param int $index 索引值
     * @return string | bool
     */
    public function lGet(string $key, int $index): ?string
    {
    
    }

    /**
     * 
     *获取列表指定范围的值
     * @example 
     * @param string $key 键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @return array
     */
    public function lGetRange(string $key, int $start, int $end): array
    {
    
    }

    /**
     * 
     *给列表指定位置设置新值
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->lGet('key1', 0);     // 'A'
     * $redis->lSet('key1', 0, 'X');
     * $redis->lGet('key1', 0);     // 'X'
     * </pre>
     * @param string $key 键名
     * @param int $index 索引值
     * @param string $value 新值
     * @return bool
     */
    public function lSet(string $key, int $index, string $value): bool
    {
    
    }

    /**
     * 
     *在列表中，在某个元素的前面或后面插入一个新值
     * @example 
     * <pre>
     * $redis->delete('key1');
     * $redis->lInsert('key1', Redis::AFTER, 'A', 'X');     // 0
     * $redis->lPush('key1', 'A');
     * $redis->lPush('key1', 'B');
     * $redis->lPush('key1', 'C');
     * $redis->lInsert('key1', Redis::BEFORE, 'C', 'X');    // 4
     * $redis->lRange('key1', 0, -1);                       // array('A', 'B', 'X', 'C')
     * $redis->lInsert('key1', Redis::AFTER, 'C', 'Y');     // 5
     * $redis->lRange('key1', 0, -1);                       // array('A', 'B', 'X', 'C', 'Y')
     * $redis->lInsert('key1', Redis::AFTER, 'W', 'value'); // -1
     * </pre>
     * @param string $key 键名
     * @param string $position 位置(前面或后面,使用Redis::BEFORE | Redis::AFTER)
     * @param string $element 元素
     * @param string $value 新值
     * @return int
     */
    public function lInsert(string $key, string $position, string $element, string $value): int
    {
    
    }

    /**
     * 
     *给集合添加元素
     * @example 
     * <pre>
     * $redis->sAdd('k', 'v1');                // int(1)
     * $redis->sAdd('k', 'v1', 'v2', 'v3');    // int(2)
     * </pre>
     * @param string $key 键名
     * @param string $value 元素值
     * @return int
     */
    public function sAdd(string $key, string $value): int
    {
    
    }

    /**
     * 
     *给集合批量添加元素
     * @example 
     * @param string $key 键名
     * @param array $value 元素值
     * @return 
     */
    public function sAddArray(string $key, Array $value)
    {
    
    }

    /**
     * 
     *返回集合的元素个数
     * @example 
     * @param string $key 键名
     * @return int
     */
    public function sSize(string $key): int
    {
    
    }

    /**
     * 
     *删除集合元素
     * @example 
     * @param string $key 键名
     * @param string|... $member 成员
     * @return int
     */
    public function sRemove(string $key, string $member): int
    {
    
    }

    /**
     * 
     *将某个集合中的元素移动到另外一个集合中
     * @example 
     * <pre>
     * $redis->sAdd('key1' , 'set11');
     * $redis->sAdd('key1' , 'set12');
     * $redis->sAdd('key1' , 'set13');          // 'key1' => {'set11', 'set12', 'set13'}
     * $redis->sAdd('key2' , 'set21');
     * $redis->sAdd('key2' , 'set22');          // 'key2' => {'set21', 'set22'}
     * $redis->sMove('key1', 'key2', 'set13');  // 'key1' =>  {'set11', 'set12'}
     * // 'key2' =>  {'set21', 'set22', 'set13'}
     * </pre>
     * @param string $srcKey 原集合键名
     * @param string $dstKey 目标集合键名
     * @param string $member 成员
     * @return bool
     */
    public function sMove(string $srcKey, string $dstKey, string $member): bool
    {
    
    }

    /**
     * 
     *随机删除元素的某个或某些成员，并返回这个删除的成员.
     * @example 
     * <pre>
     * $redis->sAdd('key1' , 'set1');
     * $redis->sAdd('key1' , 'set2');
     * $redis->sAdd('key1' , 'set3');   // 'key1' => {'set3', 'set1', 'set2'}
     * $redis->sPop('key1');            // 'set1', 'key1' => {'set3', 'set2'}
     * $redis->sPop('key1');            // 'set3', 'key1' => {'set2'}
     * </pre>
     * @param string $key 键名
     * @param int $count 删除个数
     * @return string | bool
     */
    public function sPop(string $key, int $count): ?string
    {
    
    }

    /**
     * 
     *随机返回一个集合的元素(不会删除它)
     * @example 
     * <pre>
     * $redis->sAdd('key1' , 'one');
     * $redis->sAdd('key1' , 'two');
     * $redis->sAdd('key1' , 'three');              // 'key1' => {'one', 'two', 'three'}
     * var_dump( $redis->sRandMember('key1') );     // 'key1' => {'one', 'two', 'three'}
     * // string(5) "three"
     * var_dump( $redis->sRandMember('key1', 2) );  // 'key1' => {'one', 'two', 'three'}
     * // array(2) {
     * //   [0]=> string(2) "one"
     * //   [1]=> string(2) "three"
     * // }
     * </pre>
     * @param string $key 键名
     * @return string | bool
     */
    public function sRandMember(string $key): ?string
    {
    
    }

    /**
     * 
     *是否包含某个成员
     * @example 
     * @param string $key 键名
     * @param string $member 成员值
     * @return bool
     */
    public function sContains(string $key, string $member): bool
    {
    
    }

    /**
     * 
     *返回集合的所有成员
     * @example 
     * <pre>
     * $redis->delete('s');
     * $redis->sAdd('s', 'a');
     * $redis->sAdd('s', 'b');
     * $redis->sAdd('s', 'a');
     * $redis->sAdd('s', 'c');
     * var_dump($redis->sMembers('s'));
     * //array(3) {
     * //  [0]=>
     * //  string(1) "c"
     * //  [1]=>
     * //  string(1) "a"
     * //  [2]=>
     * //  string(1) "b"
     * //}
     * // The order is random and corresponds to redis' own internal representation of the set structure.
     * </pre>
     * @param string $key 键名
     * @return array
     */
    public function sMembers(string $key): array
    {
    
    }

    /**
     * 
     *获取两个集合的交集
     * @example 
     * <pre>
     * $redis->sAdd('key1', 'val1');
     * $redis->sAdd('key1', 'val2');
     * $redis->sAdd('key1', 'val3');
     * $redis->sAdd('key1', 'val4');
     * $redis->sAdd('key2', 'val3');
     * $redis->sAdd('key2', 'val4');
     * $redis->sAdd('key3', 'val3');
     * $redis->sAdd('key3', 'val4');
     * var_dump($redis->sInter('key1', 'key2', 'key3'));
     * //array(2) {
     * //  [0]=>
     * //  string(4) "val4"
     * //  [1]=>
     * //  string(4) "val3"
     * //}
     * </pre>
     * @param string $key1 键名1
     * @param string $key2 键名2
     * @return array | bool
     */
    public function sInter(string $key1, string $key2): ?array
    {
    
    }

    /**
     * 
     *获取多个集合的交集，并将结果存入到另外一个集合中
     * @example 
     * <pre>
     * $redis->sAdd('key1', 'val1');
     * $redis->sAdd('key1', 'val2');
     * $redis->sAdd('key1', 'val3');
     * $redis->sAdd('key1', 'val4');
     * $redis->sAdd('key2', 'val3');
     * $redis->sAdd('key2', 'val4');
     * $redis->sAdd('key3', 'val3');
     * $redis->sAdd('key3', 'val4');
     * var_dump($redis->sInterStore('output', 'key1', 'key2', 'key3'));
     * var_dump($redis->sMembers('output'));
     * //int(2)
     * //
     * //array(2) {
     * //  [0]=>
     * //  string(4) "val4"
     * //  [1]=>
     * //  string(4) "val3"
     * //}
     * </pre>
     * @param string $dstKey 目标键，存放结果的键
     * @param string $key1 键名1
     * @param string $key2 键名2
     * @param string|... $keyN 键名n
     * @return int
     */
    public function sInterStore(string $dstKey, string $key1, string $key2, string $keyN): int
    {
    
    }

    /**
     * 
     *获取集合的并集
     * @example 
     * <pre>
     * $redis->delete('s0', 's1', 's2');
     * $redis->sAdd('s0', '1');
     * $redis->sAdd('s0', '2');
     * $redis->sAdd('s1', '3');
     * $redis->sAdd('s1', '1');
     * $redis->sAdd('s2', '3');
     * $redis->sAdd('s2', '4');
     * var_dump($redis->sUnion('s0', 's1', 's2'));
     * array(4) {
     * //  [0]=>
     * //  string(1) "3"
     * //  [1]=>
     * //  string(1) "4"
     * //  [2]=>
     * //  string(1) "1"
     * //  [3]=>
     * //  string(1) "2"
     * //}
     * </pre>
     * @param string $key1 键名1
     * @param string|... $key2 键名2
     * @return array
     */
    public function sUnion(string $key1, string $key2): array
    {
    
    }

    /**
     * 
     *获取多个集合的并集，并将结果存入到另外一个集合中
     * @example 
     * <pre>
     * $redis->delete('s0', 's1', 's2');
     * $redis->sAdd('s0', '1');
     * $redis->sAdd('s0', '2');
     * $redis->sAdd('s1', '3');
     * $redis->sAdd('s1', '1');
     * $redis->sAdd('s2', '3');
     * $redis->sAdd('s2', '4');
     * var_dump($redis->sUnionStore('dst', 's0', 's1', 's2'));
     * var_dump($redis->sMembers('dst'));
     * //int(4)
     * //array(4) {
     * //  [0]=>
     * //  string(1) "3"
     * //  [1]=>
     * //  string(1) "4"
     * //  [2]=>
     * //  string(1) "1"
     * //  [3]=>
     * //  string(1) "2"
     * //}
     * </pre>
     * @param string $dstKey 目标键，存放结果的键
     * @param string $key1 键名1
     * @param string $key2 键名2
     * @param string|... $keyN 键名n
     * @return int
     */
    public function sUnionStore(string $dstKey, string $key1, string $key2, string $keyN): int
    {
    
    }

    /**
     * 
     *获取多个集合的差集
     * @example 
     * <pre>
     * $redis->delete('s0', 's1', 's2');
     * $redis->sAdd('s0', '1');
     * $redis->sAdd('s0', '2');
     * $redis->sAdd('s0', '3');
     * $redis->sAdd('s0', '4');
     * $redis->sAdd('s1', '1');
     * $redis->sAdd('s2', '3');
     * var_dump($redis->sDiff('s0', 's1', 's2'));
     * //array(2) {
     * //  [0]=>
     * //  string(1) "4"
     * //  [1]=>
     * //  string(1) "2"
     * //}
     * </pre>
     * @param string $key1 键名1
     * @param string|... $key2 键名2
     * @return array
     */
    public function sDiff(string $key1, string $key2): array
    {
    
    }

    /**
     * 
     *获取多个集合的差集，并将结果存入到一个新的集合中
     * @example 
     * <pre>
     * $redis->delete('s0', 's1', 's2');
     * $redis->sAdd('s0', '1');
     * $redis->sAdd('s0', '2');
     * $redis->sAdd('s0', '3');
     * $redis->sAdd('s0', '4');
     * $redis->sAdd('s1', '1');
     * $redis->sAdd('s2', '3');
     * var_dump($redis->sDiffStore('dst', 's0', 's1', 's2'));
     * var_dump($redis->sMembers('dst'));
     * //int(2)
     * //array(2) {
     * //  [0]=>
     * //  string(1) "4"
     * //  [1]=>
     * //  string(1) "2"
     * //}
     * </pre>
     * @param string $dstKey 目标键，存放结果的键
     * @param string $key1 键名1
     * @param string $key2 键名2
     * @param string|... $keyN 键名n
     * @return int
     */
    public function sDiffStore(string $dstKey, string $key1, string $key2, string $keyN): int
    {
    
    }

    /**
     * 
     *设置键的有效期
     * @example 
     * @param string $key 键名
     * @param int $ttl 有效期(秒数)
     * @return bool
     */
    public function setTimeout(string $key, int $ttl): bool
    {
    
    }

    /**
     * 
     *将数据同步到硬盘上
     * @example $redis->save();
     * @return bool
     */
    public function save(): bool
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
     *获取上次数据同步到硬盘的时间
     * @example $redis->lastSave();
     * @return int
     */
    public function lastSave(): int
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
     *获取当前数据库的键的个数
     * @example 
     * <pre>
     * $count = $redis->dbSize();
     * echo "Redis has $count keys\n";
     * </pre>
     * @return int
     */
    public function dbSize(): int
    {
    
    }

    /**
     * 
     *设置连接的认证密码
     * @example $redis->auth('foobared');
     * @param string $password 认证密码
     * @return bool
     */
    public function auth(string $password): bool
    {
    
    }

    /**
     * 
     *返回指定键的有效时间(秒)
     * @example $redis->ttl('key');
     * @param string $key 键名
     * @return int
     */
    public function ttl(string $key): int
    {
    
    }

    /**
     * 
     *返回指定键的有效时间(毫秒)
     * @example $redis->pttl('key');
     * @param string $key 键名
     * @return int
     */
    public function pttl(string $key): int
    {
    
    }

    /**
     * 
     *移除指定键的有效期，让它永久有效
     * @example $redis->persist('key');
     * @param string $key 键名
     * @return bool
     */
    public function persist(string $key): bool
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
     *将某个键移动到其他数据库中
     * @example 
     * <pre>
     * $redis->select(0);       // switch to DB 0
     * $redis->set('x', '42');  // write 42 to x
     * $redis->move('x', 1);    // move to DB 1
     * $redis->select(1);       // switch to DB 1
     * $redis->get('x');        // will return 42
     * </pre>
     * @param string $key 键名
     * @param int $dbIndex 数据库编号
     * @return bool
     */
    public function move(string $key, int $dbIndex): bool
    {
    
    }

    /**
     * 
     *开启后台写AOF日志操作
     * @example $redis->bgrewriteaof();
     * @return bool
     */
    public function bgrewriteaof(): bool
    {
    
    }

    /**
     * 
     *修改从服务状态(参数为空时，表示停止当前从属关系)
     * @example 
     * <pre>
     * $redis->slaveof('10.0.1.7', 6379);
     * // ...
     * $redis->slaveof();
     * </pre>
     * @param string $host 服务器
     * @param int $port 端口号
     * @return bool
     */
    public function slaveof(string $host, int $port): bool
    {
    
    }

    /**
     * 
     *获取某个键的对象信息
     * @example 
     * <pre>
     * $redis->object("encoding", "l"); // → ziplist
     * $redis->object("refcount", "l"); // → 1
     * $redis->object("idletime", "l"); // → 400 (in seconds, with a precision of 10 seconds).
     * </pre>
     * @param string $info 获取的信息指标名称(有 encoding、refcount 、idletime 3种可选择)
     * @param string $key 键名
     * @return string
     */
    public function object(string $info, string $key): string
    {
    
    }

    /**
     * 
     *多个键的位操作，并将结果存入到指定的键中
     * @example 
     * @param string $operation 操作(有 AND, OR, NOT, XOR 4种可选择)
     * @param string $dstKey 目标键
     * @param string $key1 键名1
     * @param string $key2 键名2
     * @param string|... $keyN 键名N
     * @return int
     */
    public function bitop(string $operation, string $dstKey, string $key1, string $key2, string $keyN): int
    {
    
    }

    /**
     * 
     *统计字符串的位数
     * @example 
     * @param string $key 键名
     * @return int
     */
    public function bitcount(string $key): int
    {
    
    }

    /**
     * 
     *获取指定位置的位值
     * @example 
     * <pre>
     * $redis->set('key', '\xff\xff');
     * $redis->bitpos('key', 1); // int(0)
     * $redis->bitpos('key', 1, 1); // int(8)
     * $redis->bitpos('key', 1, 3); // int(-1)
     * $redis->bitpos('key', 0); // int(16)
     * $redis->bitpos('key', 0, 1); // int(16)
     * $redis->bitpos('key', 0, 1, 5); // int(-1)
     * </pre>
     * @param string $key 键名
     * @param int $bit 位值
     * @param int $start 开始位置
     * @param int $end 结束位置
     * @return callable
     */
    public function bitpos(string $key, int $bit, int $start, int $end): callable
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
     *批量设置值(当不存在时设置)
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
    public function msetnx(Array $values): bool
    {
    
    }

    /**
     * 
     *从一个队列的队尾删除一个元素，并将该元素插入到另一个队列的头部
     * @example 
     * <pre>
     * $redis->delete('x', 'y');
     * $redis->lPush('x', 'abc');
     * $redis->lPush('x', 'def');
     * $redis->lPush('y', '123');
     * $redis->lPush('y', '456');
     * // move the last of x to the front of y.
     * var_dump($redis->rpoplpush('x', 'y'));
     * var_dump($redis->lRange('x', 0, -1));
     * var_dump($redis->lRange('y', 0, -1));
     * //Output:
     * //
     * //string(3) "abc"
     * //array(1) {
     * //  [0]=>
     * //  string(3) "def"
     * //}
     * //array(3) {
     * //  [0]=>
     * //  string(3) "abc"
     * //  [1]=>
     * //  string(3) "456"
     * //  [2]=>
     * //  string(3) "123"
     * //}
     * </pre>
     * @param string $srcKey 要删除元素的队列键名
     * @param string $dstKey 要插入元素的队列的键名
     * @return string
     */
    public function rpoplpush(string $srcKey, string $dstKey): string
    {
    
    }

    /**
     * 
     *阻塞执行rpoplpush
     * @example 
     * @param string $srcKey 要删除元素的队列键名
     * @param string $dstKey 要插入元素的队列的键名
     * @return string
     */
    public function brpoplpush(string $srcKey, string $dstKey): string
    {
    
    }

    /**
     * 
     *向有序集合插入元素
     * @example 
     * <pre>
     * <pre>
     * $redis->zAdd('z', 1, 'v2', 2, 'v2', 3, 'v3', 4, 'v4' );  // int(2)
     * $redis->zRem('z', 'v2', 'v3');                           // int(2)
     * var_dump( $redis->zRange('z', 0, -1) );
     * //// Output:
     * // array(2) {
     * //   [0]=> string(2) "v1"
     * //   [1]=> string(2) "v4"
     * // }
     * </pre>
     * </pre>
     * @param string $key 集合键名
     * @param double $score 排序值
     * @param string $value 元素值
     * @return int
     */
    public function zAdd(string $key, double $score, string $value): int
    {
    
    }

    /**
     * 
     *删除有序集合中的某个成员
     * @example 
     * @param string $key 集合键名
     * @param string $member 成员值
     * @return int
     */
    public function zDelete(string $key, string $member): int
    {
    
    }

    /**
     * 
     *获取有序集合中指定范围的成员
     * @example 
     * <pre>
     * $redis->zAdd('key1', 0, 'val0');
     * $redis->zAdd('key1', 2, 'val2');
     * $redis->zAdd('key1', 10, 'val10');
     * $redis->zRange('key1', 0, -1); // array('val0', 'val2', 'val10')
     * // with scores
     * $redis->zRange('key1', 0, -1, true); // array('val0' => 0, 'val2' => 2, 'val10' => 10)
     * </pre>
     * @param string $key 集合键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @param bool $withScores 是否返回成员的排序值
     * @return array
     */
    public function zRange(string $key, int $start, int $end, bool $withScores): array
    {
    
    }

    /**
     * 
     *获取有序集合中指定范围的成员(倒序排列)
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zRevRange('key', 0, -1); // array('val10', 'val2', 'val0')
     * // with scores
     * $redis->zRevRange('key', 0, -1, true); // array('val10' => 10, 'val2' => 2, 'val0' => 0)
     * </pre>
     * @param string $key 集合键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @param bool $withScores 是否返回成员的排序值
     * @return array
     */
    public function zRevRange(string $key, int $start, int $end, bool $withScores): array
    {
    
    }

    /**
     * 
     *获取有序集合中指定范围的成员(按排序值排列)
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zRangeByScore('key', 0, 3);                                          // array('val0', 'val2')
     * $redis->zRangeByScore('key', 0, 3, array('withscores' => TRUE);              // array('val0' => 0, 'val2' => 2)
     * $redis->zRangeByScore('key', 0, 3, array('limit' => array(1, 1));                        // array('val2' => 2)
     * $redis->zRangeByScore('key', 0, 3, array('limit' => array(1, 1));                        // array('val2')
     * $redis->zRangeByScore('key', 0, 3, array('withscores' => TRUE, 'limit' => array(1, 1));  // array('val2' => 2)
     * </pre>
     * @param string $key 集合键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @param array $options 附加选项(可以是：withscores => TRUE, and limit => array($offset, $count))
     * @return array
     */
    public function zRangeByScore(string $key, int $start, int $end, Array $options): array
    {
    
    }

    /**
     * 
     *获取有序集合中指定范围的成员(按排序值倒序排列)
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zRangeByScore('key', 0, 3);                                          // array('val0', 'val2')
     * $redis->zRangeByScore('key', 0, 3, array('withscores' => TRUE);              // array('val0' => 0, 'val2' => 2)
     * $redis->zRangeByScore('key', 0, 3, array('limit' => array(1, 1));                        // array('val2' => 2)
     * $redis->zRangeByScore('key', 0, 3, array('limit' => array(1, 1));                        // array('val2')
     * $redis->zRangeByScore('key', 0, 3, array('withscores' => TRUE, 'limit' => array(1, 1));  // array('val2' => 2)
     * </pre>
     * @param string $key 集合键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @param array $options 附加选项(可以是：withscores => TRUE, and limit => array($offset, $count))
     * @return array
     */
    public function zRevRangeByScore(string $key, int $start, int $end, Array $options): array
    {
    
    }

    /**
     * 
     *按字母字典的顺序返回成员
     * @example 
     * <pre>
     * foreach (array('a', 'b', 'c', 'd', 'e', 'f', 'g') as $char) {
     * $redis->zAdd('key', $char);
     * }
     * $redis->zRangeByLex('key', '-', '[c'); // array('a', 'b', 'c')
     * $redis->zRangeByLex('key', '-', '(c'); // array('a', 'b')
     * $redis->zRangeByLex('key', '-', '[c'); // array('b', 'c')
     * </pre>
     * @param string $key 集合键名
     * @param int $min 最小的字母
     * @param int $max 最大的字母
     * @param int $offset 索引开始值
     * @param int $limit 成员数
     * @return array
     */
    public function zRangeByLex(string $key, int $min, int $max, int $offset, int $limit): array
    {
    
    }

    /**
     * 
     *按字母字典的顺序返回成员（倒序排序）
     * @example 
     * @param string $key 集合键名
     * @param int $min 最小的字母
     * @param int $max 最大的字母
     * @param int $offset 索引开始值
     * @param int $limit 成员数
     * @return 
     */
    public function zRevRangeByLex(string $key, int $min, int $max, int $offset, int $limit)
    {
    
    }

    /**
     * 
     *获取指定字母范围的成员数
     * @example 
     * @param string $key 集合键名
     * @param int $min 最小的字母
     * @param int $max 最大的字母
     * @return int
     */
    public function zLexCount(string $key, int $min, int $max): int
    {
    
    }

    /**
     * 
     *删除指定字母范围的成员
     * @example 
     * @param string $key 集合键名
     * @param int $min 最小的字母
     * @param int $max 最大的字母
     * @return int
     */
    public function zRemRangeByLex(string $key, int $min, int $max): int
    {
    
    }

    /**
     * 
     *获取指定排序范围的成员数.
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zCount('key', 0, 3); // 2, corresponding to array('val0', 'val2')
     * </pre>
     * @param string $key 集合键名
     * @param double $start 开始排序值
     * @param double $end 结束排序值
     * @return int
     */
    public function zCount(string $key, double $start, double $end): int
    {
    
    }

    /**
     * 
     *根据排序值范围来删除成员
     * @example 
     * @param string $key 集合键名
     * @param double $start 开始排序值
     * @param double $end 结束排序值
     * @return int
     */
    public function zDeleteRangeByScore(string $key, double $start, double $end): int
    {
    
    }

    /**
     * 
     *根据排序范围删除成员
     * @example 
     * <pre>
     * $redis->zAdd('key', 1, 'one');
     * $redis->zAdd('key', 2, 'two');
     * $redis->zAdd('key', 3, 'three');
     * $redis->zRemRangeByRank('key', 0, 1); // 2
     * $redis->zRange('key', 0, -1, array('withscores' => TRUE)); // array('three' => 3)
     * </pre>
     * @param string $key 集合键名
     * @param double $start 开始排序值
     * @param double $end 结束排序值
     * @return int
     */
    public function zDeleteRangeByRank(string $key, double $start, double $end): int
    {
    
    }

    /**
     * 
     *获取有序集合的成员数
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zCard('key');            // 3
     * </pre>
     * @param string $key 集合键名
     * @return int
     */
    public function zCard(string $key): int
    {
    
    }

    /**
     * 
     *获取指定成员的排序值(分数)
     * @example 
     * <pre>
     * $redis->zAdd('key', 2.5, 'val2');
     * $redis->zScore('key', 'val2'); // 2.5
     * </pre>
     * @param string $key 集合键名
     * @param string $member 成员值
     * @return double
     */
    public function zScore(string $key, string $member): double
    {
    
    }

    /**
     * 
     *获取成员的排序值
     * @example 
     * <pre>
     * $redis->delete('z');
     * $redis->zAdd('key', 1, 'one');
     * $redis->zAdd('key', 2, 'two');
     * $redis->zRank('key', 'one');     // 0
     * $redis->zRank('key', 'two');     // 1
     * $redis->zRevRank('key', 'one');  // 1
     * $redis->zRevRank('key', 'two');  // 0
     * </pre>
     * @param string $key 集合键名
     * @param string $member 成员值
     * @return int
     */
    public function zRank(string $key, string $member): int
    {
    
    }

    /**
     * 
     *获取成员的排位值(倒数)
     * @example 
     * @param string $key 集合键名
     * @param string $member 成员值
     * @return int
     */
    public function zRevRank(string $key, string $member): int
    {
    
    }

    /**
     * 
     *将两个有序集合的交集存入到一个指定的键中
     * @example 
     * <pre>
     * $redis->delete('k1');
     * $redis->delete('k2');
     * $redis->delete('k3');
     * $redis->delete('ko1');
     * $redis->delete('ko2');
     * $redis->delete('ko3');
     * $redis->delete('ko4');
     * $redis->zAdd('k1', 0, 'val0');
     * $redis->zAdd('k1', 1, 'val1');
     * $redis->zAdd('k1', 3, 'val3');
     * $redis->zAdd('k2', 2, 'val1');
     * $redis->zAdd('k2', 3, 'val3');
     * $redis->zInter('ko1', array('k1', 'k2'));               // 2, 'ko1' => array('val1', 'val3')
     * $redis->zInter('ko2', array('k1', 'k2'), array(1, 1));  // 2, 'ko2' => array('val1', 'val3')
     * // Weighted zInter
     * $redis->zInter('ko3', array('k1', 'k2'), array(1, 5), 'min'); // 2, 'ko3' => array('val1', 'val3')
     * $redis->zInter('ko4', array('k1', 'k2'), array(1, 5), 'max'); // 2, 'ko4' => array('val3', 'val1')
     * </pre>
     * @param string $dstKey 目标集合键名
     * @param array $zsetKeys 集合键名
     * @param array $zsetKeysWeight 集合键对应的权重
     * @param string $aggregateFunction 合并使用的函数(SUM, MIN, 或 MAX)
     * @return int
     */
    public function zInter(string $dstKey, Array $zsetKeys, Array $zsetKeysWeight, string $aggregateFunction): int
    {
    
    }

    /**
     * 
     *将两个有序集合的并集存入到一个指定的键中
     * @example 
     * <pre>
     * $redis->delete('k1');
     * $redis->delete('k2');
     * $redis->delete('k3');
     * $redis->delete('ko1');
     * $redis->delete('ko2');
     * $redis->delete('ko3');
     * $redis->zAdd('k1', 0, 'val0');
     * $redis->zAdd('k1', 1, 'val1');
     * $redis->zAdd('k2', 2, 'val2');
     * $redis->zAdd('k2', 3, 'val3');
     * $redis->zUnion('ko1', array('k1', 'k2')); // 4, 'ko1' => array('val0', 'val1', 'val2', 'val3')
     * // Weighted zUnion
     * $redis->zUnion('ko2', array('k1', 'k2'), array(1, 1)); // 4, 'ko2' => array('val0', 'val1', 'val2', 'val3')
     * $redis->zUnion('ko3', array('k1', 'k2'), array(5, 1)); // 4, 'ko3' => array('val0', 'val2', 'val3', 'val1')
     * </pre>
     * @param string $dstKey 目标集合键名
     * @param array $zsetKeys 集合键名
     * @param array $zsetKeysWeight 集合键对应的权重
     * @param string $aggregateFunction 合并使用的函数(SUM, MIN, 或 MAX)
     * @return int
     */
    public function zUnion(string $dstKey, Array $zsetKeys, Array $zsetKeysWeight, string $aggregateFunction): int
    {
    
    }

    /**
     * 
     *给有序集合成员增加排序值
     * @example 
     * <pre>
     * $redis->delete('key');
     * $redis->zIncrBy('key', 2.5, 'member1');  // key or member1 didn't exist, so member1's score is to 0
     * // before the increment and now has the value 2.5
     * $redis->zIncrBy('key', 1, 'member1');    // 3.5
     * </pre>
     * @param string $key 目标集合键名
     * @param double $step 增加的步长
     * @param string $member 成员
     * @return float
     */
    public function zIncrBy(string $key, double $step, string $member): float
    {
    
    }

    /**
     * 
     *为某个键设置有效期为某个时间点
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $now = time(NULL);               // current timestamp
     * $redis->expireAt('x', $now + 3); // x will disappear in 3 seconds.
     * sleep(5);                        // wait 5 seconds
     * $redis->get('x');                // will return `FALSE`, as 'x' has expired.
     * </pre>
     * @param string $key 键名
     * @param int $expireTime 到期时间
     * @return bool
     */
    public function expireAt(string $key, int $expireTime): bool
    {
    
    }

    /**
     * 
     *设置键的有效期(毫秒为单位)
     * @example 
     * @param string $key 键名
     * @param int $ttl 有效期(毫秒数)
     * @return bool
     */
    public function pexpire(string $key, int $ttl): bool
    {
    
    }

    /**
     * 
     *为某个键设置有效期为某个时间点(精确到毫秒)
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $now = time(NULL);               // current timestamp
     * $redis->expireAt('x', $now + 3); // x will disappear in 3 seconds.
     * sleep(5);                        // wait 5 seconds
     * $redis->get('x');                // will return `FALSE`, as 'x' has expired.
     * </pre>
     * @param string $key 键名
     * @param int $expireTime 到期时间
     * @return bool
     */
    public function pexpireAt(string $key, int $expireTime): bool
    {
    
    }

    /**
     * 
     *获取字典的某个字段的值
     * @example 
     * @param string $key 键名
     * @param string $field 字段名
     * @return string
     */
    public function hGet(string $key, string $field): string
    {
    
    }

    /**
     * 
     *为字典的字段设置值
     * @example 
     * <pre>
     * $redis->delete('h')
     * $redis->hSet('h', 'key1', 'hello');  // 1, 'key1' => 'hello' in the hash at "h"
     * $redis->hGet('h', 'key1');           // returns "hello"
     * $redis->hSet('h', 'key1', 'plop');   // 0, value was replaced.
     * $redis->hGet('h', 'key1');           // returns "plop"
     * </pre>
     * @param string $key 键名
     * @param string $field 字段名
     * @param string $value 字段值
     * @return int
     */
    public function hSet(string $key, string $field, string $value): int
    {
    
    }

    /**
     * 
     *当字典的字段不存在时，为其设置值
     * @example 
     * <pre>
     * $redis->delete('h')
     * $redis->hSetNx('h', 'key1', 'hello'); // TRUE, 'key1' => 'hello' in the hash at "h"
     * $redis->hSetNx('h', 'key1', 'world'); // FALSE, 'key1' => 'hello' in the hash at "h". No change since the field
     * wasn't replaced.
     * </pre>
     * @param string $key 键名
     * @param string $field 字段名
     * @param string $value 字段值
     * @return bool
     */
    public function hSetNx(string $key, string $field, string $value): bool
    {
    
    }

    /**
     * 
     *删除字典的某个或某些字段
     * @example 
     * <pre>
     * $redis->hMSet('h',
     * array(
     * 'f1' => 'v1',
     * 'f2' => 'v2',
     * 'f3' => 'v3',
     * 'f4' => 'v4',
     * ));
     * var_dump( $redis->hDel('h', 'f1') );        // int(1)
     * var_dump( $redis->hDel('h', 'f2', 'f3') );  // int(2)
     * s
     * var_dump( $redis->hGetAll('h') );
     * //// Output:
     * //  array(1) {
     * //    ["f4"]=> string(2) "v4"
     * //  }
     * </pre>
     * @param string $key 键名
     * @param string|array $fields 字段名
     * @return int
     */
    public function hDel(string $key, string $fields): int
    {
    
    }

    /**
     * 
     *获取字典的字段个数
     * @example 
     * <pre>
     * $redis->delete('h')
     * $redis->hSet('h', 'key1', 'hello');
     * $redis->hSet('h', 'key2', 'plop');
     * $redis->hLen('h'); // returns 2
     * </pre>
     * @param string $key 键名
     * @return int
     */
    public function hLen(string $key): int
    {
    
    }

    /**
     * 
     *获取字典的字段名称列表.
     * @example 
     * <pre>
     * $redis->delete('h');
     * $redis->hSet('h', 'a', 'x');
     * $redis->hSet('h', 'b', 'y');
     * $redis->hSet('h', 'c', 'z');
     * $redis->hSet('h', 'd', 't');
     * var_dump($redis->hKeys('h'));
     * // Output:
     * // array(4) {
     * // [0]=>
     * // string(1) "a"
     * // [1]=>
     * // string(1) "b"
     * // [2]=>
     * // string(1) "c"
     * // [3]=>
     * // string(1) "d"
     * // }
     * // The order is random and corresponds to redis' own internal representation of the set structure.
     * </pre>
     * @param string $key 键名
     * @return array
     */
    public function hKeys(string $key): array
    {
    
    }

    /**
     * 
     *获取字典的字段值列表
     * @example 
     * <pre>
     * $redis->delete('h');
     * $redis->hSet('h', 'a', 'x');
     * $redis->hSet('h', 'b', 'y');
     * $redis->hSet('h', 'c', 'z');
     * $redis->hSet('h', 'd', 't');
     * var_dump($redis->hVals('h'));
     * // Output
     * // array(4) {
     * //   [0]=>
     * //   string(1) "x"
     * //   [1]=>
     * //   string(1) "y"
     * //   [2]=>
     * //   string(1) "z"
     * //   [3]=>
     * //   string(1) "t"
     * // }
     * // The order is random and corresponds to redis' own internal representation of the set structure.
     * </pre>
     * @param string $key 键名
     * @return array
     */
    public function hVals(string $key): array
    {
    
    }

    /**
     * 
     *获取字典所有字段键值对
     * @example 
     * <pre>
     * $redis->delete('h');
     * $redis->hSet('h', 'a', 'x');
     * $redis->hSet('h', 'b', 'y');
     * $redis->hSet('h', 'c', 'z');
     * $redis->hSet('h', 'd', 't');
     * var_dump($redis->hGetAll('h'));
     * // Output:
     * // array(4) {
     * //   ["a"]=>
     * //   string(1) "x"
     * //   ["b"]=>
     * //   string(1) "y"
     * //   ["c"]=>
     * //   string(1) "z"
     * //   ["d"]=>
     * //   string(1) "t"
     * // }
     * // The order is random and corresponds to redis' own internal representation of the set structure.
     * </pre>
     * @param string $key 键名
     * @return array
     */
    public function hGetAll(string $key): array
    {
    
    }

    /**
     * 
     *判断字典的某个字段是否存在.
     * @example 
     * <pre>
     * $redis->hSet('h', 'a', 'x');
     * $redis->hExists('h', 'a');               //  TRUE
     * $redis->hExists('h', 'NonExistingKey');  // FALSE
     * </pre>
     * @param string $key 键名
     * @param string $field 字段名
     * @return bool
     */
    public function hExists(string $key, string $field): bool
    {
    
    }

    /**
     * 
     *为指定字段增加指定的值.
     * @example 
     * <pre>
     * $redis->delete('h');
     * $redis->hIncrBy('h', 'x', 2); // returns 2: h[x] = 2 now.
     * $redis->hIncrBy('h', 'x', 1); // h[x] ← 2 + 1. Returns 3
     * </pre>
     * @param string $key 键名
     * @param string $field 字段名
     * @param int $step 自增步长
     * @return int
     */
    public function hIncrBy(string $key, string $field, int $step): int
    {
    
    }

    /**
     * 
     *为指定字段增加指定的值
     * @example 
     * <pre>
     * $redis = new Redis();
     * $redis->connect('127.0.0.1');
     * $redis->hset('h', 'float', 3);
     * $redis->hset('h', 'int',   3);
     * var_dump( $redis->hIncrByFloat('h', 'float', 1.5) ); // float(4.5)
     * var_dump( $redis->hGetAll('h') );
     * // Output
     * array(2) {
     * ["float"]=>
     * string(3) "4.5"
     * ["int"]=>
     * string(1) "3"
     * }
     * </pre>
     * @param string $key 键名
     * @param string $field 字段名
     * @param double $step 自增步长
     * @return 
     */
    public function hIncrByFloat(string $key, string $field, double $step)
    {
    
    }

    /**
     * 
     *批量设置字典字段的值
     * @example 
     * <pre>
     * $redis->delete('user:1');
     * $redis->hMset('user:1', array('name' => 'Joe', 'salary' => 2000));
     * $redis->hIncrBy('user:1', 'salary', 100); // Joe earns 100 more now.
     * </pre>
     * @param string $key 键名
     * @param array $fields 字段键值对
     * @return bool
     */
    public function hMset(string $key, Array $fields): bool
    {
    
    }

    /**
     * 
     *批量获取字典的字段值
     * @example 
     * @param string $key 键名
     * @param array $fields 字段名列表
     * @return array
     */
    public function hMget(string $key, Array $fields): array
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
     *开启一个管道
     * @example 
     * @return 
     */
    public function pipeline()
    {
    
    }

    /**
     * 
     *观察某个键在其他客户端的变化情况.
     * @example 
     * <pre>
     * $redis->watch('x');
     * // int code here during the execution of which other clients could well modify `x`
     * $ret = $redis->multi()
     * ->incr('x')
     * ->exec();
     * // $ret = FALSE if x has been modified between the call to WATCH and the call to EXEC.
     * </pre>
     * @param string|array $keys 键名
     * @return 
     */
    public function watch(string $keys)
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
     *将消息发布到消息通道(队列).
     * @example $redis->publish('chan-1', 'hello, world!'); // send message.
     * @param string $channel 消息频道
     * @param string $message 消息
     * @return int
     */
    public function publish(string $channel, string $message): int
    {
    
    }

    /**
     * 
     *订阅消息
     * @example 
     * <pre>
     * function f($redis, $chan, $msg) {
     * switch($chan) {
     * case 'chan-1':
     * ...
     * break;
     * case 'chan-2':
     * ...
     * break;
     * case 'chan-2':
     * ...
     * break;
     * }
     * }
     * $redis->subscribe(array('chan-1', 'chan-2', 'chan-3'), 'f'); // subscribe to 3 chans
     * </pre>
     * @param array $channels 订阅的消息频道
     * @param string|array $callback 回调函数名称
     * @param mixed $value 返回值
     * @return mixed
     */
    public function subscribe(Array $channels, string $callback, $value)
    {
    
    }

    /**
     * 
     *通过匹配模式来订阅这些匹配的消息频道
     * @example 
     * <pre>
     * function psubscribe($redis, $pattern, $chan, $msg) {
     * echo "Pattern: $pattern\n";
     * echo "Channel: $chan\n";
     * echo "Payload: $msg\n";
     * }
     * </pre>
     * @param array $patterns 匹配模式
     * @param string|array $callback 回调函数名称
     * @param mixed $value 返回值
     * @return 
     */
    public function psubscribe(Array $patterns, string $callback, $value)
    {
    
    }

    /**
     * 
     *取消订阅
     * @example 
     * @param array $channels 订阅的消息频道
     * @return 
     */
    public function unsubscribe(Array $channels)
    {
    
    }

    /**
     * 
     *通过匹配模式来取消订阅这些匹配的消息频道
     * @example 
     * @param array $patterns 匹配模式
     * @return 
     */
    public function punsubscribe(Array $patterns)
    {
    
    }

    /**
     * 
     *返回当前redis服务器时间.
     * @example 
     * <pre>
     * var_dump( $redis->time() );
     * // array(2) {
     * //   [0] => string(10) "1342364352"
     * //   [1] => string(6) "253002"
     * // }
     * </pre>
     * @return int
     */
    public function time(): int
    {
    
    }

    /**
     * 
     *返回当前连接的服务器的角色，如master、alone、slave、sentinel
     * @example 
     * @return string
     */
    public function role(): string
    {
    
    }

    /**
     * 
     *在脚本子系统上执行redis命令
     * @example 
     * <pre>
     * $redis->script('load', $script);
     * $redis->script('flush');
     * $redis->script('kill');
     * $redis->script('exists', $script1, [$script2, $script3, ...]);
     * </pre>
     * SCRIPT LOAD will return the SHA1 hash of the passed script on success, and FALSE on failure.
     * SCRIPT FLUSH should always return TRUE
     * SCRIPT KILL will return true if a script was able to be killed and false if not
     * SCRIPT EXISTS will return an array with TRUE or FALSE for each passed script
     * @param string $command redis命令
     * @param string|... $script 脚本
     * @return 
     */
    public function script(string $command, string $script)
    {
    
    }

    /**
     * 
     *调试命令(不建议使用)
     * @example 
     * @return 
     */
    public function debug()
    {
    
    }

    /**
     * 
     *将某个键导出为一个二进制数据.
     * @example 
     * <pre>
     * $redis->set('foo', 'bar');
     * $val = $redis->dump('foo'); // $val will be the Redis encoded key value
     * </pre>
     * @param string $key 键名
     * @return string
     */
    public function dump(string $key): string
    {
    
    }

    /**
     * 
     *将dump导出的二进制数据恢复到可读的字符串.
     * @example 
     * <pre>
     * $redis->set('foo', 'bar');
     * $val = $redis->dump('foo');
     * $redis->restore('bar', 0, $val); // The key 'bar', will now be equal to the key 'foo'
     * </pre>
     * @param string $key 键名
     * @param int $ttl 有效期
     * @param string $value dump导出的二进制数据
     * @return 
     */
    public function restore(string $key, int $ttl, string $value)
    {
    
    }

    /**
     * 
     *将某个键迁移到其他的Redis实例中
     * @example 
     * <pre>
     * $redis->migrate('backup', 6379, 'foo', 0, 3600);
     * </pre>
     * @param string $host 目标主机
     * @param int $port 目标主机端口
     * @param string|array $keys 迁移的键
     * @param int $database 目标数据库
     * @param int $timeout 超时时间
     * @param bool $copy 是否复制
     * @param bool $replace 是否替换
     * @return 
     */
    public function migrate(string $host, int $port, string $keys, int $database, int $timeout, bool $copy, bool $replace)
    {
    
    }

    /**
     * 
     *获取上次错误信息
     * @example 
     * <pre>
     * $redis->eval('this-is-not-lua');
     * $err = $redis->getLastError();
     * // "ERR Error compiling script (new function): user_script:1: '=' expected near '-'"
     * </pre>
     * @return string
     */
    public function getLastError(): string
    {
    
    }

    /**
     * 
     *清除上次错误信息
     * @example 
     * <pre>
     * $redis->set('x', 'a');
     * $redis->incr('x');
     * $err = $redis->getLastError();
     * // "ERR value is not an integer or out of range"
     * $redis->clearLastError();
     * $err = $redis->getLastError();
     * // NULL
     * </pre>
     * @return bool
     */
    public function clearLastError(): bool
    {
    
    }

    /**
     * 
     *设置键前缀
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_PREFIX, 'my-prefix:');
     * $redis->_prefix('my-value'); // Will return 'my-prefix:my-value'
     * </pre>
     * @param string $prefix 前缀
     * @return string
     */
    public function _prefix(string $prefix): string
    {
    
    }

    /**
     * 
     *用于手动序列化.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_NONE);
     * $redis->_serialize("foo"); // returns "foo"
     * $redis->_serialize(Array()); // Returns "Array"
     * $redis->_serialize(new stdClass()); // Returns "Object"
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);
     * $redis->_serialize("foo"); // Returns 's:3:"foo";'
     * </pre>
     * @param string $value 被序列化的值
     * @return 
     */
    public function _serialize(string $value)
    {
    
    }

    /**
     * 
     *反序列化方法.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);
     * $redis->_unserialize('a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}'); // Will return Array(1,2,3)
     * </pre>
     * @param string $value 被反序列化的值
     * @return 
     */
    public function _unserialize(string $value)
    {
    
    }

    /**
     * 
     *获取客户端相关参数或进行相关操作
     * @example 
     * @param string $command 命令(CLIENT LIST
CLIENT GETNAME
CLIENT SETNAME [name]
CLIENT KILL [ip:port]
)
     * @param string $args 参数
     * @return 
     */
    public function client(string $command, string $args)
    {
    
    }

    /**
     * 
     *获取所有命令列表
     * @example 
     * @return array
     */
    public function command(): array
    {
    
    }

    /**
     * 
     *扫描键空间.
     * @example 
     * <pre>
     * $iterator = null;
     * while($keys = $redis->scan($iterator)) {
     * foreach($keys as $key) {
     * echo $key . PHP_EOL;
     * }
     * }
     * </pre>
     * @param int|NULL $i_iterator 迭代器
     * @param string $str_pattern 匹配的模式
     * @param int $i_count 每次迭代的长度
     * @return array
     */
    public function scan(int $i_iterator, string $str_pattern, int $i_count): array
    {
    
    }

    /**
     * 
     *扫描hash的键
     * @example 
     * @param string $str_key 键值
     * @param int|NULL $i_iterator 迭代器
     * @param string $str_pattern 匹配的模式
     * @param int $i_count 每次迭代的长度
     * @return 
     */
    public function hscan(string $str_key, int $i_iterator, string $str_pattern, int $i_count)
    {
    
    }

    /**
     * 
     *扫描有序集合的键
     * @example 
     * @param string $str_key 键值
     * @param int|NULL $i_iterator 迭代器
     * @param string $str_pattern 匹配的模式
     * @param int $i_count 每次迭代的长度
     * @return 
     */
    public function zscan(string $str_key, int $i_iterator, string $str_pattern, int $i_count)
    {
    
    }

    /**
     * 
     *扫描集合的键
     * @example 
     * @param string $str_key 键值
     * @param int|NULL $i_iterator 迭代器
     * @param string $str_pattern 匹配的模式
     * @param int $i_count 每次迭代的长度
     * @return 
     */
    public function sscan(string $str_key, int $i_iterator, string $str_pattern, int $i_count)
    {
    
    }

    /**
     * 
     *将所有元素参数添加到 HyperLogLog 数据结构中
     * @example 
     * @param string $key 键名
     * @param string|array|... $element 元素
     * @return 
     */
    public function pfadd(string $key, string $element)
    {
    
    }

    /**
     * 
     *返回给定 HyperLogLog 的基数估算值
     * @example 
     * @param string|array $keys 键名
     * @return 
     */
    public function pfcount(string $keys)
    {
    
    }

    /**
     * 
     *将多个 HyperLogLog 合并为一个 HyperLogLog ，合并后的 HyperLogLog 的基数估算值是通过对所有 给定 HyperLogLog 进行并集计算得出的
     * @example 
     * @param string|array $dstKey 目标键名
     * @param string|array $sourceKeys 源键名
     * @return 
     */
    public function pfmerge(string $dstKey, string $sourceKeys)
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
     *获取或设置配置项.
     * @example 
     * <pre>
     * $redis->config("GET", "*max-*-entries*");
     * $redis->config("SET", "dir", "/var/run/redis/dumps/");
     * </pre>
     * @param string $operation 操作(SET或GET)
     * @param string $key 配置项或配置项匹配模式
     * @param string $value 配置值
     * @return array
     */
    public function config(string $operation, string $key, string $value): array
    {
    
    }

    /**
     * 
     *获取慢操作日志
     * @example 
     * @param string $command 执行的命令
     * @param int $length 获取条目数
     * @return 
     */
    public function slowlog(string $command, int $length)
    {
    
    }

    /**
     * 
     *在redis服务器上执行命令
     * @example 
     * @param string $command 执行的命令
     * @param string|array $args 参数
     * @return 
     */
    public function rawcommand(string $command, string $args)
    {
    
    }

    /**
     * 
     *获取当前连接HOST
     * @example 
     * @return 
     */
    public function getHost()
    {
    
    }

    /**
     * 
     *获取当前连接的端口
     * @example 
     * @return 
     */
    public function getPort()
    {
    
    }

    /**
     * 
     *获取数据库的数量
     * @example 
     * @return 
     */
    public function getDBNum()
    {
    
    }

    /**
     * 
     *获取连接超时时间
     * @example 
     * @return 
     */
    public function getTimeout()
    {
    
    }

    /**
     * 
     *获取读操作超时暗
     * @example 
     * @return 
     */
    public function getReadTimeout()
    {
    
    }

    /**
     * 
     *获取当前正在使用的持久化操作的ID
     * @example 
     * @return 
     */
    public function getPersistentID()
    {
    
    }

    /**
     * 
     *获取验证的字符串
     * @example 
     * @return string
     */
    public function getAuth(): string
    {
    
    }

    /**
     * 
     *是否连接成功
     * @example 
     * @return bool
     */
    public function isConnected(): bool
    {
    
    }

    /**
     * 
     *获取运行模式，如 ATOMIC/MULTI/PIPELINE
     * @example $redis->getMode();
     * @return int
     */
    public function getMode(): int
    {
    
    }

    /**
     * 
     *该命令将阻止当前客户端，直到所有先前的写入命令成功传输并至少由指定数量的从节点进行确认
     * @example $redis->wait(2, 1000);
     * @param int $count 从节点数量
     * @param int $timeout 超时时间
     * @return context
     */
    public function wait(int $count, int $timeout): context
    {
    
    }

    /**
     * 
     *查看订阅与发布系统状态，它由数个不同格式的子命令组成.
     * @example 
     * <pre>
     * $redis->pubsub('channels'); // All channels
     * $redis->pubsub('channels', '*pattern*'); // Just channels matching your pattern
     * $redis->pubsub('numsub', array('chan1', 'chan2')); // Get subscriber counts for 'chan1' and 'chan2'
     * $redis->pubsub('numpat'); // Get the number of pattern subscribers
     * </pre>
     * @param string $subcommand 子命令(可以是channels, numsub, numpat)
     * @param string|array $args 参数
     * @return array|int
     */
    public function pubsub(string $subcommand, string $args): ?array
    {
    
    }

    /**
     * 
     *连接redis服务器或打开一个已经连接的redis服务器
     * @example 
     * @param string $host 主机IP
     * @param int $port 端口
     * @param float $timeout 连接超时时间(以秒为单位)
     * @param mixed $reserved 当使用retry_interval时该值为NULL
     * @param int $retry_interval 重试间隔
     * @param float $read_timeout 读操作超时时间
     * @return 
     */
    public function open(string $host, int $port, float $timeout, $reserved, int $retry_interval, float $read_timeout)
    {
    
    }

    /**
     * 
     *连接redis服务器或打开一个已经连接的redis服务器(长连接)
     * @example 
     * @param string $host 主机IP
     * @param int $port 端口
     * @param float $timeout 连接超时时间(以秒为单位)
     * @param mixed $reserved 当使用retry_interval时该值为NULL
     * @param int $retry_interval 重试间隔
     * @param float $read_timeout 读操作超时时间
     * @return 
     */
    public function popen(string $host, int $port, float $timeout, $reserved, int $retry_interval, float $read_timeout)
    {
    
    }

    /**
     * 
     *返回列表的长度
     * @example 
     * @param string|...|array $key 键名
     * @return int | bool
     */
    public function lLen(string $key): ?int
    {
    
    }

    /**
     * 
     *返回集合的所有成员
     * @example 
     * <pre>
     * $redis->delete('s');
     * $redis->sAdd('s', 'a');
     * $redis->sAdd('s', 'b');
     * $redis->sAdd('s', 'a');
     * $redis->sAdd('s', 'c');
     * var_dump($redis->sMembers('s'));
     * //array(3) {
     * //  [0]=>
     * //  string(1) "c"
     * //  [1]=>
     * //  string(1) "a"
     * //  [2]=>
     * //  string(1) "b"
     * //}
     * // The order is random and corresponds to redis' own internal representation of the set structure.
     * </pre>
     * @param string $key 键名
     * @return array
     */
    public function sGetMembers(string $key): array
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
     *设置键的有效期
     * @example 
     * @param string $key 键名
     * @param int $ttl 有效期(秒数)
     * @return bool
     */
    public function expire(string $key, int $ttl): bool
    {
    
    }

    /**
     * 
     *将两个有序集合的并集存入到一个指定的键中
     * @example 
     * <pre>
     * $redis->delete('k1');
     * $redis->delete('k2');
     * $redis->delete('k3');
     * $redis->delete('ko1');
     * $redis->delete('ko2');
     * $redis->delete('ko3');
     * $redis->zAdd('k1', 0, 'val0');
     * $redis->zAdd('k1', 1, 'val1');
     * $redis->zAdd('k2', 2, 'val2');
     * $redis->zAdd('k2', 3, 'val3');
     * $redis->zUnion('ko1', array('k1', 'k2')); // 4, 'ko1' => array('val0', 'val1', 'val2', 'val3')
     * // Weighted zUnion
     * $redis->zUnion('ko2', array('k1', 'k2'), array(1, 1)); // 4, 'ko2' => array('val0', 'val1', 'val2', 'val3')
     * $redis->zUnion('ko3', array('k1', 'k2'), array(5, 1)); // 4, 'ko3' => array('val0', 'val2', 'val3', 'val1')
     * </pre>
     * @param string $dstKey 目标集合键名
     * @param array $zsetKeys 集合键名
     * @param array $zsetKeysWeight 集合键对应的权重
     * @param string $aggregateFunction 合并使用的函数(SUM, MIN, 或 MAX)
     * @return int
     */
    public function zunionstore(string $dstKey, Array $zsetKeys, Array $zsetKeysWeight, string $aggregateFunction): int
    {
    
    }

    /**
     * 
     *将两个有序集合的交集存入到一个指定的键中
     * @example 
     * <pre>
     * $redis->delete('k1');
     * $redis->delete('k2');
     * $redis->delete('k3');
     * $redis->delete('ko1');
     * $redis->delete('ko2');
     * $redis->delete('ko3');
     * $redis->delete('ko4');
     * $redis->zAdd('k1', 0, 'val0');
     * $redis->zAdd('k1', 1, 'val1');
     * $redis->zAdd('k1', 3, 'val3');
     * $redis->zAdd('k2', 2, 'val1');
     * $redis->zAdd('k2', 3, 'val3');
     * $redis->zInter('ko1', array('k1', 'k2'));               // 2, 'ko1' => array('val1', 'val3')
     * $redis->zInter('ko2', array('k1', 'k2'), array(1, 1));  // 2, 'ko2' => array('val1', 'val3')
     * // Weighted zInter
     * $redis->zInter('ko3', array('k1', 'k2'), array(1, 5), 'min'); // 2, 'ko3' => array('val1', 'val3')
     * $redis->zInter('ko4', array('k1', 'k2'), array(1, 5), 'max'); // 2, 'ko4' => array('val3', 'val1')
     * </pre>
     * @param string $dstKey 目标集合键名
     * @param array $zsetKeys 集合键名
     * @param array $zsetKeysWeight 集合键对应的权重
     * @param string $aggregateFunction 合并使用的函数(SUM, MIN, 或 MAX)
     * @return int
     */
    public function zinterstore(string $dstKey, Array $zsetKeys, Array $zsetKeysWeight, string $aggregateFunction): int
    {
    
    }

    /**
     * 
     *删除有序集合中的某个成员
     * @example 
     * @param string $key 集合键名
     * @param string $member 成员值
     * @return int
     */
    public function zRemove(string $key, string $member): int
    {
    
    }

    /**
     * 
     *删除有序集合中的某个成员
     * @example 
     * @param string $key 集合键名
     * @param string $member 成员值
     * @return int
     */
    public function zRem(string $key, string $member): int
    {
    
    }

    /**
     * 
     *根据排序值范围来删除成员
     * @example 
     * @param string $key 集合键名
     * @param double $start 开始排序值
     * @param double $end 结束排序值
     * @return int
     */
    public function zRemoveRangeByScore(string $key, double $start, double $end): int
    {
    
    }

    /**
     * 
     *根据排序值范围来删除成员
     * @example 
     * @param string $key 集合键名
     * @param double $start 开始排序值
     * @param double $end 结束排序值
     * @return int
     */
    public function zRemRangeByScore(string $key, double $start, double $end): int
    {
    
    }

    /**
     * 
     *根据排序范围删除成员
     * @example 
     * <pre>
     * $redis->zAdd('key', 1, 'one');
     * $redis->zAdd('key', 2, 'two');
     * $redis->zAdd('key', 3, 'three');
     * $redis->zRemRangeByRank('key', 0, 1); // 2
     * $redis->zRange('key', 0, -1, array('withscores' => TRUE)); // array('three' => 3)
     * </pre>
     * @param string $key 集合键名
     * @param double $start 开始排序值
     * @param double $end 结束排序值
     * @return int
     */
    public function zRemRangeByRank(string $key, double $start, double $end): int
    {
    
    }

    /**
     * 
     *获取有序集合的成员数
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zCard('key');            // 3
     * </pre>
     * @param string $key 集合键名
     * @return int
     */
    public function zSize(string $key): int
    {
    
    }

    /**
     * 
     *获取一个键值的子字符串
     * @example 
     * <pre>
     * $redis->set('key', 'string value');
     * $redis->getRange('key', 0, 5);   // 'string'
     * $redis->getRange('key', -5, -1); // 'value'
     * </pre>
     * @param string $key 键名
     * @param int $start 开始位置
     * @param int $end 结束位置
     * @return string
     */
    public function substr(string $key, int $start, int $end): string
    {
    
    }

    /**
     * 
     *给键重命名
     * @example 
     * @param string $srcKey 旧键名
     * @param string $dstKey 新键名
     * @return bool
     */
    public function rename(string $srcKey, string $dstKey): bool
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
     *从列表中删除指定值的元素。 如果count为零，则删除所有匹配的元素。 如果计数是负数，则元素从尾部移到头部。
     * @example 
     * @param string $key 键名
     * @param string $value 元素值
     * @param int $count 删除的个数
     * @return int | bool
     */
    public function lrem(string $key, string $value, int $count): ?int
    {
    
    }

    /**
     * 
     *删除指定范围外的其他元素
     * @example 
     * @param string $key 键名
     * @param int $start 开始索引
     * @param int $end 结束索引
     * @return array | bool
     */
    public function ltrim(string $key, int $start, int $end): ?array
    {
    
    }

    /**
     * 
     *获取列表中指定索引的值
     * @example 
     * @param string $key 键名
     * @param int $index 索引值
     * @return string | bool
     */
    public function lindex(string $key, int $index): ?string
    {
    
    }

    /**
     * 
     *获取列表指定范围的值
     * @example 
     * @param string $key 键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @return array
     */
    public function lrange(string $key, int $start, int $end): array
    {
    
    }

    /**
     * 
     *返回集合的元素个数
     * @example 
     * @param string $key 键名
     * @return int
     */
    public function scard(string $key): int
    {
    
    }

    /**
     * 
     *删除集合元素
     * @example 
     * @param string $key 键名
     * @param string|... $member 成员
     * @return int
     */
    public function srem(string $key, string $member): int
    {
    
    }

    /**
     * 
     *是否包含某个成员
     * @example 
     * @param string $key 键名
     * @param string $member 成员值
     * @return bool
     */
    public function sismember(string $key, string $member): bool
    {
    
    }

    /**
     * 
     *获取有序集合中指定范围的成员(倒序排列)
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zRevRange('key', 0, -1); // array('val10', 'val2', 'val0')
     * // with scores
     * $redis->zRevRange('key', 0, -1, true); // array('val10' => 10, 'val2' => 2, 'val0' => 0)
     * </pre>
     * @param string $key 集合键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @param bool $withScores 是否返回成员的排序值
     * @return array
     */
    public function zReverseRange(string $key, int $start, int $end, bool $withScores): array
    {
    
    }

    /**
     * 
     *向redis发送一个字符串，而且redis服务器将返回一个相同的字符串
     * @example 
     * @param string $str 发送的字符串
     * @return string
     */
    public function sendEcho(string $str): string
    {
    
    }

    /**
     * 
     *执行lua脚本
     * @example 
     * @param string $script 脚本
     * @param array $args 脚本参数
     * @param int $num_keys 应该进入KEYS数组的参数个数
     * @return mixed
     */
    public function evaluate(string $script, Array $args, int $num_keys)
    {
    
    }

    /**
     * 
     *执行lua脚本
     * @example 
     * @param string $script 脚本
     * @param array $args 脚本参数
     * @param int $num_keys 应该进入KEYS数组的参数个数
     * @return mixed
     */
    public function eval(string $script, Array $args, int $num_keys)
    {
    
    }

    /**
     * 
     *从脚本的SHA1散列而不是脚本本身执行LUA脚本
     * @example $script = 'return 1';
     * $sha = $redis->script('load', $script);
     * $redis->evalSha($sha); // Returns 1
     * @param string $script_sha 脚本的散列值
     * @param array $args 脚本参数
     * @param int $num_keys 应该进入KEYS数组的参数个数
     * @return 
     */
    public function evaluateSha(string $script_sha, Array $args, int $num_keys)
    {
    
    }

    /**
     * 
     *从脚本的SHA1散列而不是脚本本身执行LUA脚本
     * @example $script = 'return 1';
     * $sha = $redis->script('load', $script);
     * $redis->evalSha($sha); // Returns 1
     * @param string $script_sha 脚本的散列值
     * @param array $args 脚本参数
     * @param int $num_keys 应该进入KEYS数组的参数个数
     * @return 
     */
    public function evalSha(string $script_sha, Array $args, int $num_keys)
    {
    
    }

}

