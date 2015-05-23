<?php

//Управление настройками
class ConfigManager
{
    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод списка настроек
    function selectConfig(){

        return $this->db->kedlek_config();

    }

    //Вывод списка настроек
    function selectMenu(){

        return $this->db->kedlek_menu()->where("active = ?", 2)->order("ord");

    }


}