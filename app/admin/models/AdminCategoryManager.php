<?php
namespace Cms\Admin\Models;

use Cms\ConnectionDB;

//Управление категориями
class AdminCategoryManager
{
    private $db;
    private $pdo;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
        $this->pdo = $db->pdo;
    }

	//Категории
    //Вывод всех категорий
    function selectAllCategory(){

        $stmt = $this->pdo->query('
                                    SELECT

                                    cat.id,
                                    cat.title,
                                    (
                                        SELECT COUNT(*) FROM kedlek_category_records as rec WHERE rec.category_id = cat.id
                                    ) as cnt 

                                    FROM kedlek_category as cat
                                    ORDER by cat.title
                                 ');

        $result = array();
        $c = 0;
        foreach ($stmt as $row)
        {
            $result[$c]['id'] = $row['id'];
            $result[$c]['title'] = $row['title'];
            $result[$c]['count'] = $row['cnt'];
            $c++;
        }

        return $result;

    }

    //Вывод категории
    function selectCategory($id){

        return $this->db->kedlek_category[$id];

    }


    //Вывод списка категорий для меню
    function selectCategoryMenu(){

        return $this->db->kedlek_category()->order("title");

    }

    //проверка на уникальность url
    function unicCategory($url, $id){

        $result = $this->db->kedlek_category->where("url = ?", $url);

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

            $result = $this->db->kedlek_pages->where("url = ?", $url);
            if(count($result) > 0){

                return false;
            }

            $result = $this->db->kedlek_gallery_list->where("url = ?", $url);
            if(count($result) > 0){

                return false;
            }

            return true;

        }

    }

    //Добавление категории
    function addCategory($url, $title, $seo_title, $seo_descr, $seo_keywords) {

        $data = array(
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
            );

        $result = $this->db->kedlek_category()->insert($data);

        return $result;

    }

    //Обновление категории
    function updateCategory($id, $url, $title, $seo_title, $seo_descr, $seo_keywords){

        $item = $this->db->kedlek_category[$id];

        $data = array(
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        );
        $result = $item->update($data);

        return $result;


    }

    //Подсчет записей
    function countRecords($id){

        $result = $this->db->kedlek_category_records()->where('category_id = ?', $id);
        return count($result);

    }

    //Удаление категории
    function deleteCategory($id){

        $item = $this->db->kedlek_category[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

    //Записи категорий
    //Вывод всех записей категории
    function selectAllRecords($category_id){

        return $this->db->kedlek_category_records()->where("category_id = ?", $category_id)->order("title");

    }

    //Вывод записи
    function selectRecord($id){

        return $this->db->kedlek_category_records[$id];

    }
 
    //Добавление записи
    function addRecord($category_id, $url, $title, $descr, $text, $seo_title, $seo_descr, $seo_keywords, $file, $thumb, $datetime) {

        $data = array(
            "category_id" => $category_id,
            "url" => $url,
            "title" => $title,
            "descr" => $descr,
            "text" => $text,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords,
            "file" => $file,
            "thumb" => $thumb,
            "datetime" => $datetime
            );

        $result = $this->db->kedlek_category_records()->insert($data);

        return $result;

    }

    //Обновление записи
    function updateRecord($id, $category_id, $url, $title, $descr, $text, $seo_title, $seo_descr, $seo_keywords, $file, $thumb, $datetime){

        $item = $this->db->kedlek_category_records[$id];

        $data = array(
            "category_id" => $category_id,
            "url" => $url,
            "title" => $title,
            "descr" => $descr,
            "text" => $text,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords,
            "file" => $file,
            "thumb" => $thumb,
            "datetime" => $datetime
        );
        $result = $item->update($data);

        return $result;


    }


    //Удаление категории
    function deleteRecord($id){

        $item = $this->db->kedlek_category_records[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

    //проверка на уникальность url
    function unicRecord($url, $id){

        $result = $this->db->kedlek_category_records->where("url = ?", $url);

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

            return true;

        }

    }

}