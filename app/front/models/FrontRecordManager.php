<?php
namespace Cms\Front\Models;

use Cms\ConnectionDB;

//Управление записью
class FrontRecordManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }
    
    //Вывод записи
    function selectRecord($url){

      $result = $this->db->kedlek_category_records()->select("title, text, seo_title, seo_descr, seo_keywords, file, thumb, datetime, category_id")->where("url = ?", $url);

        foreach ($result as $res) {
          $record['title'] = $res['title'];
          $record['text'] = $res['text'];
          $record['seo_title'] = $res['seo_title'];
          $record['seo_descr'] = $res['seo_descr'];
          $record['seo_keywords'] = $res['seo_keywords'];
          $record['file'] = $res['file'];
          $record['thumb'] = $res['thumb'];
          $record['datetime'] = $res['datetime'];
          $record['category_id'] = $res['category_id'];
        }

      $parent = $this->db->kedlek_category[$record['category_id']];
      $record['parent_url'] = $parent['url'];
      $record['parent_title'] = $parent['title'];

      return $record;

    }

}