<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*(Yaf >= 3.0.2)
*Class yaf_Application
*/
final class Yaf_Application
{
    /**
     * @var unknown $config 
     * (Yaf >= 3.0.2)
     * 全局配置实例
     * @access protected
    protected $config;

    /**
     * @var unknown $dispatcher 
     * (Yaf >= 3.0.2)
     * yaf_Dispatcher实例,即分发器.
     * @access protected
    protected $dispatcher;

    /**
     * @var unknown $_app 
     * (Yaf >= 3.0.2)
     * 过特殊的方式实现了单例模式, 此属性保存当前实例.
     * @access protected
    protected static  $_app;

    /**
     * @var unknown $_modules 
     * (Yaf >= 3.0.2)
     * 存在的模块名, 从配置文件中ap.modules读取.
     * @access protected
    protected $_modules;

    /**
     * @var unknown $_running 
     * (Yaf >= 3.0.2)
     * 指明当前的yaf_Application是否已经运行.
     * @access protected
    protected $_running    =    '';

    /**
     * @var unknown $_environ 
     * (Yaf >= 3.0.2)
     * 前的环境名, 也就是yaf_Application在读取配置的时候, 获取的配置节名字.
     * 注：此值只能在Yaf扩展级的配置文件.ini里面进行修改，默认为product.
     * @access protected
    protected $_environ    =    'dev';

    /**
     * @var unknown $_err_no 
     * (Yaf >= 3.0.2)
     * 最近一次发生的错误代码.
     * @access protected
    protected $_err_no    =    0;

    /**
     * @var unknown $_err_msg 
     * (Yaf >= 3.0.2)
     * 最近一次产生的错误信息.
     * @access protected
    protected $_err_msg    =    '';

    /**
     * 
     *(Yaf >= 3.0.2)
     *构造函数，根据配置初始化yaf_Application
     * @example 
     * @param mixed $config (Yaf >= 3.0.2)
构造函数，根据配置初始化yaf_Application
     * @param  mixed $environ 
     * @return 
     */
    public function __construct($config, $environ)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *运行yaf_Application
     * @example 
     * @return 
     */
    public function run()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *运行回调函数，一般在命令行模式下运行.
     * @example 
     * @param callable $entry (Yaf >= 3.0.2)
运行回调函数，一般在命令行模式下运行.
     * @param  mixed $... 
     * @return 
     */
    public function execute(Callable $entry, $...)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前的yaf_Application实例.
     * @example 
     * @return 
     */
    public static  function app()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前yaf_Application的环境名,它被定义在yaf.environ，默认值为"product".
     * @example 
     * @return 
     */
    public function environ()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *调用bootstrap
     * @example 
     * @param  mixed $bootstrap 
     * @return 
     */
    public function bootstrap($bootstrap)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取全局配置实例,即$this->config
     * @example 
     * @return 
     */
    public function getConfig()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取在配置文件中声明的模块，如果没有声明，它的默认值将是"Index".
     * @example 
     * @return 
     */
    public function getModules()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前请求的分发器yaf_Dispatcher的实例
     * @example 
     * @return 
     */
    public function getDispatcher()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *设置应用的主目录
     * @example 
     * @param String $directory (Yaf >= 3.0.2)
设置应用的主目录
     * @return 
     */
    public function setAppDirectory($directory)
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取当前应用的主目录
     * @example 
     * @return 
     */
    public function getAppDirectory()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取最近产生的错误代码.
     * @example 
     * @return 
     */
    public function getLastErrorNo()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *获取最近产生的错误信息.
     * @example 
     * @return 
     */
    public function getLastErrorMsg()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *清除最近的错误信息，将设置$this->_err_no=0,$this->_err_msg=''.
     * @example 
     * @return 
     */
    public function clearLastError()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__destruct魔术方法.
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__clone魔术方法，防止克隆yaf_Application（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    }

    /**
     * 
     *(Yaf >= 3.0.2)
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    }

}

