<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*锁的实现。PHP代码中可以很方便地创建一个锁，用来实现数据同步。swoole_lock类支持5种锁的类型：
*/
class swoole_lock
{
    /**     
    *文件锁
    */
    const FILELOCK    =    2;

    /**     
    *互斥锁
    */
    const MUTEX    =    3;

    /**     
    *信号量
    */
    const SEM    =    4;

    /**     
    *读写锁
    */
    const RWLOCK    =    1;

    /**     
    *自旋锁
    */
    const SPINLOCK    =    5;

    /**
     * @var int $errCode 
     * 错误码
     * @access public
     */
    public $errCode    =    0;

    /**
     * 
     *创建锁
     * @example 
     * @param int $type 锁的类型(使用常量)
     * @param string $filename 当类型为SWOOLE_FILELOCK时必须传入，指定文件锁的路径
     * @return 
     */
    public function __construct(int $type, string $filename)
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
     *加锁操作
     * @example 
     * @return 
     */
    public function lock()
    {
    
    }

    /**
     * 
     *加锁操作，作用于swoole_lock->lock一致，但lockwait可以设置超时时间
     * @example 
     * @param float $timeout 超时时间
     * @return 
     */
    public function lockwait(float $timeout)
    {
    
    }

    /**
     * 
     *非阻塞的加锁操作
     * @example 
     * @return 
     */
    public function trylock()
    {
    
    }

    /**
     * 
     *锁定读
     * @example 
     * @return 
     */
    public function lock_read()
    {
    
    }

    /**
     * 
     *非阻塞式锁定读
     * @example 
     * @return 
     */
    public function trylock_read()
    {
    
    }

    /**
     * 
     *释放锁操作
     * @example 
     * @return 
     */
    public function unlock()
    {
    
    }

}

