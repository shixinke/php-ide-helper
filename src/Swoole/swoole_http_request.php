<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*http请求对象，保存了Http客户端请求的相关信息，包括GET、POST、COOKIE、Header等
*/
class swoole_http_request
{
    /**
     * @var int $fd 
     * http连接句柄
     * @access public
     */
    public $fd    =    0;

    /**
     * @var int $streamId 
     * 
     * @access public
     */
    public $streamId    =    0;

    /**
     * @var array $header 
     * 请求头（每个key都是小写）
     * @access public
     */
    public $header    =    array();

    /**
     * @var array $server 
     * 请求相当的服务器信息,相当于$_SERVER
     * @access public
     */
    public $server    =    array();

    /**
     * @var array $request 
     * 请求服务器信息，相当于$_REQUEST
     * @access public
     */
    public $request    =    array();

    /**
     * @var array $cookie 
     * 请求中的cookie数据
     * @access public
     */
    public $cookie    =    array();

    /**
     * @var array $get 
     * get请求参数
     * @access public
     */
    public $get    =    array();

    /**
     * @var array $files 
     * 请求中的文件上传信息
     * name 浏览器上传时传入的文件名称
     * @access public
     */
    public $files    =    array();

    /**
     * @var array $post 
     * post请求数据
     * @access public
     */
    public $post    =    array();

    /**
     * @var array $tmpfiles 
     * 临时文件信息
     * @access public
     */
    public $tmpfiles    =    array();

    /**
     * 
     *获取请求的原始数据
     * @example 
     * @return string
     */
    public function rawcontent(): string
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
     *析构函数
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

}

