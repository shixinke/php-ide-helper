<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*一个高性能的序列化库,其特性如下：1、序列化后的结果为二进制格式，只适合机器读取，不适合人读;2、序列化性能更高，可节省大量CPU资源;3、序列化后的结果数据尺寸更小，可节省内存资源
*/
class swoole_serialize
{
    /**
     * 
     *将PHP变量序列化
     * @example 
     * @param mixed $data 为要进行序列化的变量，请注意function和resource类型的变量是不支持序列化的
     * @param int $flag 是否启用快速模式，swoole_serialize默认会使用静态表保存关联数组的Key，设置此参数为SWOOLE_FAST_PACK后将不再保存数组key
     * @return string | boolean
     */
    public static  function pack($data, int $flag): ?string
    {
    
    }

    /**
     * 
     *反序列化
     * @example 
     * @param string $string 序列化数据，必须是由pack函数生成
     * @param int $args 反序列化附加参数，使用UNSERIALIZE_OBJECT_TO_ARRAY或UNSERIALIZE_OBJECT_TO_STDCLASS等常量
     * @return mixed
     */
    public static  function unpack(string $string, int $args)
    {
    
    }

}

