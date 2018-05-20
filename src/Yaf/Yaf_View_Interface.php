<?php
/**
* Yaf自动补全类(基于最新的3.0.7版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*视图接口
*/
interface Yaf_View_Interface
{
    /**
     * 
     *传递变量到模板
     * @example 
     * @param string $name 变量名
     * @param string $value 变量值
     * @return 
     */
    public function assign(string $name, string $value);

    /**
     * 
     *渲染模板并直接输出
     * @example 
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量数组
     * @return 
     */
    public function display(string $tpl, Array $var_array = []);

    /**
     * 
     *渲染模板并返回结果
     * @example 
     * @param string $tpl 模板文件名
     * @param array $var_array 模板变量数组
     * @return 
     */
    public function render(string $tpl, Array $var_array = []);

    /**
     * 
     *设置模板文件目录
     * @example 
     * @param string $tpl_dir 模板文件目录
     * @return 
     */
    public function setScriptPath(string $tpl_dir);

    /**
     * 
     *获取模板目录文件
     * @example 
     * @return string
     */
    public function getScriptPath(): string;

}

