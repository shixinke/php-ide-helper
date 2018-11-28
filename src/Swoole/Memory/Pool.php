<?php
/**
* Swoole自动补全类(基于最新的4.2.9版本)
* @author shixinke(http://www.shixinke.com)
* @modified 2018/11/28
*/

/**
*内存池
*/
namespace Swoole\Memory;
class Pool
{
    /**     
    *
    */
    const TYPE_RING    =    1;

    /**     
    *
    */
    const TYPE_GLOBAL    =    2;

    /**     
    *
    */
    const TYPE_FIXED    =    0;

    /**     
    *
    */
    const TYPE_MALLOC    =    3;

    /**     
    *
    */
    const TYPE_EMALLOC    =    4;

    /**
     * 
     *初始化内存池
     * @example 
     * @param int $size 内存池大小
     * @param int $type 内存池类型(使用类常量)
     * @param int $slice_size 切片大小
     * @param bool $shared 是否共享
     * @return 
     */
    public function __construct(int $size, int $type, int $slice_size, bool $shared)
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
     *分配内存
     * @example 
     * @param int $size 分配的从内存大小
     * @return bool
     */
    public function alloc(int $size): bool
    {
    
    }

}

