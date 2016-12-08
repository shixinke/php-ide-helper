<?php
/**
* Redis自动补全类(基于最新的3.0.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*redisCluster
*/
class RedisCluster
{
    /**     
    *
    */
    const REDIS_NOT_FOUND    =    0;

    /**     
    *
    */
    const REDIS_STRING    =    1;

    /**     
    *
    */
    const REDIS_SET    =    2;

    /**     
    *
    */
    const REDIS_LIST    =    3;

    /**     
    *
    */
    const REDIS_ZSET    =    4;

    /**     
    *
    */
    const REDIS_HASH    =    5;

    /**     
    *
    */
    const ATOMIC    =    0;

    /**     
    *
    */
    const MULTI    =    1;

    /**     
    *
    */
    const OPT_SERIALIZER    =    1;

    /**     
    *
    */
    const OPT_PREFIX    =    2;

    /**     
    *
    */
    const OPT_READ_TIMEOUT    =    3;

    /**     
    *
    */
    const SERIALIZER_NONE    =    0;

    /**     
    *
    */
    const SERIALIZER_PHP    =    1;

    /**     
    *
    */
    const OPT_SCAN    =    4;

    /**     
    *
    */
    const SCAN_RETRY    =    1;

    /**     
    *
    */
    const SCAN_NORETRY    =    0;

    /**     
    *
    */
    const OPT_SLAVE_FAILOVER    =    5;

    /**     
    *
    */
    const FAILOVER_NONE    =    0;

    /**     
    *
    */
    const FAILOVER_ERROR    =    1;

    /**     
    *
    */
    const FAILOVER_DISTRIBUTE    =    2;

    /**     
    *
    */
    const AFTER    =    'after';

    /**     
    *
    */
    const BEFORE    =    'before';

    /**
     * 
     *Creates a RedisCluster client
     * @example $redis = new RedisCluster(null, array('127.0.0.1:6379', '127.0.0.1:6380'));
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 
     *Disconnects from the Redis instance, except when pconnect is used.
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *Get the value related to the specified key
     * @example $redis->get('key');
     * @return string|bool:
     */
    public function get()
    {
    }

    /**
     * 
     *Set the string value in argument as value of the key.
     * @example $redis->set('key', 'value');
     * @return bool:
     */
    public function set()
    {
    }

    /**
     * 
     *Returns the values of all specified keys.
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
     * @return 
     */
    public function mget()
    {
    }

    /**
     * 
     *Sets multiple key-value pairs in one atomic command.
     *MSETNX only returns TRUE if all the keys were set (see SETNX).
     * @example 
     * <pre>
     * $redis->mset(array('key0' => 'value0', 'key1' => 'value1'));
     * var_dump($redis->get('key0'));
     * var_dump($redis->get('key1'));
     * // Output:
     * // string(6) "value0"
     * // string(6) "value1"
     * </pre>
     * @return bool
     */
    public function mset()
    {
    }

    /**
     * 
     *
     * @example 
     * @return int
     */
    public function msetnx()
    {
    }

    /**
     * 
     *Remove specified keys.
     * @example 
     * <pre>
     * $redis->set('key1', 'val1');
     * $redis->set('key2', 'val2');
     * $redis->set('key3', 'val3');
     * $redis->set('key4', 'val4');
     * $redis->delete('key1', 'key2');          // return 2
     * $redis->delete(array('key3', 'key4'));   // return 2
     * </pre>
     * @return int
     */
    public function del()
    {
    }

    /**
     * 
     *Set the string value in argument as value of the key, with a time to live.
     * @example $redis->setex('key', 3600, 'value'); // sets key �� value, with 1h TTL.
     * @return bool:
     */
    public function setex()
    {
    }

    /**
     * 
     *Set the string value in argument as value of the key, with a time to live.
     * @example 
     * @return bool:
     */
    public function psetex()
    {
    }

    /**
     * 
     *Set the string value in argument as value of the key if the key doesn't already exist in the database.
     * @example 
     * <pre>
     * $redis->setnx('key', 'value');   // return TRUE
     * $redis->setnx('key', 'value');   // return FALSE
     * </pre>
     * @return bool:
     */
    public function setnx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getset()
    {
    }

    /**
     * 
     *Verify if the specified key exists.
     * @example 
     * <pre>
     * $redis->set('key', 'value');
     * $redis->exists('key');               //  TRUE
     * $redis->exists('NonExistingKey');    // FALSE
     * </pre>
     * @return bool:
     */
    public function exists()
    {
    }

    /**
     * 
     *Returns the keys that match a certain pattern.
     * @example 
     * <pre>
     * $allKeys = $redis->keys('*');   // all keys will match this.
     * $keyWithUserPrefix = $redis->keys('user*');
     * </pre>
     * @return array
     */
    public function keys()
    {
    }

    /**
     * 
     *Returns the type of data pointed by a given key.
     * @example $redis->type('key');
     * @return -
     */
    public function type()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lpop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rpop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lset()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function spop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lpush()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rpush()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function blpop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function brpop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rpushx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lpushx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function linsert()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lindex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lrem()
    {
    }

    /**
     * 
     *A blocking version of rpoplpush, with an integral timeout in the third parameter.
     * @example 
     * @return string
     */
    public function brpoplpush()
    {
    }

    /**
     * 
     *Pops a value from the tail of a list, and pushes it to the front of another list.
     *Also return this value.
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
     * @return string
     */
    public function rpoplpush()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function llen()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function scard()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function smembers()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sismember()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sadd()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function saddarray()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function srem()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sunion()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sunionstore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sinter()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sinterstore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sdiff()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sdiffstore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function srandmember()
    {
    }

    /**
     * 
     *Get the length of a string value.
     * @example 
     * <pre>
     * $redis->set('key', 'value');
     * $redis->strlen('key'); // 5
     * </pre>
     * @return 
     */
    public function strlen()
    {
    }

    /**
     * 
     *Remove the expiration timer from a key.
     * @example $redis->persist('key');
     * @return bool:
     */
    public function persist()
    {
    }

    /**
     * 
     *Returns the time to live left for a given key, in seconds. If the key doesn't exist, FALSE is returned.
     * @example $redis->ttl('key');
     * @return int,
     */
    public function ttl()
    {
    }

    /**
     * 
     *Returns a time to live left for a given key, in milliseconds.
     * @example $redis->pttl('key');
     * @return int
     */
    public function pttl()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zcard()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zcount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zremrangebyscore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zscore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zadd()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zincrby()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hlen()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hkeys()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hvals()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hget()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hgetall()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hexists()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hincrby()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hset()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hsetnx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hmget()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hmset()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hdel()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hincrbyfloat()
    {
    }

    /**
     * 
     *Dump a key out of a redis database, the value of which can later be passed into redis using the RESTORE command.
     *The data that comes out of DUMP is a binary representation of the key as Redis stores it.
     * @example 
     * <pre>
     * $redis->set('foo', 'bar');
     * $val = $redis->dump('foo'); // $val will be the Redis encoded key value
     * </pre>
     * @return string
     */
    public function dump()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrank()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrevrank()
    {
    }

    /**
     * 
     *Increment the number stored at key by one.
     * @example 
     * <pre>
     * $redis->incr('key1'); // key1 didn't exists, set to 0 before the increment and now has the value 1
     * $redis->incr('key1'); // 2
     * $redis->incr('key1'); // 3
     * $redis->incr('key1'); // 4
     * </pre>
     * @return int
     */
    public function incr()
    {
    }

    /**
     * 
     *Decrement the number stored at key by one.
     * @example 
     * <pre>
     * $redis->decr('key1'); // key1 didn't exists, set to 0 before the increment and now has the value -1
     * $redis->decr('key1'); // -2
     * $redis->decr('key1'); // -3
     * </pre>
     * @return int
     */
    public function decr()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function incrby()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function decrby()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function incrbyfloat()
    {
    }

    /**
     * 
     *Sets an expiration date (a timeout) on an item.
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $redis->setTimeout('x', 3);  // x will disappear in 3 seconds.
     * sleep(5);                    // wait 5 seconds
     * $redis->get('x');            // will return `FALSE`, as 'x' has expired.
     * </pre>
     * @return bool:
     */
    public function expire()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pexpire()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function expireat()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pexpireat()
    {
    }

    /**
     * 
     *Append specified string to the string stored in specified key.
     * @example 
     * <pre>
     * $redis->set('key', 'value1');
     * $redis->append('key', 'value2'); // 12
     * $redis->get('key');              // 'value1value2'
     * </pre>
     * @return int:
     */
    public function append()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getbit()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setbit()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitpos()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitcount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lget()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getrange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function ltrim()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lrange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zremrangebyrank()
    {
    }

    /**
     * 
     *Publish messages to channels. Warning: this function will probably change in the future.
     * @example $redis->publish('chan-1', 'hello, world!'); // send message.
     * @return int
     */
    public function publish()
    {
    }

    /**
     * 
     *Renames a key.
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $redis->rename('x', 'y');
     * $redis->get('y');   // �� 42
     * $redis->get('x');   // �� `FALSE`
     * </pre>
     * @return bool:
     */
    public function rename()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function renamenx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pfcount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pfadd()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pfmerge()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setrange()
    {
    }

    /**
     * 
     *Restore a key from the result of a DUMP operation.
     * @example 
     * <pre>
     * $redis->set('foo', 'bar');
     * $val = $redis->dump('foo');
     * $redis->restore('bar', 0, $val); // The key 'bar', will now be equal to the key 'foo'
     * </pre>
     * @return 
     */
    public function restore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function smove()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrevrange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrangebyscore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrevrangebyscore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrangebylex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrevrangebylex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zlexcount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zremrangebylex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zunionstore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zinterstore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zrem()
    {
    }

    /**
     * 
     *Sort
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
     * @return An
     */
    public function sort()
    {
    }

    /**
     * 
     *Describes the object pointed to by a key.
     *The information to retrieve (string) and the key (string).
     *Info can be one of the following:
     *- "encoding"
     *- "refcount"
     *- "idletime"
     * @example 
     * <pre>
     * $redis->object("encoding", "l"); // �� ziplist
     * $redis->object("refcount", "l"); // �� 1
     * $redis->object("idletime", "l"); // �� 400 (in seconds, with a precision of 10 seconds).
     * </pre>
     * @return string
     */
    public function object()
    {
    }

    /**
     * 
     *Subscribe to channels. Warning: this function will probably change in the future.
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
     * @return 
     */
    public function subscribe()
    {
    }

    /**
     * 
     *Subscribe to channels by pattern
     * @example 
     * <pre>
     * function psubscribe($redis, $pattern, $chan, $msg) {
     * echo "Pattern: $pattern\n";
     * echo "Channel: $chan\n";
     * echo "Payload: $msg\n";
     * }
     * </pre>
     * @return 
     */
    public function psubscribe()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unsubscribe()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function punsubscribe()
    {
    }

    /**
     * 
     *Evaluate a LUA script serverside
     * @example 
     * <pre>
     * $redis->eval("return 1"); // Returns an integer: 1
     * $redis->eval("return {1,2,3}"); // Returns Array(1,2,3)
     * $redis->del('mylist');
     * $redis->rpush('mylist','a');
     * $redis->rpush('mylist','b');
     * $redis->rpush('mylist','c');
     * // Nested response:  Array(1,2,3,Array('a','b','c'));
     * $redis->eval("return {1,2,3,redis.call('lrange','mylist',0,-1)}}");
     * </pre>
     * @return message
     */
    public function eval()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function evalsha()
    {
    }

    /**
     * 
     *Scan the keyspace for keys.
     * @example 
     * @param  mixed $i_iterator 
     * @param  mixed $str_node 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return array|bool
     */
    public function scan($i_iterator, $str_node, $str_pattern, $i_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $str_key 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function sscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $str_key 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function zscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $str_key 
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return 
     */
    public function hscan($str_key, $i_iterator, $str_pattern, $i_count)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getmode()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getlasterror()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function clearlasterror()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getoption()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setoption()
    {
    }

    /**
     * 
     *A utility method to prefix the value with the prefix setting for phpredis.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_PREFIX, 'my-prefix:');
     * $redis->_prefix('my-value'); // Will return 'my-prefix:my-value'
     * </pre>
     * @return string
     */
    public function _prefix()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function _serialize()
    {
    }

    /**
     * 
     *A utility method to unserialize data with whatever serializer is set up.  If there is no serializer set, the
     *value will be returned unchanged.  If there is a serializer set up, and the data passed in is malformed, an
     *exception will be thrown. This can be useful if phpredis is serializing values, and you return something from
     *redis in a LUA script that is serialized.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);
     * $redis->_unserialize('a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}'); // Will return Array(1,2,3)
     * </pre>
     * @return 
     */
    public function _unserialize()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function _masters()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function _redir()
    {
    }

    /**
     * 
     *Enter and exit transactional mode.
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
     * @return Once
     */
    public function multi()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function exec()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function discard()
    {
    }

    /**
     * 
     *Watches a key for modifications by another client. If the key is modified between WATCH and EXEC,
     *the MULTI/EXEC transaction will fail (return FALSE). unwatch cancels all the watching of all keys by this client.
     * @example 
     * <pre>
     * $redis->watch('x');
     * // long code here during the execution of which other clients could well modify `x`
     * $ret = $redis->multi()
     * ->incr('x')
     * ->exec();
     * // $ret = FALSE if x has been modified between the call to WATCH and the call to EXEC.
     * </pre>
     * @return 
     */
    public function watch()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unwatch()
    {
    }

    /**
     * 
     *Performs a synchronous save.
     * @example $redis->save();
     * @return If
     */
    public function save()
    {
    }

    /**
     * 
     *Performs a background save.
     * @example $redis->bgSave();
     * @return If
     */
    public function bgsave()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flushdb()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flushall()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function dbsize()
    {
    }

    /**
     * 
     *Starts the background rewrite of AOF (Append-Only File)
     * @example $redis->bgrewriteaof();
     * @return bool:
     */
    public function bgrewriteaof()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lastsave()
    {
    }

    /**
     * 
     *Returns an associative array of strings and integers
     * @example 
     * <pre>
     * $redis->info();
     * or
     * $redis->info("COMMANDSTATS"); //Information on the commands that have been run (>=2.6 only)
     * $redis->info("CPU"); // just CPU information from Redis INFO
     * </pre>
     * @return 
     */
    public function info()
    {
    }

    /**
     * 
     *Provide information on the role of a Redis instance in the context of replication, by returning if the instance is currently a master, slave, or sentinel.
     * @example 
     * <pre>
     * $role = $redis->role();
     * </pre>
     * @return string:
     */
    public function role()
    {
    }

    /**
     * 
     *Return the current Redis server time.
     * @example 
     * @return unix
     */
    public function time()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function randomkey()
    {
    }

    /**
     * 
     *Check the current connection status
     * @example 
     * @return string
     */
    public function ping()
    {
    }

    /**
     * 
     *echo string $string Sends a string to Redis, which replies with the same string
     * @example $redis->echo('eeee');
     * @return 
     */
    public function echo()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function command()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rawcommand()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function cluster()
    {
    }

    /**
     * 
     *Issue the CLIENT command with various arguments.
     * @example 
     * @return 
     */
    public function client()
    {
    }

    /**
     * 
     *Get or Set the redis config keys.
     * @example 
     * <pre>
     * $redis->config("GET", "*max-*-entries*");
     * $redis->config("SET", "dir", "/var/run/redis/dumps/");
     * </pre>
     * @return array
     */
    public function config()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function pubsub()
    {
    }

    /**
     * 
     *Execute the Redis SCRIPT command to perform various operations on the scripting subsystem.
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
     * @return 
     */
    public function script()
    {
    }

    /**
     * 
     *Access the Redis slow log.
     * @example 
     * @return 
     */
    public function slowlog()
    {
    }

}

