<?php

//Первичная установка
if(file_exists('app/config.php')){

    if(file_exists('install.php')){

        unlink('install.php');

    }

    include "app/config.php";

}else{

    if(file_exists('install.php')){

        header('Location: /install.php');
        exit();

    }else{

        echo 'Фаил install.php - отсутствует.';
        exit();

    }

}

//Соединение с базой
include "lib/NotORM.php";
class ConnectionDB
{

    protected static $_instance = null;

    public $db;
    public $pdo;

    protected function __construct(){
        $pdo = new PDO(DB_HOST, DB_USER, DB_PASS);
        $pdo->exec("set names utf8");
        $this->pdo = $pdo;
        $this->db = new NotORM($pdo);
        //$this->db->debug = true;
    }

    protected function __clone(){}

    public static function getInstance(){

        if(self::$_instance == null){
            self::$_instance = new self;
        }
        return self::$_instance;

    }

    function __destruct(){
        unset($this->db);
    }

}