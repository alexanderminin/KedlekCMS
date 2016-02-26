<?php
namespace Cms\Admin\Models;

use Cms\ConnectionDB;

//Управление страницами
class AdminPageManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод всех страниц
    function selectAllPages(){

        return $this->db->kedlek_pages()->order("title");

    }

    //Вывод страницы
    function selectPage($id){

        return $this->db->kedlek_pages[$id];

    }

    //Вывод списка страниц для меню
    function selectPageMenu(){

        return $this->db->kedlek_pages()->order("title");

    }

    //проверка на уникальность url
    function unicPage($url, $id){

        $result = $this->db->kedlek_pages->where("url = ?", $url);

        $count = count($result);

        if($count > 0){

            foreach ($result as $res) {
                $res_id = $res['id'];
            }

            if ($res_id == $id){

                return true;

            }else{

                return false;

            }

        }else{

            $result = $this->db->kedlek_gallery_list->where("url = ?", $url);
            if(count($result) > 0){

                return false;
            }

            $result = $this->db->kedlek_category->where("url = ?", $url);
            if(count($result) > 0){

                return false;
            }


            return true;

        }

    }

    //Добавление страницы
    function addPage($url, $title, $text, $seo_title, $seo_descr, $seo_keywords) {




        $data = array(
            "url" => $url,
            "title" => $title,
            "text" => $text,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
            );

        $result = $this->db->kedlek_pages()->insert($data);

        return $result;

    }

    //Обновление страницы
    function updatePage($id, $url, $title, $text, $seo_title, $seo_descr, $seo_keywords){

        $item = $this->db->kedlek_pages[$id];

        $data = array(
            "url" => $url,
            "title" => $title,
            "text" => $text,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        );
        $result = $item->update($data);

        return $result;


    }


    //Удаление страницы
    function deletePage($id){

        $item = $this->db->kedlek_pages[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

}