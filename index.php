<?php
//ini_set('display_errors', 1);
session_start();
date_default_timezone_set('Europe/Moscow');

//Инициализируем автозагрузку
define('ROOT_DIR', __DIR__);
require_once ROOT_DIR . '/vendor/autoload.php';

//Загружаем настройки приложения
$app = new \Slim\Slim(include 'config.php');

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

//Подключаем роуты
require __DIR__ . '/routes.php';

//Запускаем приложение
$app->run();