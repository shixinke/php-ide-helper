<?php
/**
 * Yar Develop Auto Complete
 *
 * Yar轻量级RPC之PhpStorm代码自动补全
 *
 * 本文件使用方式：
 *
 * Yar开发，在IDE中打开/导入本文件即可
 * 如果IDE自带 Include Path 功能(如：PhpStorm)，设置该文件路径即可.
 *
 * PhpStorm 另一种方法:
 * WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件
 * 复制 Yar.php 到路径：com/jetbrains/php/lang/psi/stubs/data/
 * 保存文件，重启Phpstorm.
 *
 * PS:替换前请备份php.jar 若发生错误便于恢复 如有勘误，请联系Phpboy! :)
 *
 * @auther xudianyang<120343758@qq.com>
 * @copyright Copyright (c) 2014 (http://www.phpboy.net)
 */

define('YAR_VERSION',                   "1.2.3");
define('YAR_CLIENT_PROTOCOL_HTTP',      1);
define('YAR_CLIENT_PROTOCOL_TCP',       2);
define('YAR_CLIENT_PROTOCOL_UDP',       3);
define('YAR_CLIENT_PROTOCOL_UNIX',      4);
define('YAR_PACKAGER_PHP',              'PHP');
define('YAR_PACKAGER_JSON',             'JSON');
define('YAR_PACKAGER_MSGPACK',          'MSGPACK');
define('YAR_OPT_PACKAGER',              1);
define('YAR_OPT_PERSISTENT',            2);
define('YAR_OPT_TIMEOUT',               4);
define('YAR_OPT_CONNECT_TIMEOUT',       8);
define('YAR_ERR_OKEY',                  0);
define('YAR_ERR_PACKAGER',              1);
define('YAR_ERR_PROTOCOL',              2);
define('YAR_ERR_REQUEST',               4);
define('YAR_ERR_OUTPUT',                8);
define('YAR_ERR_TRANSPORT',             16);
define('YAR_ERR_FORBIDDEN',             32);
define('YAR_ERR_EXCEPTION',             64);
define('YAR_ERR_EMPTY_RESPONSE',        128);

class Yar_Server
{   protected $_executor;
    final public function __construct($obj){}
    public function handle(){}
}

class Yar_Client {
    protected $_protocol;
    protected $_uri;
    protected $_options;
    protected $_running;
    public function __call($method, $parameters){}
    final public function __construct($url){}
    public function setOpt($name, $value){}
}

class Yar_Concurrent_Client
{
    static $_callstack;
    static $_callback;
    static $_error_callback;
    public static function call($uri, $method, $parameters, $callback){}
    public static function loop($callback, callable $error_callback){}
}

class Yar_Server_Exception extends Exception
{
    protected $_type;
    public function getType(){}
}

class Yar_Server_Request_Exception extends Exception
{
    protected $_type;
    public function getType(){}
}

class Yar_Server_Protocol_Exception extends Exception
{
    protected $_type;
    public function getType(){}
}

class Yar_Server_Packager_Exception extends Exception
{
    protected $_type;
    public function getType(){}
}

class Yar_Server_Output_Exception extends Exception
{
    protected $_type;
    public function getType(){}
}

class Yar_Client_Exception extends Exception
{
    public function getType(){}
}

class Yar_Client_Packager_Exception extends Exception
{
    public function getType(){}
}

class Yar_Client_Protocol_Exception extends Exception
{
    public function getType(){}
}