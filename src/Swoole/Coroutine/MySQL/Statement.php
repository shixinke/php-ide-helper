<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*协程版mysql客户端响应状态行
*/
namespace Swoole\Coroutine\MySQL;
class Statement
{
    /**
     * @var int $affected_rows 
     * 操作影响行数
     * @access public
     */
    public $affected_rows    =    0;

    /**
     * @var int $insert_id 
     * 插入数据的ID
     * @access public
     */
    public $insert_id    =    0;

    /**
     * @var string $error 
     * 操作错误提示信息
     * @access public
     */
    public $error    =    '';

    /**
     * @var int $errno 
     * 操作错误码
     * @access public
     */
    public $errno    =    0;

    /**
     * 
     *执行语句
     * @example 
     * @param array $params 绑定的参数列表
     * @return 
     */
    public function execute(Array $params)
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

