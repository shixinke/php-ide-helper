<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*为应用提供引导和依赖性检查的引导类
*/
namespace Yaf;
final class Application
{
    /**
     * @var Yaf_Config_Abstract $config 
     * 全局配置实例
     * @access protected
     */
    protected $config;

    /**
     * @var Yaf_Dispatcher $dispatcher 
     * yaf_Dispatcher实例,即分发器.
     * @access protected
     */
    protected $dispatcher;

    /**
     * @var Yaf_Application $_app 
     * 过特殊的方式实现了单例模式, 此属性保存当前实例.
     * @access protected
     */
    protected static  $_app;

    /**
     * @var array $_modules 
     * 存在的模块名, 从配置文件中ap.modules读取.
     * @access protected
     */
    protected $_modules    =    array();

    /**
     * @var bool $_running 
     * 指明当前的yaf_Application是否已经运行.
     * @access protected
     */
    protected $_running    =    false;

    /**
     * @var string $_environ 
     * 当前的环境名, 也就是yaf_Application在读取配置的时候, 获取的配置节名字.
     * 注：此值只能在Yaf扩展级的配置文件.ini里面进行修改，默认为product.
     * @access protected
     */
    protected $_environ    =    'product';

    /**
     * @var int $_err_no 
     * 最近一次发生的错误代码.
     * @access protected
     */
    protected $_err_no    =    0;

    /**
     * @var string $_err_msg 
     * 最近一次产生的错误信息.
     * @access protected
     */
    protected $_err_msg    =    '';

    /**
     * 
     *获取当前的yaf_Application实例.
     * @example 
     * @return Yaf_Application|null
     */
    public static  function app(): ?Yaf_Application
    {
    
    }

    /**
     * 
     *调用bootstrap
     * @example 
     * @param Yaf_Bootstrap_Abstract $bootstrap 引导类
     * @return void
     */
    public function bootstrap(Yaf_Bootstrap_Abstract $bootstrap)
    {
    
    }

    /**
     * 
     *运行yaf_Application
     * @example 
     * @return void
     */
    public function run()
    {
    
    }

    /**
     * 
     *清除最近的错误信息，将设置$this->_err_no=0,$this->_err_msg=''.
     * @example 
     * @return Yaf_Application
     */
    public function clearLastError(): Yaf_Application
    {
    
    }

    /**
     * 
     *构造函数，根据配置初始化yaf_Application
     * @example 
     * @param mixed $config 关联数组的配置, 或者一个指向ini格式的配置文件的路径的字符串.
     * @param string $section 加载的配置节点，使用该节点的配置初始化应用.
     * @return 
     */
    public function __construct($config, string $section = 'product')
    {
    
    }

    /**
     * 
     *运行回调函数，一般在命令行模式下运行.
     * @example 
     * @param callable $entry 回调函数
     * @param mixed $parameter 零个或者多个回调函数参数
     * @return void
     */
    public function execute(Callable $entry, $parameter)
    {
    
    }

    /**
     * 
     *获取当前yaf_Application的环境名,它被定义在yaf.environ，默认值为"product".
     * @example 
     * @return string
     */
    public function environ(): string
    {
    
    }

    /**
     * 
     *获取当前应用的主目录
     * @example 
     * @return string
     */
    public function getAppDirectory(): string
    {
    
    }

    /**
     * 
     *获取全局配置实例,即$this->config
     * @example 
     * @return Yaf_Config_Abstract
     */
    public function getConfig(): Yaf_Config_Abstract
    {
    
    }

    /**
     * 
     *获取当前请求的分发器yaf_Dispatcher的实例
     * @example 
     * @return Yaf_Dispatcher
     */
    public function getDispatcher(): Yaf_Dispatcher
    {
    
    }

    /**
     * 
     *获取最近产生的错误信息.
     * @example 
     * @return string
     */
    public function getLastErrorMsg(): string
    {
    
    }

    /**
     * 
     *获取最近产生的错误代码.
     * @example 
     * @return int
     */
    public function getLastErrorNo(): int
    {
    
    }

    /**
     * 
     *获取在配置文件中声明的模块，如果没有声明，它的默认值将是"Index".
     * @example 
     * @return array
     */
    public function getModules(): array
    {
    
    }

    /**
     * 
     *设置应用的主目录
     * @example 
     * @param String $directory 目录路径.
     * @return Yaf_Application
     */
    public function setAppDirectory(String $directory): Yaf_Application
    {
    
    }

    /**
     * 
     *重置__clone魔术方法，防止克隆yaf_Application（因为是单例模式）.
     * @example 
     * @return 
     */
    private function __clone()
    {
    
    }

    /**
     * 
     *重置__destruct魔术方法.
     * @example 
     * @return 
     */
    public function __destruct()
    {
    
    }

    /**
     * 
     *重置__sleep魔术方法.
     * @example 
     * @return 
     */
    private function __sleep()
    {
    
    }

    /**
     * 
     *重置__wakeup魔术方法.
     * @example 
     * @return 
     */
    private function __wakeup()
    {
    
    }

}

