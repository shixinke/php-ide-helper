<?php
/**
* Swoole自动补全类(基于最新的2.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/30
*/

/**
*
*/
namespace Swoole;
class Table
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
     *
     * @example 
     * @param  mixed $table_size 
     * @return 
     */
    public function __construct($table_size)
    {
    }

    /**
     * 
     *
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
     *
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
     *
     * @example 
     * @param  mixed $key 
     * @param array $value 
     * @return 
     */
    public function set($key, Array $value)
    {
    }

    /**
     * 
     *
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
     *
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function del($key)
    {
    }

    /**
     * 
     *
     * @example 
     * @param  mixed $key 
     * @return 
     */
    public function exist($key)
    {
    }

    /**
     * 
     *
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
     *
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

