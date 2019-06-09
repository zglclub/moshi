<?php
namespace app;
/**
*单列模式
*/
class SingLeton
{
    static $instance =null;
    //禁用构造器
    private function __construct()
    {

    }
    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
            return self::$instance;
        }
        return self::$instance;

    }
    /**
    *禁用克隆
    */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

}
