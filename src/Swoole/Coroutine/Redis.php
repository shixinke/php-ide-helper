<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*协程版redis客户端
*/
namespace Swoole\Coroutine;
class Redis
{
    /**
     * @var array $setting 
     * 用于初始化的配置选项
     * @access public
     */
    public $setting    =    array();

    /**
     * @var string $host 
     * 配置的主机
     * @access public
     */
    public $host;

    /**
     * @var int $port 
     * 配置的端口号
     * @access public
     */
    public $port;

    /**
     * @var int $sock 
     * 连接句柄
     * @access public
     */
    public $sock;

    /**
     * @var bool $connected 
     * 当前Redis客户端是否连接到了服务器
     * @access public
     */
    public $connected    =    false;

    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var string $errMsg 
     * 错误信息
     * @access public
     */
    public $errMsg    =    '';

    /**
     * 
     *初始化函数
     * @example 
     * @return 
     */
    public function __construct()
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

    /**
     * 
     *连接redis服务器
     * @example 
     * @param string $host 主机
     * @param int $port 端口
     * @return 
     */
    public function connect(string $host, int $port)
    {
    
    }

    /**
     * 
     *设置是否延迟
     * @example 
     * @param boolean $defer bool值，为true时，表明该Client要延迟收包，为false时，表明该Client非延迟收包，默认值为true
     * @return 
     */
    public function setDefer(bool $defer)
    {
    
    }

    /**
     * 
     *返回当前设置的defer
     * @example 
     * @return boolean
     */
    public function getDefer(): boolean
    {
    
    }

    /**
     * 
     *从服务器端接收数据
     * @example 
     * @param int $size 接收数据的缓存区最大长度，此参数不要设置过大，否则会占用较大内存
     * @param boolean $flag 是否等待所有数据到达后返回
     * @return string
     */
    public function recv(int $size, bool $flag): string
    {
    
    }

    /**
     * 
     *关闭连接
     * @example 
     * @return 
     */
    public function close()
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
     * @param boolean|int $value 新值
     * @return int
     */
    public function setBit(string $key, int $offset, int $value): int
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
    public function setEx(string $key, string $value, int $ttl): bool
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
    public function psetEx(string $key, string $value, int $ttl)
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
     * @return boolean
     */
    public function lSet(string $key, int $index, string $value): boolean
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
    public function mGet(Array $keys)
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
     *批量设置字典字段的值
     * @example 
     * <pre>
     * $redis->delete('user:1');
     * $redis->hMset('user:1', array('name' => 'Joe', 'salary' => 2000));
     * $redis->hIncrBy('user:1', 'salary', 100); // Joe earns 100 more now.
     * </pre>
     * @param string $key 键名
     * @param array $fields 字段键值对
     * @return boolean
     */
    public function hMSet(string $key, Array $fields): boolean
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
    public function mSet(Array $values): bool
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
    public function mSetNx(Array $values): bool
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
     *获取键值的长度
     * @example 
     * <pre>
     * $redis->set('key', 'value');
     * $redis->strlen('key'); // 5
     * </pre>
     * @param string $key 键名
     * @return int
     */
    public function strLen(string $key): int
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
     *阻塞执行rpoplpush
     * @example 
     * @param string $srcKey 要删除元素的队列键名
     * @param string $dstKey 要插入元素的队列的键名
     * @return string
     */
    public function bRPopLPush(string $srcKey, string $dstKey): string
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
     *调试命令(不建议使用)
     * @example 
     * @return 
     */
    public function debug()
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
     *给键重命名
     * @example 
     * @param string $srcKey 旧键名
     * @param string $dstKey 新键名
     * @return boolean
     */
    public function renameKey(string $srcKey, string $dstKey): boolean
    {
    
    }

    /**
     * 
     *给键重命名
     * @example 
     * @param string $srcKey 旧键名
     * @param string $dstKey 新键名
     * @return boolean
     */
    public function rename(string $srcKey, string $dstKey): boolean
    {
    
    }

    /**
     * 
     *当目标键名不存在时，给键重命名
     * @example 
     * @param string $srcKey 旧键名
     * @param string $dstKey 新键名
     * @return boolean
     */
    public function renameNx(string $srcKey, string $dstKey): boolean
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
     *检查当前redis连接状态(成功时返回PONG)
     * @example 
     * @return string
     */
    public function ping(): string
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
     *观察某个键在其他客户端的变化情况.
     * @example 
     * <pre>
     * $redis->watch('x');
     * // long code here during the execution of which other clients could well modify `x`
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
     *开启后台写AOF日志操作
     * @example $redis->bgrewriteaof();
     * @return bool
     */
    public function bgrewriteaof(): bool
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
     *当键不存在时设置其值
     * @example 
     * $redis->setnx('key', 'value');
     * 
     * @param string $key 设置的缓存键
     * @param string $value 设置的缓存值
     * @return bool
     */
    public function setNx(string $key, string $value): bool
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
     *是否包含某个成员
     * @example 
     * @param string $key 键名
     * @param string $member 成员值
     * @return boolean
     */
    public function sContains(string $key, string $member): boolean
    {
    
    }

    /**
     * 
     *是否包含某个成员
     * @example 
     * @param string $key 键名
     * @param string $member 成员值
     * @return boolean
     */
    public function sismember(string $key, string $member): boolean
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
     *批量获取字典的字段值
     * @example 
     * @param string $key 键名
     * @param array $fields 字段名列表
     * @return array
     */
    public function hMGet(string $key, Array $fields): array
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
     * @param boolean $withScores 是否返回成员的排序值
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
     * @param boolean $withScores 是否返回成员的排序值
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
     *获取列表中指定索引的值
     * @example 
     * @param string $key 键名
     * @param int $index 索引值
     * @return string | boolean
     */
    public function lGet(string $key, int $index): ?string
    {
    
    }

    /**
     * 
     *获取列表中指定索引的值
     * @example 
     * @param string $key 键名
     * @param int $index 索引值
     * @return string | boolean
     */
    public function lIndex(string $key, int $index): ?string
    {
    
    }

    /**
     * 
     *设置键的有效期
     * @example 
     * @param string $key 键名
     * @param int $ttl 有效期(秒数)
     * @return boolean
     */
    public function setTimeout(string $key, int $ttl): boolean
    {
    
    }

    /**
     * 
     *设置键的有效期
     * @example 
     * @param string $key 键名
     * @param int $ttl 有效期(秒数)
     * @return boolean
     */
    public function expire(string $key, int $ttl): boolean
    {
    
    }

    /**
     * 
     *设置键的有效期(毫秒为单位)
     * @example 
     * @param string $key 键名
     * @param int $ttl 有效期(毫秒数)
     * @return boolean
     */
    public function pexpire(string $key, int $ttl): boolean
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
     *删除指定范围外的其他元素
     * @example 
     * @param string $key 键名
     * @param int $start 开始索引
     * @param int $end 结束索引
     * @return array | boolean
     */
    public function listTrim(string $key, int $start, int $end): ?array
    {
    
    }

    /**
     * 
     *删除指定范围外的其他元素
     * @example 
     * @param string $key 键名
     * @param int $start 开始索引
     * @param int $end 结束索引
     * @return array | boolean
     */
    public function ltrim(string $key, int $start, int $end): ?array
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
     *获取列表指定范围的值
     * @example 
     * @param string $key 键名
     * @param int $start 索引开始值
     * @param int $end 索引结束值
     * @return array
     */
    public function lRange(string $key, int $start, int $end): array
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
    public function lRem(string $key, string $value, int $count): ?int
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
     *统计字符串的位数
     * @example 
     * @param string $key 键名
     * @return int
     */
    public function bitCount(string $key): int
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
    public function bitOp(string $operation, string $dstKey, string $key1, string $key2, string $keyN): int
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
     * @return array | boolean
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
    public function pSubscribe(Array $patterns, string $callback, $value)
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
     *执行事务
     * @example 
     * @return 
     */
    public function exec()
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
    public function evalSha(string $script_sha, Array $args, int $num_keys)
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
     *序列化函数调用的魔术方法(在PHP进行序列化时，serialize() 检查类中是否有 __sleep() ,如果有，则该函数将在任何序列化之前运行。该函数必须返回一个需要进行序列化保存的成员属性数组，并且只序列化该函数返回的这些成员属性. 该函数有两个作用: 第一. 在序列化之前,关闭对象可能具有的任何数据库连接等. 第二. 指定对象中需要被序列化的成员属性,如果某个属性比较大而不需要储存下来,可以不把它写进__sleep要返回的数组中,这样该属性就不会被序列化)
     * @example 
     * @return 
     */
    public function __sleep()
    {
    
    }

    /**
     * 
     *反序列化函数调用的魔术方法(unserialize() 从字节流中创建了一个对象之后,马上检查是否具有__wakeup 的函数的存在。如果存在，__wakeup 立刻被调用。使用 __wakeup 的目的是重建在序列化中可能丢失的任何数据库连接以及处理其它重新初始化的任务)
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    
    }

}

