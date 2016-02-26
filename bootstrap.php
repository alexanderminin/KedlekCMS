<?php
//ini_set('display_errors', 1);

date_default_timezone_set('Europe/Moscow');
define('ROOT_DIR', __DIR__);
require_once ROOT_DIR . '/vendor/autoload.php';

$app = new \Slim\Slim(include 'config.php');
$app->add(new \Cms\Lib\SlimSessionHandler());

//Подключаем БД
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection([
  'driver'    => $app->config('illuminate_db')['driver'],
  'host'      => $app->config('illuminate_db')['host'],
  'database'  => $app->config('illuminate_db')['database'],
  'username'  => $app->config('illuminate_db')['username'],
  'password'  => $app->config('illuminate_db')['password'],
  'charset'   => $app->config('illuminate_db')['charset'],
  'collation' => $app->config('illuminate_db')['collation'],
  'prefix'    => '',
]);
$capsule->setAsGlobal();

return $app;