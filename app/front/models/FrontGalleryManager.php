<?php
namespace Cms\Front\Models;

use Cms\ConnectionDB;

//Управление галерей
class FrontGalleryManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }
    
    //Вывод раздела
    function selectGalleryList($url){

      $result = $this->db->kedlek_gallery_list()->where("url = ?", $url);

        foreach ($result as $res) {
          $gallery['id'] = $res['id'];
          $gallery['title'] = $res['title'];
          $gallery['seo_title'] = $res['seo_title'];
          $gallery['seo_descr'] = $res['seo_descr'];
          $gallery['seo_keywords'] = $res['seo_keywords'];
        }

      return $gallery;

    }

    //Вывод списка галереи
    function selectGalleryAll($gallery_list_id){

      $result = $this->db->kedlek_gallery()->where("gallery_list_id = ?", $gallery_list_id);

      $c = 0;
      foreach ($result as $res) {

          $gallery[$c]['file'] = $res['file'];
          $gallery[$c]['thumb'] = $res['thumb'];
          $gallery[$c]['title'] = $res['title'];
          $gallery[$c]['datetime'] = $res['datetime'];
          $gallery[$c]['descr'] = $res['descr'];
          $gallery[$c]['url'] = $res['url'];
          $gallery[$c]['type'] = $res['type'];

          $c++;

      }

      return $gallery;

    }

    //Вывод галереи
    function selectGallery($url){

      $result = $this->db->kedlek_gallery()->select("id, title, descr, seo_title, seo_descr, seo_keywords, gallery_list_id")->where("url = ?", $url);

      foreach ($result as $res) {

          $gallery['id'] = $res['id'];
          $gallery['title'] = $res['title'];
          $gallery['descr'] = $res['descr'];
          $gallery['seo_title'] = $res['seo_title'];
          $gallery['seo_descr'] = $res['seo_descr'];
          $gallery['seo_keywords'] = $res['seo_keywords'];
          $gallery['gallery_list_id'] = $res['gallery_list_id'];
      
      }

      $parent = $this->db->kedlek_gallery_list[$gallery['gallery_list_id']];
      $gallery['parent_url'] = $parent['url'];
      $gallery['parent_title'] = $parent['title'];


      return $gallery;

    }


    //Вывод элементов галерии
    function selectGalleryItems($g_id){

        return $this->db->kedlek_gallery_items->where("g_id = ?", $g_id)->order("ord");

    }

}