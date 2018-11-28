<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*原子计数操作类，可以方便整数的无锁原子增减
*/
class swoole_atomic
{
    /**
     * 
     *初始化一个计数器对象
     * @example 
     * @param int $value 初始值
     * @return 
     */
    public function __construct(int $value)
    {
    
    }

    /**
     * 
     *增加计数
     * @example 
     * @param int $add_value 要增加的数值，默认为1,必须为正整数
     * @return 
     */
    public function add(int $add_value)
    {
    
    }

    /**
     * 
     *减少计数
     * @example 
     * @param int $sub_value 要减少的数值，默认为1
     * @return 
     */
    public function sub(int $sub_value)
    {
    
    }

    /**
     * 
     *获取当前计数的值
     * @example 
     * @return 
     */
    public function get()
    {
    
    }

    /**
     * 
     *将当前值设置为指定的数字
     * @example 
     * @param int $value 指定要设置的目标数值
     * @return 
     */
    public function set(int $value)
    {
    
    }

    /**
     * 
     *当原子计数的值为0时程序进入等待状态。另外一个进程调用wakeup可以再次唤醒程序。底层基于Linux Futex实现，使用此特性，可以仅用4字节内存实现一个等待、通知、锁的功能
     * @example 
     * @param float $timeout 指定超时时间，默认为-1，表示永不超时，会持续等待直到有其他进程唤醒;超时返回false，错误码为EAGAIN，可使用swoole_errno函数获取;成功返回true，表示有其他进程通过wakeup成功唤醒了当前的锁;使用wait/wakeup特性时，原子计数的值只能为0或1，否则会导致无法正常使用;当然原子计数的值为1时，表示不需要进入等待状态，资源当前就是可用。wait函数会立即返回true
     * @return 
     */
    public function wait(float $timeout)
    {
    
    }

    /**
     * 
     *唤醒处于wait状态的其他进程
     * @example 
     * @param int $count 计数(当前原子计数如果为0时，表示没有进程正在wait，wakeup会立即返回true;当前原子计数如果为1时，表示当前有进程正在wait，wakeup会唤醒等待的进程，并返回true;如果同时有多个进程处于wait状态，$n参数可以控制唤醒的进程数量;被唤醒的进程返回后，会将原子计数设置为0，这时可以再次调用wakeup唤醒其他正在wait的进程)
     * @return 
     */
    public function wakeup(int $count)
    {
    
    }

    /**
     * 
     *如果当前计数器的值与比较的值的相等，则设置它为新的值
     * @example 
     * @param int $cmp_value 用于比较的值
     * @param int $new_value 用于设置的新值
     * @return 
     */
    public function cmpset(int $cmp_value, int $new_value)
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

