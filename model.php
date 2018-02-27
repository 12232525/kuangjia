<?php
require './vendor/autoload.php';
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  =>'wenjuan',
    'username'  => 'root',
    'password'  =>'root' ,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    =>'',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

