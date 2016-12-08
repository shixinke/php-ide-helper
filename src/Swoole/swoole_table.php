<?php
/**
* Swoole自动补全类(基于最新的2.0.1版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
class swoole_table
{
    /**     
    *
    */
    const TYPE_INT    =    1;

    /**     
    *
    */
    const TYPE_STRING    =    7;

    /**     
    *
    */
    const TYPE_FLOAT    =    6;

    /**
     * 
     *创建内在表
     * @example 
     * @param  mixed $table_size 
     * @return 
     */
    public function __construct($table_size)
    {
    }

    /**
     * 
     *内存表增加一列
     * @example 
     * @param  mixed $name 
     * @param  mixed $type 
     * @param  mixed $size 
     * @return 
     */
    public function column($name, $type, $size)
    {
    }

    /**
     * 
     *创建内存表(在使用column创建内存表结构时执行)
     * @example 
     * @return 
     */
    public function create()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function destroy()
    {
    }

    /**
     * 
     *设置行的数据
     * @example 
     * @param  mixed $key 
     * @param  mixed $value 
     * @return 
     */
    public function set($key, $value)
    {
    }

    /**
     * 
     *获取一行数据
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function get($key)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function count()
    {
    }

    /**
     * 
     *删除数据
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function del($key)
    {
    }

    /**
     * 
     *检查table中是否存在某一个key
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function exist($key)
    {
    }

    /**
     * 
     *原子自增操作
     * @example 
     * @param  mixed $key 
     * @param  mixed $column 
     * @param  mixed $incrby 
     * @return 
     */
    public function incr($key, $column, $incrby)
    {
    }

    /**
     * 
     *原子自减操作
     * @example 
     * @param  mixed $key 
     * @param  mixed $column 
     * @param  mixed $decrby 
     * @return 
     */
    public function decr($key, $column, $decrby)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function rewind()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function next()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function current()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function key()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function valid()
    {
    }

}

