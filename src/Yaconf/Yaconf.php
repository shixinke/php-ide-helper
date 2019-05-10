<?php
/**
* Yaconf自动补全类(基于最新的1.0.8-dev版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/05/20
*/

/**
*Yaconf是一个配置容器，它解析ini文件，并在PHP启动时将结果存储在PHP中。
*/
/**
 * php.ini配置选项: 

 * 配置文件目录
 * yaconf.directory=

 * 检查配置文件更新的频率
 * yaconf.check_delay=300

*/
class Yaconf
{
    /**
     * 
     *获取某个配置项
     * @example ;foo.ini
     * name="yaconf"
     * year=2015
     * features[]="fast"
     * features.1="light"
     * features.plus="zero-copy"
     * features.constant=PHP_VERSION
     * features.env=${HOME}
     * var_dump(Yaconf::get("foo"));
     * var_dump(Yaconf::get("foo.features.1"));
     * @param string $name 配置文件名称或配置项名称
     * @return string
     */
    public static  function get(string $name)
    {
    
    }

    /**
     * 
     *检查是否有某个配置项
     * @example Yaconf::has('foo.name')
     * @param string $name 配置文件名称或配置项名称
     * @return bool
     */
    public static  function has(string $name)
    {
    
    }

}

