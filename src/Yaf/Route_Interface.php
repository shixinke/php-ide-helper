<?php
/**
* Yaf自动补全类(基于最新的3.0.4版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2016/12/08
*/

/**
*
*/
namespace Yaf;
interface Route_Interface
{
    /**
     * 
     *
     * @example 
     * @param  mixed $request 
     * @return 
     */
    public abstract  function route($request);

    /**
     * 
     *
     * @example 
     * @param array $info 
     * @param array $query 
     * @return 
     */
    public abstract  function assemble(Array $info, Array $query);

}

