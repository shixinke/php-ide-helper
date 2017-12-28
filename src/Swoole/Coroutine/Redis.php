<?php
/**
* Swoole自动补全类(基于最新的2.0.10版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/12/28
*/

/**
*
*/
namespace Swoole\Coroutine;
class Redis
{
    /**
     * @var unknown $setting 
     * 
     * @access public
     */
    public $setting;

    /**
     * @var unknown $host 
     * 
     * @access public
     */
    public $host;

    /**
     * @var unknown $port 
     * 
     * @access public
     */
    public $port;

    /**
     * @var unknown $sock 
     * 
     * @access public
     */
    public $sock;

    /**
     * @var unknown $errCode 
     * 
     * @access public
     */
    public $errCode    =    0;

    /**
     * @var unknown $errMsg 
     * 
     * @access public
     */
    public $errMsg    =    '';

    /**
     * 
     *
     * @example 
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
     *
     * @example 
     * @return 
     */
    public function connect()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setDefer()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getDefer()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function recv()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function close()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function set()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setBit()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setEx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function psetEx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lSet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function get()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function mGet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function del()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hDel()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hSet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hMSet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hSetNx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function delete()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function mSet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function mSetNx()
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
     *
     * @example 
     * @return 
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
    public function exists()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function strLen()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lPop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function blPop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rPop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function bRPopLPush()
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
    public function lLen()
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
    public function scard()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sPop()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sMembers()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sGetMembers()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function persist()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function ttl()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function zCard()
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
     *
     * @example 
     * @return 
     */
    public function hLen()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hKeys()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hVals()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hGetAll()
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
     *
     * @example 
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
    public function dump()
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
     *
     * @example 
     * @return 
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
    public function renameNx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function randomKey()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function auth()
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
     *
     * @example 
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
     *
     * @example 
     * @return 
     */
    public function lastSave()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flushDB()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function flushAll()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function dbSize()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function setRange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function setNx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getSet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function lPushx()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lPush()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rPush()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rPushx()
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
    public function zScore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRank()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRank()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hGet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hMGet()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hExists()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function publish()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zIncrBy()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zAdd()
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
    public function zRemRangeByScore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function zRange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function zRevRange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
     *
     * @example 
     * @return 
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
    public function zInter()
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
    public function zUnion()
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
    public function incrBy()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hIncrBy()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function incr()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function decrBy()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function getBit()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lInsert()
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
    public function lIndex()
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
     *
     * @example 
     * @return 
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
    public function expireAt()
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
     *
     * @example 
     * @return 
     */
    public function move()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function select()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function getRange()
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
    public function ltrim()
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
     *
     * @example 
     * @return 
     */
    public function lRange()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function lRem()
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
    public function zDeleteRangeByRank()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function incrByFloat()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function hIncrByFloat()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitCount()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function bitOp()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function sMove()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sDiff()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function sUnion()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sUnionStore()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sInter()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function sInterStore()
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
    public function zDelete()
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
     *
     * @example 
     * @return 
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
    public function pSubscribe()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function subscribe()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
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
    public function eval()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function evalSha()
    {
    }

    /**
     * 
     *
     * @example 
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
    public function __sleep()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __wakeup()
    {
    }

}

