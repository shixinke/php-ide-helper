<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*swoole对64位有符号长整型原子计数的支持
*/
namespace Swoole\Atomic;
class Long
{
    /**
     * 
     *创建一个64位的长整型原子计数对象
     * @example 
     * @param int $value 初始化数值
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
     * @return mixed
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
     *如果当前数值等于参数1，则将当前数值设置为参数2
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

