<?php
/**
* Xhprof自动补全类(基于最新的0.9.5版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/28
*/

/**
*XHProf是PHP的一个功能级分层探查器，并有一个简单的基于HTML的导航界面
*/
/**
 * php.ini配置选项: 

 * 分析文件输出目录
 * xhprof.output_dir=

*/
/**
非内置的指标
*/
define('XHPROF_FLAGS_NO_BUILTINS', 1);
/**
CPU指标
*/
define('XHPROF_FLAGS_CPU', 2);
/**
内存指标
*/
define('XHPROF_FLAGS_MEMORY', 4);
/**
* 
*启用xhprof，即打标起始位置
* @example 
* xhprof_enable();
* xhprof_enable(XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_CPU | XHPROF_FLAGS_MEMORY);
* xhprof_enable(
*     0,
*     array('ignored_functions' =>  array('call_user_func', 'call_user_func_array'))
* );
* @param int $flags
* @param array $options
* @return 
*/
function xhprof_enable($flags, Array $options)
{
}

/**
* 
*分析结束(即打标结束)
* @example 
* 
* @return 
*/
function xhprof_disable()
{
}

/**
* 
*采样开始
* @example 
* 
* @return 
*/
function xhprof_sample_enable()
{
}

/**
* 
*采样结束
* @example 
* 
* @return 
*/
function xhprof_sample_disable()
{
}

