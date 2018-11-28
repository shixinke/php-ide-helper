<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*个基于共享内存和锁实现的超高性能，并发数据结构。用于解决多进程/多线程数据共享和同步加锁问题
*/
class swoole_table implements Iterator, ArrayAccess, Countable
{
    /**     
    *整型
    */
    const TYPE_INT    =    1;

    /**     
    *字符串
    */
    const TYPE_STRING    =    7;

    /**     
    *浮点型
    */
    const TYPE_FLOAT    =    6;

    /**
     * 
     *创建内存表
     * @example 
     * @param int $table_size 定表格的最大行数，如果$size不是为2的N次方，如1024、8192,65536等，底层会自动调整为接近的一个数字
     * @param float $conflict_proportion 预留作为hash冲突的比例
     * @return 
     */
    public function __construct(int $table_size, float $conflict_proportion)
    {
    
    }

    /**
     * 
     *内存表增加一列
     * @example 
     * @param string $name 指定字段的名称
     * @param int $type 指定字段类型，支持3种类型，Swoole\Table::TYPE_INT, Swoole\Table::TYPE_FLOAT, Swoole\Table::TYPE_STRING
     * @param int $size 指定字符串字段的最大长度，单位为字节
     * @return bool
     */
    public function column(string $name, int $type, int $size): bool
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
     *销毁内存表
     * @example 
     * @return 
     */
    public function destroy()
    {
    
    }

    /**
     * 
     *设置行的数据
     * @example $table->set('hello@qq.com', array('id' => 189, 'name' => 'rango3', 'num' => 3.1415));
     * @param string $key 数据的key，相同的$key对应同一行数据，如果set同一个key，会覆盖上一次的数据
     * @param array $value 必须是一个数组，必须与字段定义的$name完全相同
     * @return 
     */
    public function set(string $key, Array $value)
    {
    
    }

    /**
     * 
     *获取一行数据
     * @example 
     * @param string $key 设置的key值
     * @param string $field 字段值
     * @return 
     */
    public function get(string $key, string $field)
    {
    
    }

    /**
     * 
     *获取数据行数
     * @example 
     * @return int
     */
    public function count(): int
    {
    
    }

    /**
     * 
     *删除数据
     * @example 
     * @param string $key 要删除的键
     * @return 
     */
    public function del(string $key)
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
     * @param string $key 指定数据的key，如果$key对应的行不存在，默认列的值为0
     * @param string $column 指定列名，仅支持浮点型和整型字段
     * @param mixed $incrby 增量，默认为1。如果列为整形，$incrby必须为int型，如果列为浮点型，$incrby必须为float类型失败返回false，成功返回最终的结果数值
     * @return 
     */
    public function incr(string $key, string $column, $incrby)
    {
    
    }

    /**
     * 
     *原子自减操作
     * @example 
     * @param string $key 指定数据的key，如果$key对应的行不存在，默认列的值为0
     * @param string $column 指定列名，仅支持浮点型和整型字段
     * @param mixed $decrby 减量，默认为1。如果列为整形，$decrby必须为int型，如果列为浮点型，$decrby必须为float类型失败返回false，成功返回最终的结果数值
     * @return 
     */
    public function decr(string $key, string $column, $decrby)
    {
    
    }

    /**
     * 
     *获取table占用的内存大小
     * @example 
     * @return int
     */
    public function getMemorySize(): int
    {
    
    }

    /**
     * 
     *检查一个偏移位置是否存在
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetExists(int $offset)
    {
    
    }

    /**
     * 
     *取一个偏移位置的值
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetGet(int $offset)
    {
    
    }

    /**
     * 
     *设置一个偏移位置的值(来自ArrayAccess接口)
     * @example 
     * @param int $offset 偏移量
     * @param mixed $value 需要设置的值
     * @return 
     */
    public function offsetSet(int $offset, $value)
    {
    
    }

    /**
     * 
     *复位一个偏移位置的值
     * @example 
     * @param int $offset 偏移量
     * @return 
     */
    public function offsetUnset(int $offset)
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

    /**
     * 
     *返回到迭代器的第一个元素
     * @example 
     * @return 
     */
    public function rewind()
    {
    
    }

    /**
     * 
     *向前移动到下一个元素(此方法在 foreach 循环之后被调用)
     * @example 
     * @return 
     */
    public function next()
    {
    
    }

    /**
     * 
     *返回迭代器当前元素
     * @example 
     * @return 
     */
    public function current()
    {
    
    }

    /**
     * 
     *返回当前元素的键
     * @example 
     * @return mixed
     */
    public function key()
    {
    
    }

    /**
     * 
     *检查当前位置是否有效(迭代器方法，此方法在 Iterator::rewind() 和 Iterator::next() 方法之后被调用以此用来检查当前位置是否有效)
     * @example 
     * @return boolean
     */
    public function valid(): boolean
    {
    
    }

}

