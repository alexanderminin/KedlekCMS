<?php

//Управление галереей
class AdminGalleryManager
{
    private $db;
    private $pdo;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
        $this->pdo = $db->pdo;
    }
    
    //Вывод списка галерей
    function selectGalleryListAll(){

        $stmt = $this->pdo->query('
                                    SELECT

                                    glist.id,
                                    glist.title,
                                    (
                                        SELECT COUNT(*) FROM kedlek_gallery as gal WHERE gal.gallery_list_id = glist.id
                                    ) as cnt 

                                    FROM kedlek_gallery_list as glist
                                    ORDER by glist.title
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

    //Вывод данных галереи
    function selectGalleryList($id){

        return $this->db->kedlek_gallery_list[$id];

    }



    //Вывод списка галерей для меню
    function selectGalleryListMenu(){

        return $this->db->kedlek_gallery_list()->order("title");

    }

    //проверка раздела на уникальность url
    function unicGalleryList($url, $id){

        $result = $this->db->kedlek_gallery_list->where("url = ?", $url);

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

            $result = $this->db->kedlek_category->where("url = ?", $url);
            if(count($result) > 0){

                return false;
            }


            return true;

            return true;

        }

    }

    //Добавление галереи
    function addGalleryList($url, $title, $seo_title, $seo_descr, $seo_keywords) {

        $data = array(
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
            );

        $result = $this->db->kedlek_gallery_list()->insert($data);

        return $result;

    }


    //Обновление галереи
    function updateGalleryList($id, $url, $title, $seo_title, $seo_descr, $seo_keywords){

        $item = $this->db->kedlek_gallery_list()[$id];

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
    function countGallery($id){

        $result = $this->db->kedlek_gallery()->where('gallery_list_id = ?', $id);
        return count($result);

    }


    //Удаление галереи
    function deleteGalleryList($id){

        $item = $this->db->kedlek_gallery_list[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

    //Вывод элементов
    function selectAllGallery($gallery_list_id){

        return $this->db->kedlek_gallery()->where("gallery_list_id = ?", $gallery_list_id)->order("title");

    }

    //Вывод данных галереи
    function selectGallery($id){

        return $this->db->kedlek_gallery[$id];

    }


    //Вывод элементов галерии
    function selectGalleryItems($g_id){

        return $this->db->kedlek_gallery_items->where("g_id = ?", $g_id)->order("ord");

    }

    //Вывод элемента галерии
    function selectGalleryItem($id){

        return $this->db->kedlek_gallery_items[$id];

    }

    //Добавление галереи
    function addGallery($title, $descr, $datetime, $type, $file, $thumb, $seo_title, $seo_descr, $seo_keywords, $gallery_list_id, $url) {


        $data = array(
            "title" => $title,
            "descr" => $descr,
            "type" => $type,
            "datetime" => $datetime,
            "file" => $file,
            "thumb" => $thumb,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords,
            "gallery_list_id" => $gallery_list_id,
            "url" => $url
            );

        $result = $this->db->kedlek_gallery()->insert($data);

        return $result;

    }

    //Добавление элемента галереи
    function addGalleryItem($file, $thumb, $g_id) {

        $data = array(
            "file" => $file,
            "thumb" => $thumb,
            "ord" => '0',
            "g_id" => $g_id
            );

        $result = $this->db->kedlek_gallery_items()->insert($data);

        return $result;

    }

    //Обновление галереи (Альбома)
    function updateGallery($id, $title, $descr, $datetime, $file, $thumb, $seo_title, $seo_descr, $seo_keywords, $gallery_list_id, $url){

        $item = $this->db->kedlek_gallery[$id];

        $data = array(
            "title" => $title,
            "descr" => $descr,
            "datetime" => $datetime,
            "file" => $file,
            "thumb" => $thumb,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords,
            "gallery_list_id" => $gallery_list_id,
            "url" => $url
        );
        $result = $item->update($data);

        return $result;


    }

    //Обновление галереи (Видео)
    function updateGalleryVideo($id, $title, $descr, $datetime, $file, $gallery_list_id){

        $item = $this->db->kedlek_gallery[$id];

        $data = array(
            "title" => $title,
            "descr" => $descr,
            "datetime" => $datetime,
            "file" => $file,
            "gallery_list_id" => $gallery_list_id
        );
        $result = $item->update($data);

        return $result;


    }

    //Обновление элемента галереи
    function updateGalleryItem($id, $ord){

        $item = $this->db->kedlek_gallery_items[$id];


            $data = array(
                "ord" => $ord
            );

            $result = $item->update($data);

            return $result;

    }

    //проверка альбома на уникальность url
    function unicGallery($url, $id){

        $result = $this->db->kedlek_gallery->where("url = ?", $url);

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

    //Удаление галереи
    function deleteGallery($id){

        $item = $this->db->kedlek_gallery[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

    //Удаление элемента галереи
    function deleteGalleryItem($id){

        $item = $this->db->kedlek_gallery_items[$id];
        
        
        if ($item && $item->delete()) {

            return true;

        }else{
            
            return false;
        
        }

    }

}