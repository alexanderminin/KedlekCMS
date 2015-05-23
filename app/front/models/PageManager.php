<?php
//Управление страницами
class PageManager
{
    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод страницы
    function selectPage($url){

        $result = $this->db->kedlek_pages()->select("title, text, seo_title, seo_descr, seo_keywords")->where("url = ?", $url);

        return $result[0];

    }

}