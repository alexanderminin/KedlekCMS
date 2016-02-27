<?php
namespace Cms\Front\Models;

use Cms\ConnectionDB;

//Управление категориями
class FrontCategoryManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод категории
    function selectCategory($url){

      $result = $this->db->kedlek_category()->select("id, title, seo_title, seo_descr, seo_keywords")->where("url = ?", $url);

        foreach ($result as $res) {
          $category['id'] = $res['id'];
          $category['title'] = $res['title'];
          $category['seo_title'] = $res['seo_title'];
          $category['seo_descr'] = $res['seo_descr'];
          $category['seo_keywords'] = $res['seo_keywords'];
        }

      return $category;

    }

    //Вывод записей
    function selectRecords($id){

      $result = $this->db->kedlek_category_records()->select("url, title, descr, file, datetime")->where('category_id = ?', $id);

      $c = 0;

      foreach ($result as $res) {

          $records[$c]['url'] = $res['url'];
          $records[$c]['title'] = $res['title'];
          $records[$c]['descr'] = $res['descr'];
          $records[$c]['file'] = $res['file'];
          $records[$c]['datetime'] = $res['datetime'];

          $c++;

      }

      return $records;

    }

}