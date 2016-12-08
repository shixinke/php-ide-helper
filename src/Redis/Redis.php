<?php
/**
* Redis自动补全类(基于最新的3.0.0版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
class Redis
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
    const PIPELINE    =    2;

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
    const AFTER    =    'after';

    /**     
    *
    */
    const BEFORE    =    'before';

    /**
     * 
     *Creates a Redis client
     * @example $redis = new Redis();
     * @return 
     */
    public function __construct()
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

    /**
     * 
     *Connects to a Redis instance.
     * @example 
     * <pre>
     * $redis->connect('127.0.0.1', 6379);
     * $redis->connect('127.0.0.1');            // port 6379 by default
     * $redis->connect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout.
     * $redis->connect('/tmp/redis.sock');      // unix domain socket.
     * </pre>
     * @return bool
     */
    public function connect()
    {
    }

    /**
     * 
     *Connects to a Redis instance or reuse a connection already established with pconnect/popen.
     * @example 
     * <pre>
     * $redis->connect('127.0.0.1', 6379);
     * $redis->connect('127.0.0.1');            // port 6379 by default
     * $redis->connect('127.0.0.1', 6379, 2.5); // 2.5 sec timeout.
     * $redis->connect('/tmp/redis.sock');      // unix domain socket.
     * </pre>
     * @return bool
     */
    public function pconnect()
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
     *Check the current connection status
     * @example 
     * @return string
     */
    public function ping()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function echo()
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
     * @example 
     * @return bool
     */
    public function set()
    {
    }

    /**
     * 
     *Set the string value in argument as value of the key, with a time to live.
     * @example $redis->setex('key', 3600, 'value'); // sets key → value, with 1h TTL.
     * @return bool:
     */
    public function setex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
     *Sets a value and returns the previous entry at that key.
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $exValue = $redis->getSet('x', 'lol');   // return '42', replaces x by 'lol'
     * $newValue = $redis->get('x')'            // return 'lol'
     * </pre>
     * @return string
     */
    public function getSet()
    {
    }

    /**
     * 
     *Returns a random key.
     * @example 
     * <pre>
     * $key = $redis->randomKey();
     * $surprise = $redis->get($key);  // who knows what's in there.
     * </pre>
     * @return string:
     */
    public function randomKey()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function renameKey()
    {
    }

    /**
     * 
     *Renames a key.
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $redis->rename('x', 'y');
     * $redis->get('y');   // → 42
     * $redis->get('x');   // → `FALSE`
     * </pre>
     * @return bool:
     */
    public function renameNx()
    {
    }

    /**
     * 
     *Get the values of all the specified keys. If one or more keys dont exist, the array will contain FALSE at the
     *position of the key.
     * @example 
     * <pre>
     * $redis->set('key1', 'value1');
     * $redis->set('key2', 'value2');
     * $redis->set('key3', 'value3');
     * $redis->getMultiple(array('key1', 'key2', 'key3')); // array('value1', 'value2', 'value3');
     * $redis->getMultiple(array('key0', 'key1', 'key5')); // array(`FALSE`, 'value2', `FALSE`);
     * </pre>
     * @return array
     */
    public function getMultiple()
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
     *
     * @example 
     * @return int
     */
    public function delete()
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
     *Increment the number stored at key by one. If the second argument is filled, it will be used as the integer
     *value of the increment.
     * @example 
     * <pre>
     * $redis->incr('key1');        // key1 didn't exists, set to 0 before the increment and now has the value 1
     * $redis->incr('key1');        // 2
     * $redis->incr('key1');        // 3
     * $redis->incr('key1');        // 4
     * $redis->incrBy('key1', 10);  // 14
     * </pre>
     * @return int
     */
    public function incrBy()
    {
    }

    /**
     * 
     *Increment the float value of a key by the given amount
     * @example 
     * <pre>
     * $redis = new Redis();
     * $redis->connect('127.0.0.1');
     * $redis->set('x', 3);
     * var_dump( $redis->incrByFloat('x', 1.5) );   // float(4.5)
     * // ! SIC
     * var_dump( $redis->get('x') );                // string(3) "4.5"
     * </pre>
     * @return 
     */
    public function incrByFloat()
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
     *Decrement the number stored at key by one. If the second argument is filled, it will be used as the integer
     *value of the decrement.
     * @example 
     * <pre>
     * $redis->decr('key1');        // key1 didn't exists, set to 0 before the increment and now has the value -1
     * $redis->decr('key1');        // -2
     * $redis->decr('key1');        // -3
     * $redis->decrBy('key1', 10);  // -13
     * </pre>
     * @return int
     */
    public function decrBy()
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
     *Return a substring of a larger string
     * @example 
     * <pre>
     * $redis->set('key', 'string value');
     * $redis->getRange('key', 0, 5);   // 'string'
     * $redis->getRange('key', -5, -1); // 'value'
     * </pre>
     * @return string:
     */
    public function getRange()
    {
    }

    /**
     * 
     *Changes a substring of a larger string.
     * @example 
     * <pre>
     * $redis->set('key', 'Hello world');
     * $redis->setRange('key', 6, "redis"); // returns 11
     * $redis->get('key');                  // "Hello redis"
     * </pre>
     * @return string:
     */
    public function setRange()
    {
    }

    /**
     * 
     *Return a single bit out of a larger string
     * @example 
     * <pre>
     * $redis->set('key', "\x7f");  // this is 0111 1111
     * $redis->getBit('key', 0);    // 0
     * $redis->getBit('key', 1);    // 1
     * </pre>
     * @return int:
     */
    public function getBit()
    {
    }

    /**
     * 
     *Changes a single bit of a string.
     * @example 
     * <pre>
     * $redis->set('key', "*");     // ord("*") = 42 = 0x2f = "0010 1010"
     * $redis->setBit('key', 5, 1); // returns 0
     * $redis->setBit('key', 7, 1); // returns 0
     * $redis->get('key');          // chr(0x2f) = "/" = b("0010 1111")
     * </pre>
     * @return int:
     */
    public function setBit()
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
     *
     * @example 
     * @return 
     */
    public function getKeys()
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
     *
     * @example 
     * @return 
     */
    public function sortAsc()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortAscAlpha()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortDesc()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sortDescAlpha()
    {
    }

    /**
     * 
     *Adds the string values to the head (left) of the list. Creates the list if the key didn't exist.
     *If the key exists and is not a list, FALSE is returned.
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
     * @return int
     */
    public function lPush()
    {
    }

    /**
     * 
     *Adds the string values to the tail (right) of the list. Creates the list if the key didn't exist.
     *If the key exists and is not a list, FALSE is returned.
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
     * @return int
     */
    public function rPush()
    {
    }

    /**
     * 
     *Adds the string value to the head (left) of the list if the list exists.
     * @example 
     * <pre>
     * $redis->delete('key1');
     * $redis->lPushx('key1', 'A');     // returns 0
     * $redis->lPush('key1', 'A');      // returns 1
     * $redis->lPushx('key1', 'B');     // returns 2
     * $redis->lPushx('key1', 'C');     // returns 3
     * // key1 now points to the following list: [ 'A', 'B', 'C' ]
     * </pre>
     * @return int
     */
    public function lPushx()
    {
    }

    /**
     * 
     *Adds the string value to the tail (right) of the list if the ist exists. FALSE in case of Failure.
     * @example 
     * <pre>
     * $redis->delete('key1');
     * $redis->rPushx('key1', 'A'); // returns 0
     * $redis->rPush('key1', 'A'); // returns 1
     * $redis->rPushx('key1', 'B'); // returns 2
     * $redis->rPushx('key1', 'C'); // returns 3
     * // key1 now points to the following list: [ 'A', 'B', 'C' ]
     * </pre>
     * @return int
     */
    public function rPushx()
    {
    }

    /**
     * 
     *Returns and removes the first element of the list.
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->lPop('key1');        // key1 => [ 'B', 'C' ]
     * </pre>
     * @return string
     */
    public function lPop()
    {
    }

    /**
     * 
     *Returns and removes the last element of the list.
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->rPop('key1');        // key1 => [ 'A', 'B' ]
     * </pre>
     * @return string
     */
    public function rPop()
    {
    }

    /**
     * 
     *Is a blocking lPop primitive. If at least one of the lists contains at least one element,
     *the element will be popped from the head of the list and returned to the caller.
     *Il all the list identified by the keys passed in arguments are empty, blPop will block
     *during the specified timeout until an element is pushed to one of those lists. This element will be popped.
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
     * @return array
     */
    public function blPop()
    {
    }

    /**
     * 
     *Is a blocking rPop primitive. If at least one of the lists contains at least one element,
     *the element will be popped from the head of the list and returned to the caller.
     *Il all the list identified by the keys passed in arguments are empty, brPop will
     *block during the specified timeout until an element is pushed to one of those lists. T
     *his element will be popped.
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
     * @return array
     */
    public function brPop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lSize()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lRemove()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function listTrim()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lGet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lGetRange()
    {
    }

    /**
     * 
     *Set the list at index with the new value.
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->lGet('key1', 0);     // 'A'
     * $redis->lSet('key1', 0, 'X');
     * $redis->lGet('key1', 0);     // 'X'
     * </pre>
     * @return is
     */
    public function lSet()
    {
    }

    /**
     * 
     *Insert value in the list before or after the pivot value. the parameter options
     *specify the position of the insert (before or after). If the list didn't exists,
     *or the pivot didn't exists, the value is not inserted.
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
     * @return int
     */
    public function lInsert()
    {
    }

    /**
     * 
     *Adds a values to the set value stored at key.
     *If this value is already in the set, FALSE is returned.
     * @example 
     * <pre>
     * $redis->sAdd('k', 'v1');                // int(1)
     * $redis->sAdd('k', 'v1', 'v2', 'v3');    // int(2)
     * </pre>
     * @return int
     */
    public function sAdd()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sAddArray()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sSize()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sRemove()
    {
    }

    /**
     * 
     *Moves the specified member from the set at srcKey to the set at dstKey.
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
     * @return If
     */
    public function sMove()
    {
    }

    /**
     * 
     *Removes and returns a random element from the set value at Key.
     * @example 
     * <pre>
     * $redis->sAdd('key1' , 'set1');
     * $redis->sAdd('key1' , 'set2');
     * $redis->sAdd('key1' , 'set3');   // 'key1' => {'set3', 'set1', 'set2'}
     * $redis->sPop('key1');            // 'set1', 'key1' => {'set3', 'set2'}
     * $redis->sPop('key1');            // 'set3', 'key1' => {'set2'}
     * </pre>
     * @return bool
     */
    public function sPop()
    {
    }

    /**
     * 
     *Returns a random element(s) from the set value at Key, without removing it.
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
     * @return bool
     */
    public function sRandMember()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sContains()
    {
    }

    /**
     * 
     *Returns the contents of a set.
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
     * @return array
     */
    public function sMembers()
    {
    }

    /**
     * 
     *Returns the members of a set resulting from the intersection of all the sets
     *held at the specified keys. If just a single key is specified, then this command
     *produces the members of this set. If one of the keys is missing, FALSE is returned.
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
     * @return If
     */
    public function sInter()
    {
    }

    /**
     * 
     *Performs a sInter command and stores the result in a new set.
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
     * @return int:
     */
    public function sInterStore()
    {
    }

    /**
     * 
     *Performs the union between N sets and returns it.
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
     * @return array
     */
    public function sUnion()
    {
    }

    /**
     * 
     *Performs the same action as sUnion, but stores the result in the first key
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
     * @return int
     */
    public function sUnionStore()
    {
    }

    /**
     * 
     *Performs the difference between N sets and returns it.
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
     * @return array
     */
    public function sDiff()
    {
    }

    /**
     * 
     *Performs the same action as sDiff, but stores the result in the first key
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
     * @return int:
     */
    public function sDiffStore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setTimeout()
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
     *
     * @example 
     * @return 
     */
    public function bgSave()
    {
    }

    /**
     * 
     *Returns the timestamp of the last disk save.
     * @example $redis->lastSave();
     * @return int:
     */
    public function lastSave()
    {
    }

    /**
     * 
     *Removes all entries from the current database.
     * @example $redis->flushDB();
     * @return bool:
     */
    public function flushDB()
    {
    }

    /**
     * 
     *Removes all entries from all databases.
     * @example $redis->flushAll();
     * @return bool:
     */
    public function flushAll()
    {
    }

    /**
     * 
     *Returns the current database's size.
     * @example 
     * <pre>
     * $count = $redis->dbSize();
     * echo "Redis has $count keys\n";
     * </pre>
     * @return int:
     */
    public function dbSize()
    {
    }

    /**
     * 
     *Authenticate the connection using a password.
     *Warning: The password is sent in plain-text over the network.
     * @example $redis->auth('foobared');
     * @return bool:
     */
    public function auth()
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
     *Remove the expiration timer from a key.
     * @example $redis->persist('key');
     * @return bool:
     */
    public function persist()
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
     *Switches to a given database.
     * @example 
     * <pre>
     * $redis->select(0);       // switch to DB 0
     * $redis->set('x', '42');  // write 42 to x
     * $redis->move('x', 1);    // move to DB 1
     * $redis->select(1);       // switch to DB 1
     * $redis->get('x');        // will return 42
     * </pre>
     * @return bool
     */
    public function select()
    {
    }

    /**
     * 
     *Moves a key to a different database.
     * @example 
     * <pre>
     * $redis->select(0);       // switch to DB 0
     * $redis->set('x', '42');  // write 42 to x
     * $redis->move('x', 1);    // move to DB 1
     * $redis->select(1);       // switch to DB 1
     * $redis->get('x');        // will return 42
     * </pre>
     * @return bool:
     */
    public function move()
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
     *Changes the slave status
     *Either host and port, or no parameter to stop being a slave.
     * @example 
     * <pre>
     * $redis->slaveof('10.0.1.7', 6379);
     * // ...
     * $redis->slaveof();
     * </pre>
     * @return bool:
     */
    public function slaveof()
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
     * $redis->object("encoding", "l"); // → ziplist
     * $redis->object("refcount", "l"); // → 1
     * $redis->object("idletime", "l"); // → 400 (in seconds, with a precision of 10 seconds).
     * </pre>
     * @return string
     */
    public function object()
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
    public function bitcount()
    {
    }

    /**
     * 
     *Return the position of the first bit set to 1 or 0 in a string. The position is returned, thinking of the
     *string as an array of bits from left to right, where the first byte's most significant bit is at position 0,
     *the second byte's most significant bit is at position 8, and so forth.
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
     * @return function
     */
    public function bitpos()
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
     *A blocking version of rpoplpush, with an integral timeout in the third parameter.
     * @example 
     * @return string
     */
    public function brpoplpush()
    {
    }

    /**
     * 
     *Adds the specified member with a given score to the sorted set stored at key.
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
     * @return int
     */
    public function zAdd()
    {
    }

    /**
     * 
     *
     * @example 
     * @return int
     */
    public function zDelete()
    {
    }

    /**
     * 
     *Returns a range of elements from the ordered set stored at the specified key,
     *with values in the range [start, end]. start and stop are interpreted as zero-based indices:
     *0 the first element,
     *1 the second ...
     *-1 the last element,
     *-2 the penultimate ...
     * @example 
     * <pre>
     * $redis->zAdd('key1', 0, 'val0');
     * $redis->zAdd('key1', 2, 'val2');
     * $redis->zAdd('key1', 10, 'val10');
     * $redis->zRange('key1', 0, -1); // array('val0', 'val2', 'val10')
     * // with scores
     * $redis->zRange('key1', 0, -1, true); // array('val0' => 0, 'val2' => 2, 'val10' => 10)
     * </pre>
     * @return array
     */
    public function zRange()
    {
    }

    /**
     * 
     *Returns the elements of the sorted set stored at the specified key in the range [start, end]
     *in reverse order. start and stop are interpretated as zero-based indices:
     *0 the first element,
     *1 the second ...
     *-1 the last element,
     *-2 the penultimate ...
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zRevRange('key', 0, -1); // array('val10', 'val2', 'val0')
     * // with scores
     * $redis->zRevRange('key', 0, -1, true); // array('val10' => 10, 'val2' => 2, 'val0' => 0)
     * </pre>
     * @return array
     */
    public function zRevRange()
    {
    }

    /**
     * 
     *Returns the elements of the sorted set stored at the specified key which have scores in the
     *range [start,end]. Adding a parenthesis before start or end excludes it from the range.
     *+inf and -inf are also valid limits.
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
     * @return array
     */
    public function zRangeByScore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRangeByScore()
    {
    }

    /**
     * 
     *Returns a lexigraphical range of members in a sorted set, assuming the members have the same score. The
     *min and max values are required to start with '(' (exclusive), '[' (inclusive), or be exactly the values
     *'-' (negative inf) or '+' (positive inf).  The command must be called with either three *or* five
     *arguments or will return FALSE.
     * @example 
     * <pre>
     * foreach (array('a', 'b', 'c', 'd', 'e', 'f', 'g') as $char) {
     * $redis->zAdd('key', $char);
     * }
     * $redis->zRangeByLex('key', '-', '[c'); // array('a', 'b', 'c')
     * $redis->zRangeByLex('key', '-', '(c'); // array('a', 'b')
     * $redis->zRangeByLex('key', '-', '[c'); // array('b', 'c')
     * </pre>
     * @return array
     */
    public function zRangeByLex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRangeByLex()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zLexCount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemRangeByLex()
    {
    }

    /**
     * 
     *Returns the number of elements of the sorted set stored at the specified key which have
     *scores in the range [start,end]. Adding a parenthesis before start or end excludes it
     *from the range. +inf and -inf are also valid limits.
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zCount('key', 0, 3); // 2, corresponding to array('val0', 'val2')
     * </pre>
     * @return int
     */
    public function zCount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zDeleteRangeByScore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zDeleteRangeByRank()
    {
    }

    /**
     * 
     *Returns the cardinality of an ordered set.
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zCard('key');            // 3
     * </pre>
     * @return int
     */
    public function zCard()
    {
    }

    /**
     * 
     *Returns the score of a given member in the specified sorted set.
     * @example 
     * <pre>
     * $redis->zAdd('key', 2.5, 'val2');
     * $redis->zScore('key', 'val2'); // 2.5
     * </pre>
     * @return 
     */
    public function zScore()
    {
    }

    /**
     * 
     *Returns the rank of a given member in the specified sorted set, starting at 0 for the item
     *with the smallest score. zRevRank starts at 0 for the item with the largest score.
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
     * @return int
     */
    public function zRank()
    {
    }

    /**
     * 
     *
     * @example 
     * @return int
     */
    public function zRevRank()
    {
    }

    /**
     * 
     *Creates an intersection of sorted sets given in second argument.
     *The result of the union will be stored in the sorted set defined by the first argument.
     *The third optional argument defines weights to apply to the sorted sets in input.
     *In this case, the weights will be multiplied by the score of each element in the sorted set
     *before applying the aggregation. The forth argument defines the AGGREGATE option which
     *specify how the results of the union are aggregated.
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
     * @return int
     */
    public function zInter()
    {
    }

    /**
     * 
     *Creates an union of sorted sets given in second argument.
     *The result of the union will be stored in the sorted set defined by the first argument.
     *The third optionnel argument defines weights to apply to the sorted sets in input.
     *In this case, the weights will be multiplied by the score of each element in the sorted set
     *before applying the aggregation. The forth argument defines the AGGREGATE option which
     *specify how the results of the union are aggregated.
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
     * @return int
     */
    public function zUnion()
    {
    }

    /**
     * 
     *Increments the score of a member from a sorted set by a given amount.
     * @example 
     * <pre>
     * $redis->delete('key');
     * $redis->zIncrBy('key', 2.5, 'member1');  // key or member1 didn't exist, so member1's score is to 0
     * // before the increment and now has the value 2.5
     * $redis->zIncrBy('key', 1, 'member1');    // 3.5
     * </pre>
     * @return float
     */
    public function zIncrBy()
    {
    }

    /**
     * 
     *Sets an expiration date (a timestamp) on an item.
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $now = time(NULL);               // current timestamp
     * $redis->expireAt('x', $now + 3); // x will disappear in 3 seconds.
     * sleep(5);                        // wait 5 seconds
     * $redis->get('x');                // will return `FALSE`, as 'x' has expired.
     * </pre>
     * @return bool:
     */
    public function expireAt()
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
    public function pexpireAt()
    {
    }

    /**
     * 
     *Gets a value from the hash stored at key.
     *If the hash table doesn't exist, or the key doesn't exist, FALSE is returned.
     * @example 
     * @return string
     */
    public function hGet()
    {
    }

    /**
     * 
     *Adds a value to the hash stored at key. If this value is already in the hash, FALSE is returned.
     * @example 
     * <pre>
     * $redis->delete('h')
     * $redis->hSet('h', 'key1', 'hello');  // 1, 'key1' => 'hello' in the hash at "h"
     * $redis->hGet('h', 'key1');           // returns "hello"
     * $redis->hSet('h', 'key1', 'plop');   // 0, value was replaced.
     * $redis->hGet('h', 'key1');           // returns "plop"
     * </pre>
     * @return 0
     */
    public function hSet()
    {
    }

    /**
     * 
     *Adds a value to the hash stored at key only if this field isn't already in the hash.
     * @example 
     * <pre>
     * $redis->delete('h')
     * $redis->hSetNx('h', 'key1', 'hello'); // TRUE, 'key1' => 'hello' in the hash at "h"
     * $redis->hSetNx('h', 'key1', 'world'); // FALSE, 'key1' => 'hello' in the hash at "h". No change since the field
     * wasn't replaced.
     * </pre>
     * @return bool
     */
    public function hSetNx()
    {
    }

    /**
     * 
     *Removes a values from the hash stored at key.
     *If the hash table doesn't exist, or the key doesn't exist, FALSE is returned.
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
     * @return int
     */
    public function hDel()
    {
    }

    /**
     * 
     *Returns the length of a hash, in number of items
     * @example 
     * <pre>
     * $redis->delete('h')
     * $redis->hSet('h', 'key1', 'hello');
     * $redis->hSet('h', 'key2', 'plop');
     * $redis->hLen('h'); // returns 2
     * </pre>
     * @return int
     */
    public function hLen()
    {
    }

    /**
     * 
     *Returns the keys in a hash, as an array of strings.
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
     * @return array
     */
    public function hKeys()
    {
    }

    /**
     * 
     *Returns the values in a hash, as an array of strings.
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
     * @return array
     */
    public function hVals()
    {
    }

    /**
     * 
     *Returns the whole hash, as an array of strings indexed by strings.
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
     * @return array
     */
    public function hGetAll()
    {
    }

    /**
     * 
     *Verify if the specified member exists in a key.
     * @example 
     * <pre>
     * $redis->hSet('h', 'a', 'x');
     * $redis->hExists('h', 'a');               //  TRUE
     * $redis->hExists('h', 'NonExistingKey');  // FALSE
     * </pre>
     * @return bool:
     */
    public function hExists()
    {
    }

    /**
     * 
     *Increments the value of a member from a hash by a given amount.
     * @example 
     * <pre>
     * $redis->delete('h');
     * $redis->hIncrBy('h', 'x', 2); // returns 2: h[x] = 2 now.
     * $redis->hIncrBy('h', 'x', 1); // h[x] ← 2 + 1. Returns 3
     * </pre>
     * @return int
     */
    public function hIncrBy()
    {
    }

    /**
     * 
     *Increment the float value of a hash field by the given amount
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
     * @return 
     */
    public function hIncrByFloat()
    {
    }

    /**
     * 
     *Fills in a whole hash. Non-string values are converted to string, using the standard (string) cast.
     *NULL values are stored as empty strings
     * @example 
     * <pre>
     * $redis->delete('user:1');
     * $redis->hMset('user:1', array('name' => 'Joe', 'salary' => 2000));
     * $redis->hIncrBy('user:1', 'salary', 100); // Joe earns 100 more now.
     * </pre>
     * @return 
     */
    public function hMset()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hMget()
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
    public function discard()
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
    public function pipeline()
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
     *Publish messages to channels. Warning: this function will probably change in the future.
     * @example $redis->publish('chan-1', 'hello, world!'); // send message.
     * @return int
     */
    public function publish()
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
     * @return mixed
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
     *Return the current Redis server time.
     * @example 
     * <pre>
     * var_dump( $redis->time() );
     * // array(2) {
     * //   [0] => string(10) "1342364352"
     * //   [1] => string(6) "253002"
     * // }
     * </pre>
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
    public function role()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
     *
     * @example 
     * @return 
     */
    public function debug()
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
     *Migrates a key to a different Redis instance.
     * @example 
     * <pre>
     * $redis->migrate('backup', 6379, 'foo', 0, 3600);
     * </pre>
     * @return 
     */
    public function migrate()
    {
    }

    /**
     * 
     *The last error message (if any)
     * @example 
     * <pre>
     * $redis->eval('this-is-not-lua');
     * $err = $redis->getLastError();
     * // "ERR Error compiling script (new function): user_script:1: '=' expected near '-'"
     * </pre>
     * @return string
     */
    public function getLastError()
    {
    }

    /**
     * 
     *Clear the last error message
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
    public function clearLastError()
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
     *A utility method to serialize values manually. This method allows you to serialize a value with whatever
     *serializer is configured, manually. This can be useful for serialization/unserialization of data going in
     *and out of EVAL commands as phpredis can't automatically do this itself.  Note that if no serializer is
     *set, phpredis will change Array values to 'Array', and Objects to 'Object'.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_NONE);
     * $redis->_serialize("foo"); // returns "foo"
     * $redis->_serialize(Array()); // Returns "Array"
     * $redis->_serialize(new stdClass()); // Returns "Object"
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);
     * $redis->_serialize("foo"); // Returns 's:3:"foo";'
     * </pre>
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
    public function client()
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
     *Scan the keyspace for keys.
     * @example 
     * <pre>
     * $iterator = null;
     * while($keys = $redis->scan($iterator)) {
     * foreach($keys as $key) {
     * echo $key . PHP_EOL;
     * }
     * }
     * </pre>
     * @param  mixed $i_iterator 
     * @param  mixed $str_pattern 
     * @param  mixed $i_count 
     * @return array
     */
    public function scan($i_iterator, $str_pattern, $i_count)
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
    public function sscan($str_key, $i_iterator, $str_pattern, $i_count)
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
    public function pfcount()
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
     *Get client option
     * @example 
     * // return Redis::SERIALIZER_NONE, Redis::SERIALIZER_PHP, or Redis::SERIALIZER_IGBINARY.
     * $redis->getOption(Redis::OPT_SERIALIZER);
     * @return int
     */
    public function getOption()
    {
    }

    /**
     * 
     *Set client option.
     * @example 
     * <pre>
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_NONE);        // don't serialize data
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_PHP);         // use built-in serialize/unserialize
     * $redis->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_IGBINARY);    // use igBinary serialize/unserialize
     * $redis->setOption(Redis::OPT_PREFIX, 'myAppName:');                      // use custom prefix on all keys
     * </pre>
     * @return bool:
     */
    public function setOption()
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
    public function slowlog()
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
    public function getHost()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getPort()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getDBNum()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getTimeout()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getReadTimeout()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getPersistentID()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getAuth()
    {
    }

    /**
     * 
     *A method to determine if a phpredis object thinks it's connected to a server
     * @example 
     * @return bool
     */
    public function isConnected()
    {
    }

    /**
     * 
     *Detect whether we're in ATOMIC/MULTI/PIPELINE mode.
     * @example $redis->getMode();
     * @return int
     */
    public function getMode()
    {
    }

    /**
     * 
     *Blocks the current client until all the previous write commands are successfully transferred and
     *acknowledged by at least the specified number of slaves.
     * @example $redis->wait(2, 1000);
     * @return context
     */
    public function wait()
    {
    }

    /**
     * 
     *A command allowing you to get information on the Redis pub/sub system.
     * @example 
     * <pre>
     * $redis->pubsub('channels'); // All channels
     * $redis->pubsub('channels', '*pattern*'); // Just channels matching your pattern
     * $redis->pubsub('numsub', array('chan1', 'chan2')); // Get subscriber counts for 'chan1' and 'chan2'
     * $redis->pubsub('numpat'); // Get the number of pattern subscribers
     * </pre>
     * @return -
     */
    public function pubsub()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function open()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function popen()
    {
    }

    /**
     * 
     *Returns the size of a list identified by Key. If the list didn't exist or is empty,
     *the command returns 0. If the data type identified by Key is not a list, the command return FALSE.
     * @example 
     * <pre>
     * $redis->rPush('key1', 'A');
     * $redis->rPush('key1', 'B');
     * $redis->rPush('key1', 'C');  // key1 => [ 'A', 'B', 'C' ]
     * $redis->lLen('key1');       // 3
     * $redis->rPop('key1');
     * $redis->lLen('key1');       // 2
     * </pre>
     * @return bool
     */
    public function lLen()
    {
    }

    /**
     * 
     *
     * @example 
     * @return array
     */
    public function sGetMembers()
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
    public function zRemove()
    {
    }

    /**
     * 
     *Deletes a specified member from the ordered set.
     * @example 
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
     * @return int
     */
    public function zRem()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRemoveRangeByScore()
    {
    }

    /**
     * 
     *Deletes the elements of the sorted set stored at the specified key which have scores in the range [start,end].
     * @example 
     * <pre>
     * $redis->zAdd('key', 0, 'val0');
     * $redis->zAdd('key', 2, 'val2');
     * $redis->zAdd('key', 10, 'val10');
     * $redis->zRemRangeByScore('key', 0, 3); // 2
     * </pre>
     * @return int
     */
    public function zRemRangeByScore()
    {
    }

    /**
     * 
     *Deletes the elements of the sorted set stored at the specified key which have rank in the range [start,end].
     * @example 
     * <pre>
     * $redis->zAdd('key', 1, 'one');
     * $redis->zAdd('key', 2, 'two');
     * $redis->zAdd('key', 3, 'three');
     * $redis->zRemRangeByRank('key', 0, 1); // 2
     * $redis->zRange('key', 0, -1, array('withscores' => TRUE)); // array('three' => 3)
     * </pre>
     * @return int
     */
    public function zRemRangeByRank()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zSize()
    {
    }

    /**
     * 
     *Return a substring of a larger string
     * @example 
     * @return 
     */
    public function substr()
    {
    }

    /**
     * 
     *Renames a key.
     * @example 
     * <pre>
     * $redis->set('x', '42');
     * $redis->rename('x', 'y');
     * $redis->get('y');   // → 42
     * $redis->get('x');   // → `FALSE`
     * </pre>
     * @return bool:
     */
    public function rename()
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
     *
     * @example 
     * @return 
     */
    public function lrem()
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
    public function lindex()
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
    public function scard()
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
    public function sismember()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zReverseRange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sendEcho()
    {
    }

    /**
     * 
     *
     * @example 
     * @return mixed
     */
    public function evaluate()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function evaluateSha()
    {
    }

}

