<?php
namespace Cms;

include __DIR__."/config.php";

//Соединение с базой
include __DIR__."/../lib/NotORM.php";
class ConnectionDB
{

    protected static $_instance = null;

    public $db;
    public $pdo;

    protected function __construct(){
        $pdo = new \PDO(DB_HOST, DB_USER, DB_PASS);
        $pdo->exec("set names utf8");
        $this->pdo = $pdo;
        $this->db = new \NotORM($pdo);
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