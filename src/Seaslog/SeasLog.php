<?php
/**
* Seaslog自动补全类(基于最新的1.6.8版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/23
*/

/**
*
*/
/**
 * php.ini配置选项: 

 * 
 * seaslog.default_basepath=/var/log/www

 * 
 * seaslog.default_logger=default

 * 
 * seaslog.default_datetime_format=Y:m:d H:i:s

 * 
 * seaslog.disting_type=0

 * 
 * seaslog.disting_by_hour=0

 * 
 * seaslog.use_buffer=0

 * 
 * seaslog.trace_error=1

 * 
 * seaslog.trace_exception=0

 * 
 * seaslog.buffer_size=0

 * 
 * seaslog.level=0

 * 
 * seaslog.appender=1

 * 
 * seaslog.remote_host=127.0.0.1

 * 
 * seaslog.remote_port=514

*/
/**

*/
define('SEASLOG_VERSION', '1.6.8');
/**

*/
define('SEASLOG_AUTHOR', 'Chitao.Gao  [ neeke@php.net ]');
/**

*/
define('SEASLOG_ALL', 'all');
/**

*/
define('SEASLOG_DEBUG', 'debug');
/**

*/
define('SEASLOG_INFO', 'info');
/**

*/
define('SEASLOG_NOTICE', 'notice');
/**

*/
define('SEASLOG_WARNING', 'warning');
/**

*/
define('SEASLOG_ERROR', 'error');
/**

*/
define('SEASLOG_CRITICAL', 'critical');
/**

*/
define('SEASLOG_ALERT', 'alert');
/**

*/
define('SEASLOG_EMERGENCY', 'emergency');
/**

*/
define('SEASLOG_DETAIL_ORDER_ASC', 1);
/**

*/
define('SEASLOG_DETAIL_ORDER_DESC', 2);
/**

*/
define('SEASLOG_APPENDER_FILE', 1);
/**

*/
define('SEASLOG_APPENDER_TCP', 2);
/**

*/
define('SEASLOG_APPENDER_UDP', 3);
/**
* 
*
* @example 
* @return 
*/
function seaslog_get_version()
{
}

/**
* 
*
* @example 
* @return 
*/
function seaslog_get_author()
{
}

class SeasLog
{
    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __construct()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function setBasePath($basePath)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function getBasePath()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function setLogger($module)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function getLastLogger()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function setDatetimeFormat($format)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function getDatetimeFormat()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function analyzerCount($level = 'all', $log_path = '*', $key_word = NULL)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function analyzerDetail($level = SEASLOG_INFO, $log_path = '*', $key_word = NULL, $start = 1, $limit = 20, $order = SEASLOG_DETAIL_ORDER_ASC)
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function getBuffer()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function flushBuffer()
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function log($level, $message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function debug($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function info($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function notice($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function warning($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function error($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function critical($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function alert($message, array $content = array(), $module = '')
    {
    }

    /**
     * 
     *
     * @example 
     * @return 
     */
    public static  function emergency($message, array $content = array(), $module = '')
    {
    }

}

