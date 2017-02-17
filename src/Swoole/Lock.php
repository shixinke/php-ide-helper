<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*swoole 锁
*/
namespace Swoole;
class Lock
{
    /**
     * 
     *初始化锁
     * @example 
     * @param int $type 初始化锁
     * @param string $filename 初始化锁
     * @return 
     */
    public function __construct($type, $filename)
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
     *加锁操作
     * @example 
     * @return 
     */
    public function lock()
    {
    }

    /**
     * 
     *加锁操作。与lock方法不同的是，trylock()不会阻塞，它会立即返回。当返回false时表示抢锁失败，有其他进程持有锁。返回true时表示加锁成功，此时可以修改共享变量。
     * @example 
     * @return 
     */
    public function trylock()
    {
    }

    /**
     * 
     *加锁。lock_read方法仅可用在读写锁(SWOOLE_RWLOCK)和文件锁(SWOOLE_FILELOCK)中，表示仅仅锁定读。在持有读锁的过程中，其他进程依然可以获得读锁，可以继续发生读操作。但不能$lock->lock()或$lock->trylock()，这两个方法是获取独占锁的
     * @example 
     * @return 
     */
    public function lock_read()
    {
    }

    /**
     * 
     *加锁。此方法与lock_read相同，但是非阻塞的。调用会立即返回，必须检测返回值以确定是否拿到了锁
     * @example 
     * @return 
     */
    public function trylock_read()
    {
    }

    /**
     * 
     *释放锁
     * @example 
     * @return 
     */
    public function unlock()
    {
    }

}

