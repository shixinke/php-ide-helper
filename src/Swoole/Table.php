<?php
/**
* Swoole自动补全类(基于最新的2.0.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2017/02/17
*/

/**
*一个基于共享内存和锁实现的超高性能，并发数据结构。用于解决多进程/多线程数据共享和同步加锁问题
*/
namespace Swoole;
class Table
{
    /**     
    *整型字段
    */
    const TYPE_INT    =    1;

    /**     
    *字符串型字段
    */
    const TYPE_STRING    =    7;

    /**     
    *浮点型字段
    */
    const TYPE_FLOAT    =    6;

    /**
     * 
     *创建内存表(table占用的内存总数为 (结构体长度 + KEY长度64字节 + 行尺寸$size) * (1.2预留20%作为hash冲突) * (列尺寸)，如果机器内存不足table会创建失败)
     * @example 
     * @param int $table_size 创建内存表(table占用的内存总数为 (结构体长度 + KEY长度64字节 + 行尺寸$size) * (1.2预留20%作为hash冲突) * (列尺寸)，如果机器内存不足table会创建失败)
     * @return 
     */
    public function __construct($table_size)
    {
    }

    /**
     * 
     *内存表增加一列
     * @example 
     * @param string $name 内存表增加一列
     * @param int $type 内存表增加一列
     * @param int $size 内存表增加一列
     * @return 
     */
    public function column($name, $type, $size)
    {
    }

    /**
     * 
     *创建内存表
     * @example $table = new swoole_table(1024);
     * $table->column('id', swoole_table::TYPE_INT, 4);       //1,2,4,8
     * $table->column('name', swoole_table::TYPE_STRING, 64);
     * $table->column('num', swoole_table::TYPE_FLOAT);
     * $table->create();
     * @return 
     */
    public function create()
    {
    }

    /**
     * 
     *销毁内存表
     * @example 
     * @return 
     */
    public function destroy()
    {
    }

    /**
     * 
     *设置行的数据，swoole_table使用key-value的方式来访问数据。
     * @example 
     * @param string $key 设置行的数据，swoole_table使用key-value的方式来访问数据。
     * @param array $value 设置行的数据，swoole_table使用key-value的方式来访问数据。
     * @return 
     */
    public function set($key, Array $value)
    {
    }

    /**
     * 
     *获取一行数据
     * @example 
     * @param string $key 获取一行数据
     * @return array
     */
    public function get($key)
    {
    }

    /**
     * 
     *获取键的数量
     * @example 
     * @return int
     */
    public function count()
    {
    }

    /**
     * 
     *删除指定key的值
     * @example 
     * @param string $key 删除指定key的值
     * @return boolean
     */
    public function del($key)
    {
    }

    /**
     * 
     *检查table中是否存在某一个key
     * @example 
     * @param string $key 检查table中是否存在某一个key
     * @return boolean
     */
    public function exist($key)
    {
    }

    /**
     * 
     *原子自增操作
     * @example 
     * @param string $key 原子自增操作
     * @param number $column 原子自增操作
     * @param mixed $incrby 原子自增操作
     * @return 
     */
    public function incr($key, $column, $incrby)
    {
    }

    /**
     * 
     *原子自减操作
     * @example 
     * @param string $key 原子自减操作
     * @param number $column 原子自减操作
     * @param mixed $decrby 原子自减操作
     * @return 
     */
    public function decr($key, $column, $decrby)
    {
    }

    /**
     * 
     *返回到迭代器的第一个元素
     * @example 
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * 
     *向前移动到下一个元素
     * @example 
     * @return void
     */
    public function next()
    {
    }

    /**
     * 
     *返回当前元素
     * @example 
     * @return mixed
     */
    public function current()
    {
    }

    /**
     * 
     *返回当前元素的键
     * @example 
     * @return scalar
     */
    public function key()
    {
    }

    /**
     * 
     *此方法在 rewind() 和 next() 方法之后被调用以此用来检查当前位置是否有效
     * @example 
     * @return boolean
     */
    public function valid()
    {
    }

}

