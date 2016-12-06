<?php
/**
* Yaf_Application自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/06
*/

/**
Yaf应用类，代表一个产品/项目，是Yaf运行的主导者，真正执行的主题，它负责接收请求，协调路由，分发，执行，输出
*/
class Yaf_Application
{

     /**

     * (Yaf >= 3.0.2)
     * 全局配置实例
     * 根据实例化Yaf_Application时传入的ini配置文件路径或者配置数组及配置节点名称，实例化的Yaf_Config_Ini或者Yaf_Config_Simple对象.
     * 
     * PHP代码可以这样获取：
     * 
     * $config = Yaf_Application::app()->getConfig();
     * @var Yaf_Config_Abstract
     */
    protected $config;

     /**
应用分发器对象
     */
    protected $dispatcher;

     /**
当前应用对象
     */
    protected static  $_app;

     /**
当前模块对象
     */
    protected $_modules;

     /**
运行状态
     */
    protected $_running    =    "";

     /**
当前应用环境
     */
    protected $_environ    =    "dev";

     /**
错误编号
     */
    protected $_err_no    =    0;

     /**
错误信息
     */
    protected $_err_msg    =    "";
    /**
     * 构造方法
     * @param mixed $config:配置参数 
     * @param unknown $environ:环境 
     * @example 
     * @return 
     */
    public function __construct($config, $environ)
    {
    }

    /**
     * 运行应用
     * @example 
     * @return 
     */
    public function run()
    {
    }

    /**
     * 执行操作
     * @param unknown $entry:入口 
     * @param 其他参数 $...: [备选值：()]
     * @example 
     * @return 
     */
    public function execute($entry,  $_multi_unknown_params)
    {
    }

    /**
     * 获取当前应用
     * @example 
     * @return 
     */
    public static  function app()
    {
    }

    /**
     * 获取当前环境
     * @example 
     * @return 
     */
    public function environ()
    {
    }

    /**
     * 启动操作
     * @param unknown $bootstrap: 
     * @example 
     * @return 
     */
    public function bootstrap($bootstrap)
    {
    }

    /**
     * 获取应用配置
     * @example 
     * @return 
     */
    public function getConfig()
    {
    }

    /**
     * 获取模块列表
     * @example 
     * @return 
     */
    public function getModules()
    {
    }

    /**
     * 获取当前分发器
     * @example 
     * @return 
     */
    public function getDispatcher()
    {
    }

    /**
     * 设置应用目录
     * @param string $directory:应用目录 
     * @example 
     * @return 
     */
    public function setAppDirectory($directory)
    {
    }

    /**
     * 获取应用目录
     * @example 
     * @return 
     */
    public function getAppDirectory()
    {
    }

    /**
     * 获取最近一次的错误号
     * @example 
     * @return 
     */
    public function getLastErrorNo()
    {
    }

    /**
     * 获取最近一次的错误信息
     * @example 
     * @return 
     */
    public function getLastErrorMsg()
    {
    }

    /**
     * 清空上次错误
     * @example 
     * @return 
     */
    public function clearLastError()
    {
    }

    /**
     * 析构方法
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 克隆方法
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 当一个对象被串行化(序列化),PHP会调用__sleep方法(如果存在的话)
     * @example 
     * @return 
     */
    private function __sleep()
    {
    }

    /**
     * 反序列化前调用方法
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    }

}
