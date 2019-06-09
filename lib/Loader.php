<?php
namespace lib;
class Loader{

    static function my_autoload($class)
    {
        require APP_ROOT.'\\'.$class.'.php';
    }
}
