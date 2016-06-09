<?php
/**
 * Yaf Develop Auto Complete
 *
 * Yaf框架之PhpStorm代码自动补全（屏蔽IDE undefined，中文详细文档，比手册更详细,基于Yaf3.0.2）
 * @author shixinke(http://www.shixinke.com)
 * @modified 2016/06/09
 */

define('YAF_VERSION',               '3.0.2');
define('YAF_ENVIRON',                 'dev');
define('YAF_ERR_STARTUP_FAILED',        512);
define('YAF_ERR_ROUTE_FAILED',          513);
define('YAF_ERR_DISPATCH_FAILED',       514);
define('YAF_ERR_AUTOLOAD_FAILED',       520);
define('YAF_ERR_NOTFOUND_MODULE',       515);
define('YAF_ERR_NOTFOUND_CONTROLLER',   516);
define('YAF_ERR_NOTFOUND_ACTION',       517);
define('YAF_ERR_NOTFOUND_VIEW',         518);
define('YAF_ERR_CALL_FAILED',           519);
define('YAF_ERR_TYPE_ERROR',            521);

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Application
 *
 * Yaf应用类，代表一个产品/项目，是Yaf运行的主导者，真正执行的主题，它负责接收请求，协调路由，分发，执行，输出.
 *
 * @package Yaf
 */
final class Yaf_Application
{
    /**
     * (Yaf >= 3.0.2)
     * 全局配置实例
     *
     * 根据实例化Yaf_Application时传入的ini配置文件路径或者配置数组及配置节点名称，实例化的Yaf_Config_Ini或者Yaf_Config_Simple对象.
     *
     * PHP代码可以这样获取：
     *
     * $config = Yaf_Application::app()->getConfig();
     *
     * @var Yaf_Config_Abstract
     */
    protected $config;

    /**
     * (Yaf >= 3.0.2)
     * Yaf_Dispatcher实例,即分发器.
     *
     * PHP代码可以这样获取：
     * $dispatcher = Yaf_Application::app()->getDispatcher();
     *
     * @var Yaf_Dispatcher
     */
    protected $dispatcher;

    /**
     * (Yaf >= 3.0.2)
     * 过特殊的方式实现了单例模式, 此属性保存当前实例.
     *
     * PHP代码可以这样获取：
     * $app = Yaf_Application::app();
     *
     * @var Yaf_Application
     */
    static protected $_app;

    /**
     * (Yaf >= 3.0.2)
     * 存在的模块名, 从配置文件中ap.modules读取.
     *
     * PHP代码可以这样获取：
     * $modules = Yaf_Application::app()->geModules();
     *
     * @var String
     */
    protected $_modules;

    /**
     * (Yaf >= 3.0.2)
     * 指明当前的Yaf_Application是否已经运行.
     *
     * @var Boolean
     */
    protected $_running;

    /**
     * (Yaf >= 3.0.2)
     * 前的环境名, 也就是Yaf_Application在读取配置的时候, 获取的配置节名字.
     * 注：此值只能在Yaf扩展级的配置文件.ini里面进行修改，默认为product.
     *
     * PHP代码可以这样获取：
     * $environ = Yaf_Application::app()->environ();
     *
     * @var String
     */
    protected $_environ;

    /**
     * (Yaf >= 3.0.2)
     * 最近一次发生的错误代码.
     *
     * PHP代码可以这样获取：
     * $err_on = Yaf_Application::app()->getLastErrorNo();
     *
     * @var Int
     */
    protected $_err_no;

    /**
     * (Yaf >= 3.0.2)
     * 最近一次产生的错误信息.
     *
     * PHP代码可以这样获取：
     * $err_msg = Yaf_Application::app()->getLastErrorMsg();
     *
     * @var String
     */
    protected $_err_msg;

    /**
     * (Yaf >= 3.0.2)
     * 获取当前的Yaf_Application实例.
     *
     * @return Yaf_Application
     */
    static public function app(){}

    /**
     * (Yaf >= 3.0.2)
     * 调用bootstrap
     *
     * 指示Yaf_Application去寻找Bootstrap，并按照声明的顺序，执行所有在Bootstrap类中定义的以_init开头的方法.（php.net文档有误）.
     *
     * @return Yaf_Application
     */
    public function bootstrap(){}

    /**
     * (Yaf >= 3.0.2)
     * 运行Yaf_Application
     *
     * @return Boolean
     */
    public function run(){}

    /**
     * (Yaf >= 3.0.2)
     * 清除最近的错误信息，将设置$this->_err_no=0,$this->_err_msg=''.
     *
     * @return Yaf_Application
     */
    public function clearLastError(){}

    /**
     * (Yaf >= 3.0.2)
     * 构造函数，根据配置初始化Yaf_Application
     *
     * @param mixed $config 关联数组的配置, 或者一个指向ini格式的配置文件的路径的字符串.
     *                      如果是一个ini配置文件，那配置文件中应该有一个定义了yaf.environ 的配置节.这个在生产环境中是默认的.
     *                      如果你使用了ini配置文件作为你应用配置的容器，你需要打开yaf.cache_config 来提升性能.
     * @param string $section 加载的配置节点，使用该节点的配置初始化应用.
     * @return Yaf_Application
     */
    public function __construct($config, $section = 'product'){}

    /**
     * (Yaf >= 3.0.2)
     * 运行回调函数，一般在命令行模式下运行.
     *
     * @param callable $entry 回调函数
     * @param mixed $parameter 零个或者多个回调函数参数
     *
     * @return void
     */
    public function execute(callable $entry, $parameter = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前Yaf_Application的环境名,它被定义在yaf.environ，默认值为"product".
     *
     * @return String
     */
    public function environ(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前应用的主目录
     *
     * @return String
     */
    public function getAppDirectory(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取全局配置实例,即$this->config
     *
     * @return Yaf_Config_Abstract
     */
    public function getConfig(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前请求的分发器Yaf_Dispatcher的实例
     *
     * @return Yaf_Dispatcher
     */
    public function getDispatcher(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取最近产生的错误信息.
     *
     * @return String
     */
    public function getLastErrorMsg(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取最近产生的错误代码.
     *
     * @return Int
     */
    public function getLastErrorNo(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取在配置文件中声明的模块，如果没有声明，它的默认值将是"Index".
     *
     * @return String
     */
    public function getModules(){}
    /**
     * (Yaf >= 3.0.2)
     * 设置应用的主目录
     *
     * @param String $directory 目录路径.
     *
     * @return Yaf_Application
     */
    public function setAppDirectory($directory){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法，防止克隆Yaf_Application（因为是单例模式）.
     *
     * @return void
     */
    private function __clone(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__destruct魔术方法.
     *
     * @return void
     */
    public function __destruct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__sleep魔术方法.
     *
     * @return void
     */
    private function __sleep(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__wakeup魔术方法.
     *
     * @return void
     */
    private function __wakeup(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Bootstrap_Abstract
 *
 * Bootstrap是用来在Yaf_Application运行(run)之前做一些初始化工作的机制.
 * 你可以通过继承Yaf_Bootstrap_Abstract来定义自己的Bootstrap类.
 * 在Bootstrap类中所有以"_init"开头的公有的方法, 都会被按照定义顺序依次在Yaf_Application::bootstrap()被调用的时刻调用.
 *
 * @package Yaf
 */
abstract class Yaf_Bootstrap_Abstract{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Dispatcher
 *
 * Yaf_Dispatcher实现了MVC中的C分发，它由Yaf_Application负责初始化，然后由Yaf_Application::run启动，它协调路由来的请求，并分发和执行发现的动作.
 * 并收集动作产生的响应，输出响应给请求者，并在整个过程完成以后返回响应.
 *
 * @package Yaf
 */
final class Yaf_Dispatcher
{
    /**
     * (Yaf >= 3.0.2)
     * 当前请求对象（包含请求的所有信息）.
     *
     * PHP代码可以这样获取：
     * $request = Yaf_Dispatcher::getInstance()->getRequest();
     *
     * @var Yaf_Request_Abstract
     */
    protected $_request;

    /**
     * (Yaf >= 3.0.2)
     * 视图对象.
     *
     * PHP代码可以这样设置并初始化视图对象：
     * Yaf_Dispatcher::getInstance()->setView($view);
     * Yaf_Dispatcher::getInstance()->initView($template_dir, $option);
     *
     * @var Yaf_View_Interface
     */
    protected $_view;

    /**
     * (Yaf >= 3.0.2)
     * 路由器对象.
     *
     * PHP代码可以这样获取：
     * $router = Yaf_Dispatcher::getInstance()->getRouter();
     *
     * @var Yaf_Router
     */
    protected $_router;

    /**
     * (Yaf >= 3.0.2)
     * Yaf_Dispatcher实现了单例模式，此属性保存当前实例.
     *
     * PHP代码可以这样获取：
     * $dispatcher = Yaf_Dispatcher::getInstance();
     *
     * @var Yaf_Dispatcher
     */
    static protected $_instance;

    /**
     * (Yaf >= 3.0.2)
     * 自动渲染功能开关，默认1.
     * 自动渲染是指根据当前请求的控制器Controller和动作Action自动寻找模块文件，加载与渲染模块，之后返回结果或者输出.
     * 如果设置为0，$this->_instantly_flush，$this->_return_response的设置将无效，也即：
     * Yaf_Dispatcher::getInstance()->flushInstantly($flag);
     * Yaf_Dispatcher::getInstance()->returnResponse($flag);
     * 设置无效，并且不会渲染模板.
     *
     * PHP代码可以这样设置：
     * Yaf_Dispatcher::getInstance()->autoRender($flag);
     *
     * @var Boolean
     */
    protected $_auto_render;

    /**
     * (Yaf >= 3.0.2)
     * 返回包含请求正文的响应对象开关，默认为0.
     * 默认情况下，Yaf的自动渲染查找并渲染模板（render，并非display），渲染结果写入Yaf_Response_Abstract实例的_body属性，
     * 在分发器结束分发之后，输出_body（数组遍历输出）属性的值，并清空_body.
     * 设置此属性为1，分发器结束分发之后，不会输出和清空_body，可以通过Yaf_Application的run()，Yaf_Dispatcher的方法dispatch()，
     * 或者Yaf_Controller_Abstract的getResponse()等方法的调用返回响应对象，
     * 进而调用Yaf_Response_Abstract实例的getBody()方法获取响应正文.此属性依赖$this->_auto_render的设置，
     * 当$this->_auto_render=1时，响应正文包括渲染模板的结果，反之则不包括.
     *
     * PHP代码可以这样设置：
     * Yaf_Dispatcher::getInstance()->returnResponse($flag);
     *
     * @var Boolean
     */
    protected $_return_response;

    /**
     * (Yaf >= 3.0.2)
     * 立即输出响应正文开头，默认为0.
     * 默认情况下，Yaf自动渲染调用Yaf_Controller_Abstract的render方法，渲染模板.
     * 当此属性设置为1时，Yaf调用Yaf_Controller_Abstract的display方法，直接渲染并输出，但不设置Yaf_Response_Abstract实例的_body属性.
     *
     * PHP代码可以这样设置：
     * Yaf_Dispatcher::getInstance()->flushInstantly($flag);
     *
     * @var Boolean
     */
    protected $_instantly_flush;

    /**
     * (Yaf >= 3.0.2)
     * 默认模块名
     *
     * PHP代码可以这样设置：
     * Yaf_Dispatcher::getInstance()->setDefaultModule($module);
     *
     * @var String
     */
    protected $_default_module;

    /**
     * (Yaf >= 3.0.2)
     * 默认控制器
     *
     * PHP代码可以这样设置：
     * Yaf_Dispatcher::getInstance()->setDefaultController($controller);
     *
     * @var String
     */
    protected $_default_controller;

    /**
     * (Yaf >= 3.0.2)
     * 默认动作名
     *
     * PHP代码可以这样设置：
     * Yaf_Dispatcher::getInstance()->setDefaultAction($action);
     *
     * @var String
     */
    protected $_default_action;

    /**
     * (Yaf >= 3.0.2)
     * 已注册的插件对象
     *
     * PHP代码可以这样注册插件：
     * Yaf_Dispatcher::getInstance()::registerPlugin(new ModuleInitPlugin());
     *
     * @var Array
     */
    protected $_plugins;

    /**
     * (Yaf >= 3.0.2)
     * 关闭自动渲染模板
     *
     * @return Yaf_Dispatcher
     */
    public function disableView(){}

    /**
     * (Yaf >= 3.0.2)
     * 开启自动渲染模板
     *
     * @return Yaf_Dispatcher
     */
    public function enableView(){}

    /**
     * (Yaf >= 3.0.2)
     * 初始化视图对象
     *
     * @param string $tpl_dir 模板目录
     * @param mixed $options 全局的模板选项（配置相关）
     *
     * @return Yaf_View_Interface
     */
    public function initView($tpl_dir, $options = null){}

    /**
     * (Yaf >= 3.0.2)
     * 设置视图对象
     *
     * @param Yaf_View_Interface $view 视图对象实例
     *
     * @return Yaf_View_Interface
     */
    public function setView(Yaf_View_Interface $view){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求对象（在命令行或者其他API模式下构造请求很有用）
     *
     * @param Yaf_Request_Abstract $request 手动实例化的请求对象
     *
     * @return Yaf_Dispatcher
     */
    public function setRequest(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 3.0.2)
     * 返回应用实例
     *
     * @return Yaf_Application
     */
    public function getApplication(){}

    /**
     * 返回路由器实例
     *
     * @return Yaf_Router
     */
    public function getRouter(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回请求对象实例
     *
     * @return Yaf_Request_Abstract
     */
    public function getRequest(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置一个用户定义的错误处理函数（封装了PHP内置的set_error_handler函数）
     *
     * @param callable $callback PHP中可回调的结构
     * @param $error_type int 处理的错误类型（默认：E_ALL | E_STRICT）
     *
     * @return Yaf_Dispatcher
     */
    public function setErrorHandler(callable $callback, $error_type = 32767){}

    /**
     * (Yaf >= 3.0.2)
     * 设置默认模块
     *
     * @param string $module 模块名
     *
     * @return Yaf_Dispatcher
     */
    public function setDefaultModule($module){}

    /**
     * (Yaf >= 3.0.2)
     * 设置默认的控制器
     *
     * @param string $controller 控制器名
     *
     * @return Yaf_Dispatcher
     */
    public function setDefaultController($controller){}

    /**
     * (Yaf >= 3.0.2)
     * 设置默认的动作名
     *
     * @param string $action
     *
     * @return Yaf_Dispatcher
     */
    public function setDefaultAction($action){}

    /**
     * (Yaf >= 3.0.2)
     * 设置或者返回$this->_return_response属性的值
     * 当传递$flag参数时，设置$this->_return_response=$flag，并返回Dispatcher
     * 当不传递任何参数时，返回$this->_return_response当前值
     *
     * @param boolean $flag
     *
     * @return mixed
     */
    public function returnResponse($flag){}

    /**
     * (Yaf >= 3.0.2)
     * 设置或者返回$this->_auto_render属性的值
     * 当传递$flag参数时，设置$this->_auto_render=$flag，并返回Dispatcher
     * 当不传递任何参数时，返回$this->_auto_render属性的值
     *
     * @param boolean $flag
     *
     * @return mixed
     */
    public function autoRender($flag){}

    /**
     * (Yaf >= 3.0.2)
     * 设置或者返回$this->_instantly_flush属性的值
     * 当传递$flag参数时，设置$this->_instantly_flush=$flag，并返回Dispatcher
     * 当不传递任何参数时，返回$this->_instantly_flush属性的值
     *
     * @param boolean $flag
     *
     * @return mixed
     */
    public function flushInstantly($flag){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前Yaf_Dispatcher实例（单例模式）
     *
     * @return Yaf_Dispatcher
     */
    static public function getInstance(){}

    /**
     * (Yaf >= 3.0.2)
     * 手动分发请求
     *
     * @param Yaf_Request_Abstract $request 分发的请求对象
     *
     * @return Yaf_Response_Abstract
     */
    public function dispatch(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 3.0.2)
     * 开启/关闭异常抛出或返回当前状态
     *
     * 当传递$flag参数时，设置抛出异常，并返回Yaf_Dispatcher
     * 当不传递任何参数时，返回抛出异常状态
     *
     * @param boolean $flag
     *
     * @return mixed
     */
    public function throwException($flag){}

    /**
     * (Yaf >= 3.0.2)
     * 开启/关闭自动异常捕获功能或返回当前状态
     *
     * 当传递$flag参数时，设置自动异常捕获，并返回Yaf_Dispatcher
     * 当不传递任何参数时，返回当前状态
     *
     * 注意：如果开启了Yaf_Dispatcher::catchException() （可以通过设置application.dispatcher.catchException来开启），
     * 并且在你定义了异常处理的controller的情况下，Yaf会将所有未捕获的异常交给Error Controller的Error Action来处理.
     *
     * @param boolean $flag
     *
     * @return mixed
     */
    public function catchException($flag){}

    /**
     * (Yaf >= 3.0.2)
     * 注册插件
     *
     * @param Yaf_Plugin_Abstract $plugin 实例化的插件对象
     *
     * @return Yaf_Dispatcher
     */
    public function registerPlugin(Yaf_Plugin_Abstract $plugin){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__construct魔术方法.
     */
    private function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法，防止克隆Yaf_Dispatcher（因为是单例模式）.
     *
     * @return void
     */
    private function __clone(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__destruct魔术方法.
     *
     * @return void
     */
    public function __destruct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__sleep魔术方法.
     *
     * @return void
     */
    private function __sleep(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__wakeup魔术方法.
     *
     * @return void
     */
    private function __wakeup(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Config_Abstract
 *
 * Yaf_Config_Abstract被设计在应用程序中简化访问和使用配置数据.它为在应用程序代码中访问这样的配置数据提供了一个基于用户接口的嵌入式对象属性.
 * 配置数据可能来自于各种支持等级结构数据存储的媒体.Yaf_Config_Abstract实现了Countable，ArrayAccess和Iterator接口.
 * 这样，可以基于Yaf_Config_Abstract对象使用count()函数和PHP语句如foreach，也可以通过数组方式访问Yaf_Config_Abstract的元素.
 *
 * @package Yaf
 */
abstract class Yaf_Config_Abstract implements Iterator, Countable, ArrayAccess
{
    /**
     * (Yaf >= 3.0.2)
     * 存储已解析的配置
     *
     * PHP代码可以这样获取：
     * $config = Yaf_Application::app()->getConfig()->toArray();
     *
     * @var array
     */
    protected $_config;

    /**
     * (Yaf >= 3.0.2)
     * 配置是否只读，默认为1.
     *
     * @var Boolean
     */
    protected $_readonly;

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Abstract
     */
    abstract function get($name);

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点的值
     *
     * @param string $name
     * @param mixed $value
     * @return boolean
     */
    abstract function set($name, $value);

    /**
     * (Yaf >= 3.0.2)
     * 返回配置只读的状态
     *
     * @return boolean
     */
    abstract function readonly();

    /**
     * (Yaf >= 3.0.2)
     * 将配置转换为数组
     *
     * @return array
     */
    abstract function toArray();

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Abstract
     */
    public function __get($name){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Controller_Abstract
 *
 * Yaf_Controller_Abstract是Yaf的MVC体系的核心部分.
 * MVC是指Model-View-Controller，是一个用于分离应用逻辑和表现逻辑的设计模式.
 * Yaf_Controller_Abstract体系具有可扩展性，可以通过继承已有的类，来实现这个抽象类，从而添加应用自己的应用逻辑.
 * 对于Controller来说, 真正的执行体是在Controller中定义的一个一个的动作, 当然这些动作也可以定义在Controller外.
 *
 * @package Yaf
 */
abstract class Yaf_Controller_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 动作名与动作类文件路径映射数组
     *
     * 如：
     * public $actions = array(
     *      'user' => "actions/article/index/User.php",
     * );
     *
     * 备注：有些时候为了拆分比较大的Controller, 使得代码更加清晰和易于管理, Yaf支持将具体的动作分开定义.
     * 每个动作都需要实现Yaf_Action_Abstract就可以通过定义Yaf_Controller_Abstract::$actions来指明
     * 那些动作对应于具体的那些分离的类.
     *
     * @var array
     */
    public $actions;

    /**
     * (Yaf >= 3.0.2)
     * 当前请求的模块名
     *
     * PHP代码中也可以这样获取：
     * $module = $this->getModuleName();
     *
     * @var String
     */
    protected $_module;

    /**
     * (Yaf >= 3.0.2)
     * 当前请求的控制器名
     *
     * @var String
     */
    protected $_name;

    /**
     * (Yaf >= 3.0.2)
     * 当前请求对象，包括请求的所有相关信息
     *
     * PHP代码中可以这样获取：
     * $request = $this->getRequest();
     *
     * @var Yaf_Request_Abstract
     */
    protected $_request;

    /**
     * (Yaf >= 3.0.2)
     * 当前响应对象，保存响应的所有相关信息
     *
     * PHP代码中也可以这样获取：
     * $response = $this->getResponse();
     *
     * @var Yaf_Response_Abstract
     */
    protected $_response;

    /**
     * (Yaf >= 3.0.2)
     * 储存调用参数
     *
     * PHP代码中可以这样获取：
     * $args = $this->getInvokeArgs();
     *
     * @var array
     */
    protected $_invoke_args;

    /**
     * (Yaf >= 3.0.2)
     * 视图对象
     *
     * PHP代码中也可以这样获取：
     * $view = $this->getView();
     *
     * @var Yaf_View_Interface
     */
    protected $_view;

    /**
     * (Yaf >= 3.0.2)
     * 渲染动作对应的模板，并返回结果
     *
     * @param string $action_name 动作名
     * @param array $var_array 传递到视图对象的参数
     *
     * @return String
     */
    protected function render($action_name, $var_array = array()){}

    /**
     * (Yaf >= 3.0.2)
     * 渲染动作对应的模板，并直接输出结果
     *
     * @param string $action_name 动作名
     * @param array $var_array 传递到视图对象的参数
     *
     * @return String
     */
    protected function display($action_name, $var_array = array()){}

    /**
     * (Yaf >= 3.0.2)
     * 获取请求对象
     *
     * @return Yaf_Request_Abstract
     */
    public function getRequest(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取响应对象
     *
     * @return Yaf_Response_Abstract
     */
    public function getResponse(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前模块名
     *
     * @return String
     */
    public function getModuleName(){}

    /**
     * (Yaf >= 3.0.2)
     * 初始化视图对象
     *
     * @deprecated 一直不可用，调用此方法只会返回Yaf_Controller_Abstract的实例
     *
     * @return Yaf_Controller_Abstract
     */
    public function initView(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回视图对象
     *
     * @return Yaf_View_Interface
     */
    public function getView(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置模板文件目录
     *
     * @param string $path
     *
     * @return Boolean
     */
    public function setViewPath($path){}

    /**
     * (Yaf >= 3.0.2)
     * 获取模板文件目录
     *
     * @return String
     */
    public function getViewPath(){}

    /**
     * (Yaf >= 3.0.2)
     * 将当前的请求转交给另外的Action（对用户来说是透明的，相当于Web服务器的代理）.
     *
     * 调用Yaf_Controller_Abstract::forward()以后，不会直接立即跳转到目的Action执行，
     * 而是会在当前的Action执行完成后，下一轮的DispatchLoop中，交给目的Action.
     * 所以, 如果你希望立即跳转到目的Action, 那么请使用return结束当前的执行流程.
     *
     * @param string $module
     * @param string $controller
     * @param string $action
     * @param string $parameters
     *
     * @return Boolean
     */
    public function forward($module, $controller = null, $action = null, $parameters = null){}

    /**
     * (Yaf >= 3.0.2)
     * 将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpboy.net/"））
     *
     * @param string $url
     *
     * @return Boolean
     */
    public function redirect($url){}

    /**
     * (Yaf >= 3.0.2)
     * 获取全部调用参数
     *
     * @return Array
     */
    public function getInvokeArgs(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取指定调用参数名的值
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getInvokeArg($name){}

    /**
     * (Yaf >= 3.0.2)
     * 屏蔽构造方法
     */
    final public function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 屏蔽克隆的魔术方法
     */
    final public function __clone(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Action_Abstract
 *
 * Yaf_Action_Abstract是MVC中C的动作，一般而言动作都是定义在Yaf_Controller_Abstract的派生类中的.
 * 但是有的时候，为了使得代码清晰，分离一些大的控制器，则可以采用单独定义Yaf_Action_Abstract来实现.
 *
 * @package Yaf
 */
abstract class Yaf_Action_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 当前请求的控制器实例
     *
     * @var Yaf_Controller_Abstract
     */
    protected $_controller;

    /**
     * (Yaf >= 3.0.2)
     * 获取当前请求的控制器实例
     *
     * @return Yaf_Controller_Abstract
     */
    public function getController(){}

    /**
     * (Yaf >= 3.0.2)
     * 动作入口方法，由Yaf框架自动调用
     *
     * @return mixed
     */
    abstract public function execute();
}

/**
 * (Yaf >= 3.0.2)
 * Interface Yaf_View_Interface
 *
 * Yaf_View_Interface是为了提供可扩展的，可自定的视图引擎而设立的视图引擎接口，它定义了用在Yaf上的视图引擎需要实现的方法和功能.
 *
 * @package Yaf
 */
interface Yaf_View_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 传递变量到模板
     *
     * 当只有一个参数时，参数必须是Array类型，可以展开多个模板变量
     *
     * @param string $name 变量名
     * @param string $value 变量值
     *
     * @return Boolean
     */
    public function assign($name, $value = null);

    /**
     * (Yaf >= 3.0.2)
     * 渲染模板并直接输出
     *
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量
     *
     * @return Boolean
     */
    public function display($tpl, $var_array = array());

    /**
     * (Yaf >= 3.0.2)
     * 渲染模板并返回结果
     *
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量
     *
     * @return String
     */
    public function render($tpl, $var_array = array());

    /**
     * (Yaf >= 3.0.2)
     * 设置模板文件目录
     *
     * @param string $tpl_dir 模板文件目录路径
     *
     * @return Boolean
     */
    public function setScriptPath($tpl_dir);

    /**
     * (Yaf >= 3.0.2)
     * 获取模板目录文件
     *
     * @return String
     */
    public function getScriptPath();
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Loader
 *
 * Yaf_Loader类为Yaf提供了自动加载功能，它根据类名中包含的路径信息实现类的定位和自动加载.
 *
 * @package Yaf
 */
final class Yaf_Loader
{
    /**
     * (Yaf >= 3.0.2)
     * 当前应用本地类库目录
     *
     * PHP可以这样获取：
     * $library = Loader::getInstance()->getLibraryPath();
     *
     * @var String
     */
    protected $_library;

    /**
     * (Yaf >= 3.0.2)
     * 全局类库目录
     *
     * PHP可以这样获取：
     * $global_library = Yaf_Loader::getInstance()->getLibraryPath(true);
     *
     * @var String
     */
    protected $_global_library;

    /**
     * (Yaf >= 3.0.2)
     * 当前Loader实例（单例模式）
     *
     * @var Yaf_Loader
     */
    static protected $_instance;

    /**
     * (Yaf >= 3.0.2)
     * 重置__construct魔术方法.
     */
    private function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法，防止克隆Yaf_Loader（因为是单例模式）.
     *
     * @return void
     */
    private function __clone(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__destruct魔术方法.
     *
     * @return void
     */
    public function __destruct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__sleep魔术方法.
     *
     * @return void
     */
    private function __sleep(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__wakeup魔术方法.
     *
     * @return void
     */
    private function __wakeup(){}

    /**
     * (Yaf >= 3.0.2)
     * 自动装载类
     *
     * @param $class string 类名
     *
     * @return Boolean
     */
    public function autoload($class){}

    /**
     * (Yaf >= 3.0.2)
     * 获取Yaf_Loader实例
     *
     * @param string $library 本地类库目录
     * @param string $global 全局类库目录
     *
     * @return Yaf_Loader
     */
    static public function getInstance($library = null, $global = null){}

    /**
     * (Yaf >= 3.0.2)
     * 注册本地类前缀
     *
     * @param mixed $namespace 一个或者多个类前缀
     *
     * @return Boolean
     */
    public function registerLocalNamespace($namespace){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前已经注册的本地类前缀
     *
     * @return String
     */
    public function getLocalNamespace(){}

    /**
     * (Yaf >= 3.0.2)
     * 清空已注册的本地类前缀
     *
     * @return void
     */
    public function clearLocalNamespace(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断一个类, 是否是本地类.
     *
     * @param $class_name string 类名
     *
     * @return Boolean
     */
    public function isLocalName($class_name){}

    /**
     * (Yaf >= 3.0.2)
     * 手动导入文件
     *
     * @param $file string include的全路径文件名
     *
     * @return Boolean
     */
    static public function import($file){}

    /**
     * (Yaf >= 3.0.2)
     * 设置本地或者全局类库目录
     *
     * @param string $library 目录路径
     * @param boolean $global 是否为全局类库
     *
     * @return Boolean
     */
    public function setLibraryPath($library, $global = false){}

    /**
     * (Yaf >= 3.0.2)
     * 获取本地或者全局类库目录
     *
     * @param boolean $global
     *
     * @return String
     */
    public function getLibraryPath($global = false){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Plugin_Abstract
 *
 * Yaf_Plugin_Abstract是Yaf的插件基类，所有应用在Yaf的插件都需要继承实现这个类，这个类定义了7个方法，依次在7个时机的时候被调用.
 *
 * @package Yaf
 */
abstract class Yaf_Plugin_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 在路由之前触发
     *
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

    /**
     * (Yaf >= 3.0.2)
     * 路由结束之后触发
     *
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

    /**
     * (Yaf >= 3.0.2)
     * 分发循环开始之前被触发
     *
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

    /**
     * (Yaf >= 3.0.2)
     * 分发之前触发
     *
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

    /**
     * (Yaf >= 3.0.2)
     * 分发结束之后触发
     *
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}

    /**
     * (Yaf >= 3.0.2)
     * dispatchLoopShutdown
     *
     * @param Yaf_Request_Abstract $request 当前请求对象
     * @param Yaf_Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Registry
 *
 * 对象注册表(或称对象仓库)是一个用于在整个应用空间(application space)内存储对象和值的容器.
 * 通过把对象存储在其中，我们可以在整个项目的任何地方使用同一个对象，这种机制相当于一种全局存储.
 * 我们可以通过Yaf_Registry类的静态方法来使用对象注册表.
 * 另外，由于该类是一个数组对象，你可以使用数组形式来访问其中的类方法.
 *
 * @package Yaf
 */
final class Yaf_Registry
{
    /**
     * (Yaf >= 3.0.2)
     * Registry实例（单例模式）
     *
     * @var Yaf_Registry
     */
    static protected $_instance;

    /**
     * (Yaf >= 3.0.2)
     * 注册变量栈
     *
     * @var array
     */
    protected $_entries;

    /**
     * (Yaf >= 3.0.2)
     * 重置__construct魔术方法.
     */
    private function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法，防止克隆Dispatcher（因为是单例模式）.
     *
     * @return void
     */
    private function __clone(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取注册变量值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    static public function get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 检测变量是否存在
     *
     * @param string $name 变量名
     *
     * @return Boolean
     */
    static public function has($name){}

    /**
     * (Yaf >= 3.0.2)
     * 注册变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Boolean
     */
    static public function set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 删除变量
     *
     * @param string $name
     *
     * @return Boolean
     */
    static public function del($name){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Request_Abstract
 *
 * 代表了一个实际请求，一般的不用自己实例化它，Yaf_Application在run以后会自动根据当前请求实例它.
 *
 * @package Yaf
 */
abstract class Yaf_Request_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 当前请求的模块名
     *
     * PHP也可以这样获取：
     * $this->getModuleName();
     *
     * @var String
     */
    public $module;

    /**
     * (Yaf >= 3.0.2)
     * 当前请求的控制器名
     *
     * PHP也可以这样获取：
     * $this->getControllerName();
     *
     * @var String
     */

    public $controller;

    /**
     * (Yaf >= 3.0.2)
     * 当前请求的动作名
     *
     * PHP也可以这样获取：
     * $this->getActionName();
     *
     * @var String
     */
    public $action;

    /**
     * (Yaf >= 3.0.2)
     * 当前请求的方法 getMethod
     *
     * PHP也可以这样获取：
     * $this->getMethod();
     *
     * @var String
     */
    public $method;

    /**
     * (Yaf >= 3.0.2)
     * 请求传递的参数
     *
     * PHP可以这样获取：
     * $this->getParams();
     *
     * @var Array
     */
    protected $params;

    /**
     * (Yaf >= 3.0.2)
     * http报头中HTTP_ACCEPT_LANGUAGE的值
     *
     * PHP可以这样获取：
     * $this->getLanguage();
     *
     * @var String
     */
    protected $language;

    /**
     * (Yaf >= 3.0.2)
     * 异常对象
     *
     * 异常捕获模式下，在异常发生的情况时流程进入Error控制器的error动作时，获取当前发生的异常对象.
     * PHP可以这样获取：
     * $this->getException();
     *
     * @var Exception
     */
    protected $_exception;

    /**
     * (Yaf >= 3.0.2)
     * 请求的Base URI（http请求 or cli模式下）
     *
     * PHP可以这样获取：
     * $this->getBaseUri();
     *
     * @var String
     */
    protected $_base_uri;

    /**
     * (Yaf >= 3.0.2)
     * 请求的URI（http请求）
     *
     * PHP可以这样获取：
     * $this->getRequestUri();
     *
     * @var String
     */
    protected $uri;

    /**
     * (Yaf >= 3.0.2)
     * 请求是否完成了分发，默认为0
     *
     * @var Boolean
     */
    protected $dispatched;

    /**
     * (Yaf >= 3.0.2)
     * 请求是否完成了路由，默认为0
     *
     * @var Boolean
     */
    protected $routed;

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为GET请求
     *
     * @return Boolean
     */
    public function isGet(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为POST请求
     *
     * @return Boolean
     */
    public function isPost(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为PUT请求
     *
     * @return Boolean
     */
    public function isPut(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为HEAD请求
     *
     * @return Boolean
     */
    public function isHead(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为Options请求
     *
     * @return Boolean
     */
    public function isOptions(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为CLI请求
     *
     * @return Boolean
     */
    public function isCli(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为AJAX请求
     *
     * @return Boolean
     */
    public function isXmlHttpRequest(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取服务器$_SERVER全局变量中的值
     *
     * @param string $name 变量名
     * @param mixed $default 默认值
     *
     * @return mixed
     */
    public function getServer($name, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取环境变量$_ENV全局变量中的值
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getEnv($name, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求的参数
     * 当只有一个参数且为Array类型，如果存在对应的键值将覆盖
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Boolean
     */
    public function setParam($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 获取请求的参数
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getParam($name, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取请求全部的参数
     *
     * @return Array
     */
    public function getParams(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取异常对象
     *
     * 异常捕获模式下，在异常发生的情况时流程进入Error控制器的error动作时，获取当前发生的异常对象.
     *
     * @return Exception
     */
    public function getException(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前模块名
     *
     * @return String
     */
    public function getModuleName(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前控制器名
     *
     * @return String
     */
    public function getControllerName(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前动作名
     *
     * @return String
     */
    public function getActionName(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求的模块名
     *
     * @param string $name 模块名
     *
     * @return Boolean
     */
    public function setModuleName($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求的控制器名
     *
     * @param string $name
     *
     * @return Boolean
     */
    public function setControllerName($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求的动作名
     *
     * @param string $name
     *
     * @return Boolean
     */
    public function setActionName($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前请求的方法
     *
     * @return String
     */
    public function getMethod(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前请求的请求
     *
     * @return String
     */
    public function getLanguage(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求的Base URI
     *
     * @param string $baseuri
     *
     * @return Yaf_Request_Abstract
     */
    public function setBaseUri($baseuri){}

    /**
     * (Yaf >= 3.0.2)
     * 获取请求的Base URI
     *
     * @return String
     */
    public function getBaseUri(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取请求的uri
     *
     * @return String
     */
    public function getRequestUri(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求的URI
     *
     * @param string $uri
     *
     * @return Yaf_Request_Abstract
     */
    public function setRequestUri($uri){}

    /**
     * (Yaf >= 3.0.2)
     * 判断请求是否完成了分发
     *
     * @return Boolean
     */
    public function isDispatched(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求已经完成分发
     *
     * @return Boolean
     */
    public function setDispatched(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断请求是否完成了路由
     *
     * @return Boolean
     */
    public function isRouted(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置请求已经完成了路由
     *
     * @return Yaf_Request_Abstract
     */
    public function setRouted(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Response_Abstract
 *
 * 响应对象和请求对象相对应, 是发送给请求端的响应的载体
 *
 * @package Yaf
 */
abstract class Yaf_Response_Abstract
{

    /**
     * (Yaf >= 3.0.2)
     * 响应报头
     *
     * @var array
     */
    protected $_header;

    /**
     * (Yaf >= 3.0.2)
     * 响应正文
     *
     * @var array
     */
    protected $_body;

    /**
     * (Yaf >= 3.0.2)
     * 是否开启已输出响应报头检测
     *
     * @var Int
     */
    protected $_sendheader = 0;

    /**
     * (Yaf >= 3.0.2)
     * 响应状态码
     *
     * @var Int
     */
    protected $_response_code;

    /**
     * (Yaf >= 3.0.2)
     * 默认响应正文实体名
     *
     * @var string
     */
    public $DEFAULT_BODY = 'content';

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     */
    public function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 析构方法
     */
    public function __destruct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法
     *
     * @return void
     */
    private function __clone(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回响应正文的字符串
     *
     * @return String
     */
    public function __toString(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置类型为$name的响应正文内容
     *
     * @param string $body 响应正文内容（可覆盖原来的）
     * @param string $name 响应正文类型，默认为content
     *
     * @return Boolean
     */
    public function setBody($body, $name = 'content'){}

    /**
     * (Yaf >= 3.0.2)
     * 获取类型为$name的响应正文内容
     *
     * @param string $name 响应正文类型，默认为content
     *
     * @return String
     */
    public function getBody($name = 'content'){}

    /**
     * (Yaf >= 3.0.2)
     * 设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的后面
     *
     * @param string $body 响应正文内容（可追加）
     * @param string $name 响应正文类型，默认为content
     *
     * @return Boolean
     */
    public function appendBody($body, $name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 设置类型为$name的响应正文内容, 如已存在，则追加到原来正文的前面
     *
     * @param string $body 响应正文内容（可追加）
     * @param string $name 响应正文类型，默认为content
     *
     * @return Boolean
     */
    public function prependBody($body, $name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 清空响应正文
     *
     * @deprecated 总是返回false
     *
     * @return Boolean
     */
    public function clearBody(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取响应报头
     *
     * @deprecated 总是返回null
     *
     * @return null
     */
    public function getHeader(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取所有响应报头
     *
     * @deprecated 总是返回false
     *
     * @return Boolean
     */
    public function setAllHeaders(){}

    /**
     * (Yaf >= 3.0.2)
     * 设置响应报头
     *
     * @deprecated 总是返回null
     *
     * @return null
     */
    public function setHeader(){}

    /**
     * (Yaf >= 3.0.2)
     * 清空响应报头
     *
     * @deprecated 总是返回false
     *
     * @return Boolean
     */
    public function clearHeaders(){}

    /**
     * (Yaf >= 3.0.2)
     * 将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpboy.net/"））
     *
     * @param string $url 重定向的绝对URL
     *
     * @return Boolean
     */
    public function setRedirect($url){}

    /**
     * (Yaf >= 3.0.2)
     * 输出所有的响应正文
     *
     * @return Boolean
     */
    public function response(){}
}

/**
 * (Yaf >= 3.0.2)
 * Interface Yaf_Route_Interface
 *
 * Route_Interface是Yaf路由协议的标准接口, 它的存在使得用户可以自定义路由协议
 *
 * @package Yaf
 */
interface Yaf_Route_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request);

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param mixed $query
     * @return String
     */
    public function assemble (array $info, array $query = null);
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Route_Static
 *
 * 默认路由协议
 *
 * @package Yaf
 */
class Yaf_Route_Static implements Yaf_Route_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 匹配请求
     *
     * @deprecated 始终返回true
     *
     * @return Boolean
     */
    public function match(){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param array $query
     * @return String
     */
    public function assemble (array $info, array $query = null){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Router
 *
 * Yaf_Router是标准的框架路由.
 * 路由是一个拿到URI端点（URL中的URI的一部分）然后分解参数得到哪一个module，controller，和action需要接受请求.
 *
 * @package Yaf
 */
final class Yaf_Router
{
    /**
     * (Yaf >= 3.0.2)
     * 路由器已有的路由协议栈, 默认的栈底总是名为"default"的Route_Static路由协议的实例
     *
     * @var Array
     */
    protected $_routes;

    /**
     * (Yaf >= 3.0.2)
     * 在路由成功后, 路由生效的路由协议实例的索引
     *
     * @var String
     */
    protected $_current;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     */
    public function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 往Router中添加新的路由
     *
     * @param string $name
     * @param Yaf_Route_Interface $route
     *
     * @return Yaf_Router
     */
    public function addRoute($name, Yaf_Route_Interface $route){}

    /**
     * (Yaf >= 3.0.2)
     * 向Router中添加配置文件或者配置数组定义的路由
     *
     * @param $config Array | Yaf_Config_Abstract
     *
     * @return Yaf_Router
     */
    public function addConfig($config){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 3.0.2)
     * 获取路由名对应的路由协议实例
     *
     * @param string $name 路由名
     *
     * @return Yaf_Route_Interface
     */
    public function getRoute($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取已注册的所有路由协议
     *
     * @return Array
     */
    public function getRoutes(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取当前路由成功的路由协议实例
     *
     * @return Yaf_Route_Interface
     */
    public function getCurrentRoute(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Session
 *
 * 会话管理类
 *
 * @package Yaf
 */
final class Yaf_Session implements Iterator, ArrayAccess, Countable
{
    /**
     * (Yaf >= 3.0.2)
     * 重置__construct魔术方法.
     */
    private function __construct(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法（因为是单例模式）.
     *
     * @return void
     */
    private function __clone(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__sleep魔术方法.
     *
     * @return void
     */
    private function __sleep(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__wakeup魔术方法.
     *
     * @return void
     */
    private function __wakeup(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取Session实例（单例模式）
     *
     * @return Yaf_Session
     */
    static public function getInstance(){}

    /**
     * (Yaf >= 3.0.2)
     * 开启会话
     *
     * @return Yaf_Session
     */
    public function start(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__destruct魔术方法.
     *
     * @return void
     */
    public function __destruct(){}

    /**
     * (Yaf >= 3.0.2)
     * 魔术方法，当isset()检测session变量是否存在时调用
     *
     * @param string $name 节点名称
     *
     * @return Boolean
     */
    public function __isset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取session变量
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置session变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Yaf_Session
     */
    public function set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 撤消session变量
     *
     * @param string $name 变量名
     *
     * @return Yaf_Session
     */
    public function del($name){}

    /**
     * (Yaf >= 3.0.2)
     * 返回session变量的数量
     *
     * @return Int
     */
    public function count(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置遍历位置
     *
     * @return void
     */
    public function rewind(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前变量
     *
     * @return mixed
     */
    public function current(){}

    /**
     * (Yaf >= 3.0.2)
     * 向前移动到下一个元素
     *
     * @return void
     */
    public function next(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否可以继续遍历
     *
     * @return void
     */
    public function valid(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前配置节点的key
     *
     * @return mixed
     */
    public function key(){}

    /**
     * (Yaf >= 3.0.2)
     * 撤消某个session变量
     *
     * @param string $name 变量名
     *
     * @return Yaf_Session
     */
    public function offsetUnset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 测试某个session变量是否存在
     *
     * @param mixed $name 变量名
     *
     * @return Boolean
     */
    public function offsetExists($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取session变量
     *
     * @param string $name 变量名
     *
     * @return Yaf_Session
     */
    public function offsetGet($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置session变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Yaf_Session
     */
    public function offsetSet($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 获取session变量值
     * 当不传递$name参数时，返回全部变量
     *
     * @param string $name
     * @return mixed
     */
    public function __get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置session变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Yaf_Session
     */
    public function __set($name, $value){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception
 *
 * Yaf异常基类
 *
 * @package Yaf
 */
class Yaf_Exception extends Exception
{
    /**
     * (Yaf >= 3.0.2)
     * 异常信息
     *
     * @var String
     */
    protected $message;

    /*
     * 异常状态码
     *
     * @var Int
     */
    protected $code;

    /**
     * (Yaf >= 3.0.2)
     * 上一个异常对象
     *
     * @var Yaf_Exception
     */
    protected $previous;
}


/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Config_Ini
 *
 * Ini存储在Ini文件的配置数据提供了适配器
 *
 * @package Yaf\Config
 */
final class Yaf_Config_Ini extends Yaf_Config_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 构造方法，初始化Yaf_Config_Ini对象
     *
     * @param string $filename ini文件全路径
     * @param string $section 初始化时的配置节点名称
     */
    public function __construct($filename, $section = null){}

    /**
     * (Yaf >= 3.0.2)
     * 魔术方法，当isset()检测某个配置节点是否存在时调用
     *
     * @param string $name 节点名称
     *
     * @return Boolean
     */
    public function __isset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点值（无效）
     *
     * @deprecated 约定ini文件的配置不可写
     * @param string $name 变量名
     * @param mixed $value
     *
     * @return false
     */
    public function set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 返回配置节点的数量
     *
     * @return Int
     */
    public function count(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置遍历位置（php.net文档有误）
     *
     * @return void
     */
    public function rewind(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前节点
     *
     * @return Yaf_Config_Ini
     */
    public function current(){}

    /**
     * (Yaf >= 3.0.2)
     * 向前移动到下一个元素
     *
     * @return void
     */
    public function next(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否可以继续遍历
     *
     * @return void
     */
    public function valid(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前配置节点的key
     *
     * @return mixed
     */
    public function key(){}

    /**
     * (Yaf >= 3.0.2)
     * 撤消某个配置节点（无效）
     *
     * @deprecated 约定ini文件的配置不可写
     * @param string $name 变量名
     *
     * @return false
     */
    public function offsetUnset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 测某个配置节点是否存在
     *
     * @param mixed $name 节点名称
     *
     * @return Boolean
     */
    public function offsetExists($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点值（无效）
     *
     * @deprecated 约定ini文件的配置不可写
     * @param string $name 变量名
     * @param mixed $value
     *
     * @return false
     */
    public function offsetSet($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Ini
     */
    public function offsetGet($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Ini
     */
    public function get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Ini
     */
    public function __get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点值（无效）
     *
     * @deprecated 约定ini文件的配置不可写
     * @param string $name 变量名
     * @param mixed $value
     *
     * @return false
     */
    public function __set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     *
     * 将配置转化为数组
     *
     * @return array|void
     */
    public function toArray(){}

    /**
     * (Yaf >= 3.0.2)
     *
     * 检测配置是否只读
     *
     * @return Boolean
     */
    public function readonly(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Config_Simple
 *
 * Simple为存储在PHP的数组中的配置数据提供了适配器
 *
 * @package Yaf\Config
 */
final class Yaf_Config_Simple extends Yaf_Config_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 构造方法，初始化Yaf_Config_Simple对象
     *
     * @param string $config 储存配置的数组
     * @param string $readonly 是否只读
     */
    public function __construct($config, $readonly = null){}

    /**
     * (Yaf >= 3.0.2)
     * 魔术方法，当isset()检测某个配置节点是否存在时调用
     *
     * @param string $name 节点名称
     *
     * @return Boolean
     */
    public function __isset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点值
     *
     * @param string $name 节点名称
     * @param mixed $value 节点值
     *
     * @return Boolean
     */
    public function set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 返回配置节点的数量
     *
     * @return Int
     */
    public function count(){}

    /**
     * (Yaf >= 3.0.2)
     * 重置遍历位置（php.net文档有误）
     *
     * @return void
     */
    public function rewind(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前节点
     *
     * @return Yaf_Config_Simple
     */
    public function current(){}

    /**
     * (Yaf >= 3.0.2)
     * 向前移动到下一个元素
     *
     * @return void
     */
    public function next(){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否可以继续遍历
     *
     * @return void
     */
    public function valid(){}

    /**
     * (Yaf >= 3.0.2)
     * 返回当前配置节点的key
     *
     * @return mixed
     */
    public function key(){}

    /**
     * (Yaf >= 3.0.2)
     * 撤消某个配置节点
     *
     * @param string $name 节点名称
     *
     * @return Boolean
     */
    public function offsetUnset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 测某个配置节点是否存在
     *
     * @param mixed $name 节点名称
     *
     * @return Boolean
     */
    public function offsetExists($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Simple
     */
    public function offsetGet($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Simple
     */
    public function get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点值
     *
     * @param string $name 节点名称
     * @param mixed $value 节点值
     *
     * @return Boolean
     */
    public function offsetSet($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Yaf_Config_Simple
     */
    public function __get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 设置配置节点值
     *
     * @param string $name 节点名称
     * @param mixed $value 节点值
     *
     * @return Boolean
     */
    public function __set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     *
     * 将配置转化为数组
     *
     * @return array|void
     */
    public function toArray(){}

    /**
     * (Yaf >= 3.0.2)
     *
     * 检测配置是否只读
     *
     * @return Boolean
     */
    public function readonly(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Request_Http
 *
 * 代表了一个实际的Http请求，一般的不用自己实例化它，Yaf_Application在run以后会自动根据当前请求实例它.
 *
 * @package Yaf\Request
 */
class Yaf_Request_Http extends Yaf_Request_Abstract
{
    const SCHEME_HTTP  = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param string $request_uri Request URI（可选）
     * @param string $base_uri Base URI（可选）
     */
    public function __construct($request_uri = null, $base_uri = null){}
    /**
     * (Yaf >= 3.0.2)
     * 获取$_GET中名为$name的参数值
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getQuery($name = null, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_REQUEST中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getRequest($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_POST中名为$name的参数值
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getPost($name = null, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_COOKIE中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getCookie($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_FILES中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getFiles($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为AJAX请求
     *
     * @return Boolean
     */
    public function isXmlHttpRequest(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取全局变量中的值（扫描顺序为$_POST，$_GET，$_COOKIE，$_SERVER）
     *
     * @param string $name 变量名
     * @param mixed $default 默认值
     *
     * @return mixed
     */
    public function get($name, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法
     *
     * @return void
     */
    private function __clone(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Request_Simple
 *
 * 代表了一个实际的请求，一般的不用自己实例化它，Yaf_Application在run以后会自动根据当前请求实例它.
 *
 * @package Yaf\Request
 */
class Yaf_Request_Simple extends Yaf_Request_Abstract
{
    const SCHEME_HTTP  = 'http';
    const SCHEME_HTTPS = 'https';

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param mixed | string $method 方法名
     * @param mixed | string $module 模块名
     * @param mixed | string $controller 控制器名
     * @param mixed | string $action 动作名
     * @param mixed | array $parameters 请求的参数
     */
    public function __construct($method = null, $module = null, $controller = null, $action = null, $parameters = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_GET中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getQuery($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_REQUEST中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getRequest($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_POST中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getPost($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_COOKIE中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getCookie($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 获取$_FILES中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getFiles($name = null){}

    /**
     * (Yaf >= 3.0.2)
     * 判断是否为AJAX请求
     *
     * @return Boolean
     */
    public function isXmlHttpRequest(){}

    /**
     * (Yaf >= 3.0.2)
     * 获取全局变量中的值（扫描顺序为$_POST，$_GET，$_COOKIE，$_SERVER）
     *
     * @param string $name 变量名
     * @param mixed $default 默认值
     *
     * @return mixed
     */
    public function get($name, $default = null){}

    /**
     * (Yaf >= 3.0.2)
     * 重置__clone魔术方法
     *
     * @return void
     */
    private function __clone(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_View_Simple
 *
 * Yaf_View_Simple是Yaf自带的视图引擎，对于视图模板，就是普通的PHP脚本.
 *
 * @package Yaf\View
 */
class Yaf_View_Simple implements Yaf_View_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 储存所有模板变量
     *
     * @var Array
     */
    protected $_tpl_vars;

    /**
     * (Yaf >= 3.0.2)
     * 模板文件目录
     *
     * @var String
     */
    protected $_tpl_dir;

    /**
     * (Yaf >= 3.0.2)
     * @deprecated 此属性在php-5.4以下版本中适用，用以设置模板渲染的方式，如
     * array(
     *  //开启短标识的解析
     *  'short_tag' => 1,
     * )
     * @var array
     */
    protected $_options;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param string $tpl_dir 模板文件目录
     * @param array $options 此属性在php-5.4以下版本中适用，用以设置模板渲染的方式
     */
    public function __construct($tpl_dir, $options){}

    /**
     * (Yaf >= 3.0.2)
     * 当isset检测某个属性是否存在时自动调用（判断是否传递某个模板变量）
     *
     * @param string $name 模板变量名
     *
     * @return Boolean
     */
    public function __isset($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取某个模板变量的值
     *
     * 当不传递参数是，返回全部的模板变量数组
     *
     * @param string $name 模板变量名
     *
     * @return mixed
     */
    public function __get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 获取某个模板变量的值
     *
     * 当不传递参数是，返回全部的模板变量数组
     *
     * @param string $name 模板变量名
     *
     * @return mixed
     */
    public function get($name){}

    /**
     * (Yaf >= 3.0.2)
     * 传递变量到模板
     *
     * 当只有一个参数时，参数必须是Array类型，可以展开多个模板变量
     *
     * @param string $name 变量名
     * @param string $value 变量值
     *
     * @return Boolean
     */
    public function __set($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 清空某个模板变量的值
     *
     * 当不传递参数是，清空全部的模板变量
     *
     * @param string $name 模板变量名
     *
     * @return mixed
     */
    public function clear($name){}

    /**
     * (Yaf >= 3.0.2)
     * 传递变量到模板
     *
     * 当只有一个参数时，参数必须是Array类型，可以展开多个模板变量
     *
     * @param string $name 变量名
     * @param string $value 变量值
     *
     * @return Boolean
     */
    public function assign($name, $value = null){}

    /**
     * (Yaf >= 3.0.2)
     * 以引用的方式传递变量到模板
     *
     * 当只有一个参数时，参数必须是Array类型，可以展开多个模板变量
     *
     * @param string $name 变量名
     * @param string $value 变量值
     *
     * @return Boolean
     */
    public function assignRef($name, $value){}

    /**
     * (Yaf >= 3.0.2)
     * 渲染模板并直接输出
     *
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量
     *
     * @return Boolean
     */
    public function display($tpl, $var_array = array()){}

    /**
     * (Yaf >= 3.0.2)
     * 渲染模板并返回结果
     *
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量
     *
     * @return String
     */
    public function render($tpl, $var_array = array()){}

    /**
     * (Yaf >= 3.0.2)
     * 设置模板文件目录
     *
     * @param string $tpl_dir 模板文件目录
     *
     * @return Boolean
     */
    public function setScriptPath($tpl_dir){}

    /**
     * (Yaf >= 3.0.2)
     * 获取模板目录文件
     *
     * @return String
     */
    public function getScriptPath(){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Response_Cli
 *
 * Yaf_Response_Cli是在Yaf作为命令行应用的时候默认响应载体
 *
 * @package Yaf\Response
 */
class Yaf_Response_Cli extends Yaf_Response_Abstract{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Response_Http
 *
 * Http是在Yaf作为Web应用的时候默认响应载体
 *
 * @package Yaf\Response
 */
class Yaf_Response_Http extends Yaf_Response_Abstract
{
    /**
     * (Yaf >= 3.0.2)
     * 是否开启已输出响应报头检测
     *
     * @var Int
     */
    protected $_sendheader = 1;

    /**
     * (Yaf >= 3.0.2)
     * 响应状态码
     *
     * @var Int
     */
    protected $_response_code = 200;
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Route_Map
 *
 * Map议是一种简单的路由协议, 它将REQUEST_URI中以'/'分割的节, 组合在一起, 形成一个分层的控制器或者动作的路由结果.
 *
 * @package Yaf\Route
 */
final class Yaf_Route_Map implements Yaf_Route_Interface
{

    /**
     * (Yaf >= 3.0.2)
     * 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     *
     * @var Int
     */
    protected $_ctl_router = 0;

    /**
     * (Yaf >= 3.0.2)
     * 分隔符
     *
     * @var String
     */
    protected $_delimeter;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param $controller_prefer boolean 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     * @param $delim string 表示一个分隔符，如果设置了这个分隔符，那么在REQUEST_URI中，分隔符之前的作为路由信息载体，而之后的作为请求参数.
     */
    public function __construct($controller_prefer = 0, $delim = ''){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param mixed $query
     * @return String
     */
    public function assemble(array $info, array $query = NULL){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Route_Regex
 *
 * 正则路由协议
 *
 * @package Yaf\Route
 */
final class Yaf_Route_Regex implements Yaf_Route_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 匹配模式（正则表达式）
     *
     * @var String
     */
    protected $_route;

    /**
     * (Yaf >= 3.0.2)
     * 路由信息
     *
     * 如：array('module' => 'index', 'controller' => 'index', 'action' => 'index')
     *
     * @var Array
     */
    protected $_default;

    /**
     * (Yaf >= 3.0.2)
     * 模式分组的映射关系
     *
     * 如：array('1' => 'name', '2' => 'age')
     *
     * @var Array
     */
    protected $_maps;

    /**
     * (Yaf >= 3.0.2)
     * 哥也不清楚（实在没有查到作用，源码也没看出所以然，问鸟哥！）
     *
     * @var Array
     */
    protected $_verify;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param string $match 匹配模式（正则表达式）
     * @param array $route 路由信息
     * @param array $map 模式分组的映射关系
     * @param array $verify
     */
    public function __construct($match, $route, $map, $verify){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param array $query
     * @return String
     */
    public function assemble(array $info, array $query = NULL){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Route_Rewrite
 *
 * 重写路由协议
 *
 * @package Yaf\Route
 */
final class Yaf_Route_Rewrite implements Yaf_Route_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 匹配模式（正则表达式）
     *
     * @var String
     */
    protected $_route;

    /**
     * (Yaf >= 3.0.2)
     * 路由信息
     *
     * 如：array('module' => 'index', 'controller' => 'index', 'action' => 'index')
     *
     * @var Array
     */
    protected $_default;


    /**
     * (Yaf >= 3.0.2)
     * 哥也不清楚（实在没有查到作用，源码也没看出所以然，问鸟哥！）
     *
     * @var Array
     */
    protected $_verify;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param string $match 匹配模式（正则表达式）
     * @param array $route 路由信息
     * @param array $verify
     */
    public function __construct($match, $route, $verify){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param array $query
     * @return String
     */
    public function assemble(array $info, array $query = NULL){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Route_Simple
 *
 * 简单路由协议
 *
 * @package Yaf\Route
 */
final class Yaf_Route_Simple implements Yaf_Route_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 模块名
     *
     * @var String
     */
    protected $module;

    /**
     * (Yaf >= 3.0.2)
     * 控制器名
     *
     * @var String
     */
    protected $controller;

    /**
     * (Yaf >= 3.0.2)
     * 动作名
     *
     * @var String
     */
    protected $action;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param string $module 模块名
     * @param string $controller 控制器名
     * @param string $action 动作名
     */
    public function __construct($module, $controller, $action){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param array $query
     * @return String
     */
    public function assemble(array $info, array $query = NULL){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Route_Supervar
 *
 * 全局变量路由协议
 *
 * @package Yaf\Route
 */
final class Yaf_Route_Supervar implements Yaf_Route_Interface
{
    /**
     * (Yaf >= 3.0.2)
     * 全局路由变量名
     *
     * @var String
     */
    protected $_var_name;

    /**
     * (Yaf >= 3.0.2)
     * 构造方法
     *
     * @param $var string 全局路由变量名
     */
    public function __construct($var){}

    /**
     * (Yaf >= 3.0.2)
     * 路由请求
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return Boolean
     */
    public function route(Yaf_Request_Abstract $request){}

    /**
     * (Yaf >= 2.3.2)
     * 组合uri，路由解析的逆操作
     *
     * @param array $info
     * @param array $query
     * @return String
     */
    public function assemble(array $info, array $query = NULL){}
}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_StartupError
 *
 * Yaf App实例启动异常
 *
 * @package Yaf\Exception
 */
class Yaf_Exception_StartupError extends Yaf_Exception{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_RouterFailed
 *
 * 路由异常
 *
 * @package Yaf\Exception
 */
class Yaf_Exception_RouterFailed extends Yaf_Exception{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_DispatchFailed
 *
 * 分发异常
 *
 * @package Yaf\Exception
 */
class Yaf_Exception_DispatchFailed extends Yaf_Exception{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_LoadFailed
 *
 * 装载异常
 *
 * @package Yaf\Exception
 */
class Yaf_Exception_LoadFailed extends Yaf_Exception{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_TypeError
 *
 * 关键类型异常
 *
 * @package Yaf\Exception
 */
class Yaf_Exception_TypeError extends Yaf_Exception{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_LoadFailed_Module
 *
 * 模块加载异常
 *
 * @package Yaf\Exception\LoadFailed
 */
class Yaf_Exception_LoadFailed_Module extends Yaf_Exception_LoadFailed{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_LoadFailed_Controller
 *
 * 控制器加载异常
 *
 * @package Yaf\Exception\LoadFailed
 */
class Yaf_Exception_LoadFailed_Controller extends Yaf_Exception_LoadFailed{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_LoadFailed_Action
 *
 * 动作类加载异常
 *
 * @package Yaf\Exception\LoadFailed
 */
class Yaf_Exception_LoadFailed_Action extends Yaf_Exception_LoadFailed{}

/**
 * (Yaf >= 3.0.2)
 * Class Yaf_Exception_LoadFailed_View
 *
 * 视图加载异常
 *
 * @package Yaf\Exception\LoadFailed
 */
class Yaf_Exception_LoadFailed_View extends Yaf_Exception_LoadFailed{}