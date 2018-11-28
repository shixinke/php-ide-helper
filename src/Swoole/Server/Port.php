<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*TCP端口服务
*/
namespace Swoole\Server;
class Port
{
    /**
     * @var callable $onConnect 
     * 连接成功回调函数
     * @access public
     */
    public $onConnect;

    /**
     * @var callable $onReceive 
     * 接收到数据时回调此函数
     * @access public
     */
    public $onReceive;

    /**
     * @var callable $onClose 
     * TCP客户端连接关闭后，在worker进程中回调此函数
     * @access public
     */
    public $onClose;

    /**
     * @var callable $onPacket 
     * 接收到UDP数据包时回调此函数，发生在worker进程中
     * @access public
     */
    public $onPacket;

    /**
     * @var callable $onBufferFull 
     * 当缓存区达到最高水位时触发此事件
     * @access public
     */
    public $onBufferFull;

    /**
     * @var callable $onBufferEmpty 
     * 当缓存区低于最低水位线时触发此事件
     * @access public
     */
    public $onBufferEmpty;

    /**
     * @var callable $onRequest 
     * 请求回调函数
     * @access public
     */
    public $onRequest;

    /**
     * @var callable $onHandShake 
     * 握手时回调函数
     * @access public
     */
    public $onHandShake;

    /**
     * @var callable $onMessage 
     * 当接收到消息时的回调函数
     * @access public
     */
    public $onMessage;

    /**
     * @var callable $onOpen 
     * 当连接打开时的回调函数
     * @access public
     */
    public $onOpen;

    /**
     * @var string $host 
     * 连接的主机
     * @access public
     */
    public $host;

    /**
     * @var int $port 
     * 连接的主机的端口
     * @access public
     */
    public $port    =    0;

    /**
     * @var int $type 
     * socket的类型
     * @access public
     */
    public $type    =    0;

    /**
     * @var int $sock 
     * 连接句柄
     * @access public
     */
    public $sock    =    0;

    /**
     * @var array $setting 
     * 通过swoole_server:set()设置的参数会保存到setting属性上
     * @access public
     */
    public $setting    =    array();

    /**
     * @var array $connections 
     * 所有连接对象
     * @access public
     */
    public $connections    =    array();

    /**
     * 
     *初始化方法
     * @example 
     * @return 
     */
    private function __construct()
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
     *设置swoole_server运行时的参数
     * @example 
     * @param array $settings 配置选项
     * @return 
     */
    public function set(Array $settings)
    {
    
    }

    /**
     * 
     *绑定事件(为事件注册函数)
     * @example 
     * @param string $event_name 事件名称
     * @param callable $callback 事件对应的回调函数
     * @return 
     */
    public function on(string $event_name, Callable $callback)
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

