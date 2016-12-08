<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
interface Yaf_View_Interface
{
    /**
     * 
     *
     * @example 
     * @param  mixed $name 
     * @param  mixed $value 
     * @return 
     */
    public abstract  function assign($name, $value);

    /**
     * 
     *
     * @example 
     * @param  mixed $tpl 
     * @param  mixed $tpl_vars 
     * @return 
     */
    public abstract  function display($tpl, $tpl_vars);

    /**
     * 
     *
     * @example 
     * @param  mixed $tpl 
     * @param  mixed $tpl_vars 
     * @return 
     */
    public abstract  function render($tpl, $tpl_vars);

    /**
     * 
     *
     * @example 
     * @param  mixed $template_dir 
     * @return 
     */
    public abstract  function setScriptPath($template_dir);

    /**
     * 
     *
     * @example 
     * @return 
     */
    public abstract  function getScriptPath();

}

