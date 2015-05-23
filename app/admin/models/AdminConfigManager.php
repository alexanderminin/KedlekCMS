<?php

//Управление настройками
class AdminConfigManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод списка тем
    function readThemes(){

        $dir = 'templates/front';
        $files = glob($dir.'/*');

        return $files;

    }

    //Вывод списка настроек
    function selectConfig(){

        return $this->db->kedlek_config();

    }

    //Обновление настройки
    function updateConfig($config, $value){

        $item = $this->db->kedlek_config()->where('config = ?', $config);


            $data = array(
                "value" => $value
            );

            $result = $item->update($data);

            return $result;

    }


}