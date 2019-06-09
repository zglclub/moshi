<?php

//自动加载
define('APP_ROOT',__DIR__);

require_once APP_ROOT.'\lib\Loader.php';
spl_autoload_register('lib\Loader::my_autoload') ;

app\Mysql::conn();


//自动载入app;
$b =app\SingLeton::instance();
var_dump($b);
$a =app\SingLeton::instance();
var_dump($a);

$inde = \app\controller\index\Index::index();
