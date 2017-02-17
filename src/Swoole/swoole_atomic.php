<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*原子计数操作类，可以方便整数的无锁原子增减
*/
class swoole_atomic
{
    /**
     * 
     *创建一个原子计数对象(只能操作32位整数，最大支持42亿.在swoole_server中使用原子计数器，必须在swoole_server->start前创建;在swoole_process中使用原子计数器，必须在swoole_process->start前创建)
     * @example 
     * @param int $value 创建一个原子计数对象(只能操作32位整数，最大支持42亿.在swoole_server中使用原子计数器，必须在swoole_server->start前创建;在swoole_process中使用原子计数器，必须在swoole_process->start前创建)
     * @return 
     */
    public function __construct($value)
    {
    }

    /**
     * 
     *增加计数
     * @example 
     * @param int $add_value 增加计数
     * @return 
     */
    public function add($add_value)
    {
    }

    /**
     * 
     *减少计数
     * @example 
     * @param int $sub_value 减少计数
     * @return 
     */
    public function sub($sub_value)
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
     * @param int $value 将当前值设置为指定的数字
     * @return 
     */
    public function set($value)
    {
    }

    /**
     * 
     *如果当前数值等于参数1，则将当前数值设置为参数2($cmp_value，$set_value 必须为小于42亿的整数)
     * @example 
     * @param int $cmp_value 如果当前数值等于参数1，则将当前数值设置为参数2($cmp_value，$set_value 必须为小于42亿的整数)
     * @param int $new_value 如果当前数值等于参数1，则将当前数值设置为参数2($cmp_value，$set_value 必须为小于42亿的整数)
     * @return 
     */
    public function cmpset($cmp_value, $new_value)
    {
    }

}

