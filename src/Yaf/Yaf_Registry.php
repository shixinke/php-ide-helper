<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*yaf变量注册器
*/
final class Yaf_Registry
{
    /**
     * @var Yaf_Registry $_instance 
     * Registry实例（单例模式）
     * @access protected
     */
    protected static  $_instance;

    /**
     * @var array $_entries 
     * 注册变量栈
     * @access protected
     */
    protected $_entries    =    array();

    /**
     * 
     *重置__construct魔术方法.
     * @example 
     * @return 
     */
    private function __construct()
    {
    
    }

    /**
     * 
     *重置__clone魔术方法，防止克隆Dispatcher（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *获取注册变量值
     * @example 
     * @param string $name 变量名
     * @return mixed
     */
    public static  function get(string $name)
    {
    
    }

    /**
     * 
     *检测变量是否存在
     * @example 
     * @param string $name 变量名
     * @return bool
     */
    public static  function has(string $name): bool
    {
    
    }

    /**
     * 
     *注册变量
     * @example 
     * @param string $name 变量名
     * @param mixed $value 变量值
     * @return bool
     */
    public static  function set(string $name, $value): bool
    {
    
    }

    /**
     * 
     *删除注册器中的变量
     * @example 
     * @param string $name 变量名
     * @return 
     */
    public static  function del(string $name)
    {
    
    }

}

