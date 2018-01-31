<?php
/**
* Seaslog自动补全类(基于最新的1.7.6版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/01/31
*/

/**
*一个高效的、快速的、稳定的日志扩展
*/
/**
 * php.ini配置选项: 

 * 日志根目录
 * seaslog.default_basepath=/var/log/www

 * 日志默认目录
 * seaslog.default_logger=default

 * 时间格式
 * seaslog.default_datetime_format=Y-m-d H:i:s

 * 默认模板格式
 * seaslog.default_template=%T | %L | %P | %Q | %t | %M

 * 以类型分割文件
 * seaslog.disting_type=0

 * 以小时分割文件
 * seaslog.disting_by_hour=0

 * 是否使用日志缓冲区
 * seaslog.use_buffer=0

 * 是否自动记录错误
 * seaslog.trace_error=1

 * 是否自动记录异常
 * seaslog.trace_exception=0

 * 日志缓冲区大小
 * seaslog.buffer_size=0

 * 日志级别
 * seaslog.level=8

 * 日志存储媒介
 * seaslog.appender=1

 * 日志服务器地址
 * seaslog.remote_host=127.0.0.1

 * 日志服务器端口号
 * seaslog.remote_port=514

 * 过滤日志中的回车和换行符
 * seaslog.trim_wrap=0

 * 是否开启抛出SeasLog自身异常
 * seaslog.throw_exception=1

 * 是否开启忽略SeasLog自身warning
 * seaslog.ignore_warning=1

*/
/**
seasLog版本
*/
define('SEASLOG_VERSION', '1.7.6');
/**
seasLog作者
*/
define('SEASLOG_AUTHOR', 'Chitao.Gao  [ neeke@php.net ]');
/**
所有日志级别
*/
define('SEASLOG_ALL', 'ALL');
/**
调试日志级别
*/
define('SEASLOG_DEBUG', 'DEBUG');
/**
普通日志级别
*/
define('SEASLOG_INFO', 'INFO');
/**
警告日志级别
*/
define('SEASLOG_NOTICE', 'NOTICE');
/**
报警日志级别
*/
define('SEASLOG_WARNING', 'WARNING');
/**
错误日志级别
*/
define('SEASLOG_ERROR', 'ERROR');
/**
严重错误日志级别
*/
define('SEASLOG_CRITICAL', 'CRITICAL');
/**
警报日志级别
*/
define('SEASLOG_ALERT', 'ALERT');
/**
紧急日志级别
*/
define('SEASLOG_EMERGENCY', 'EMERGENCY');
/**
正序排列
*/
define('SEASLOG_DETAIL_ORDER_ASC', 1);
/**
倒序排列
*/
define('SEASLOG_DETAIL_ORDER_DESC', 2);
/**
通过文件存储日志
*/
define('SEASLOG_APPENDER_FILE', 1);
/**
通过TCP连接上报日志
*/
define('SEASLOG_APPENDER_TCP', 2);
/**
通过UDP连接上报日志
*/
define('SEASLOG_APPENDER_UDP', 3);
/**
* 
*获取seaslog版本
* @example 
* 
* @return string
*/
function seaslog_get_version()
{
}

/**
* 
*获取seasLog作者信息
* @example 
* 
* @return string
*/
function seaslog_get_author()
{
}

class SeasLog
{
    /**
     * 
     *初始化
     * @example 
     * @return 
     */
    public function __construct()
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
     *设置日志根目录
     * @example 
     * @param string $basePath 日志根目录
     * @return boolean
     */
    public static  function setBasePath($basePath)
    {
    }

    /**
     * 
     *获取日志根目录
     * @example 
     * @return string
     */
    public static  function getBasePath()
    {
    }

    /**
     * 
     *设置模块目录
     * @example 
     * @param string $module 日志模块目录
     * @return boolean
     */
    public static  function setLogger($module)
    {
    }

    /**
     * 
     *获取最后一次设置的模块目录
     * @example 
     * @return string
     */
    public static  function getLastLogger()
    {
    }

    /**
     * 
     *设置本次请求标识
     * @example 
     * @param string $request_id 请求标识
     * @return boolean
     */
    public static  function setRequestID($request_id)
    {
    }

    /**
     * 
     *获取本次请求标识
     * @example 
     * @return string
     */
    public static  function getRequestID()
    {
    }

    /**
     * 
     *设置日期时间格式
     * @example 
     * @param string $format 时间格式()
     * @return boolean
     */
    public static  function setDatetimeFormat($format)
    {
    }

    /**
     * 
     *获取时间格式
     * @example 
     * @return string
     */
    public static  function getDatetimeFormat()
    {
    }

    /**
     * 
     *统计所有类型的行数
     * @example 
     * @param string $level 日志级别
     * @param string $log_path 日志目录
     * @param string $keyword 关键词
     * @return array
     */
    public static  function analyzerCount($level, $log_path, $keyword)
    {
    }

    /**
     * 
     *以数组形式，快速取出某类型log的各行详情
     * @example 
     * @param string $level 日志级别
     * @param string $log_path 日志目录
     * @param string $keyword 关键词
     * @param int $start 起始行数
     * @param int $limit 取的条数
     * @param int $order 排序值(使用SEASLOG_DETAIL_ORDER_ASC和SEASLOG_DETAIL_ORDER_DESC)
     * @return array
     */
    public static  function analyzerDetail($level, $log_path, $keyword, $start, $limit, $order)
    {
    }

    /**
     * 
     *获得当前日志buffer中的内容
     * @example 
     * @return array
     */
    public static  function getBuffer()
    {
    }

    /**
     * 
     *将buffer中的日志立刻刷到硬盘
     * @example 
     * @return 
     */
    public static  function flushBuffer()
    {
    }

    /**
     * 
     *通用记录日志方法
     * @example 
     * @param string $level 日志级别
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function log($level, $message, Array $content, $module)
    {
    }

    /**
     * 
     *记录debug日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function debug($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录info日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function info($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录notice日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function notice($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录warning日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function warning($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录错误日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function error($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录严重错误日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function critical($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录严重警告日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function alert($message, Array $content, $module)
    {
    }

    /**
     * 
     *记录emergency日志
     * @example 
     * @param string $message 日志内容
     * @param array $content 日志内容替换部分
     * @param string $module 模块目录
     * @return 
     */
    public static  function emergency($message, Array $content, $module)
    {
    }

}

