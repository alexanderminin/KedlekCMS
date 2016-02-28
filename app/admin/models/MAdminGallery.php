<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление галереей
class MAdminGallery
{
    //Вывод списка галерей
    public static function selectGalleryListAll(){
        return DB::select("
            SELECT
                glist.id,
                glist.title,
                (SELECT COUNT(*) FROM kedlek_gallery as gal WHERE gal.gallery_list_id = glist.id) as cnt
            FROM kedlek_gallery_list as glist
            ORDER by glist.title
        ");
    }

    //Вывод данных галереи
    public static function selectGalleryList($id){
        return DB::table('kedlek_gallery_list')->where('id', $id)->first();
    }
    
    //Вывод списка галерей для меню
    public static function selectGalleryListMenu(){
        return DB::table('kedlek_gallery_list')->orderBy('title')->get();
    }

    //проверка раздела на уникальность url
    public static function unicGalleryList($url, $id){
        $result = DB::table('kedlek_gallery_list')->where('url', $url)->first();
        if($result){
            if ($result['id'] != $id){
                return false;
            }
        } else {
            $result = DB::table('kedlek_pages')->where('url', $url)->first();
            if($result){
                return false;
            }
            $result = DB::table('kedlek_category')->where('url', $url)->first();
            if($result){
                return false;
            }
        }
        return true;
    }

    //Добавление галереи
    public static function addGalleryList($url, $title, $seo_title, $seo_descr, $seo_keywords) {
        $data = [
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        ];
        return DB::table('kedlek_gallery_list')->insertGetId($data);
    }

    //Обновление галереи
    public static function updateGalleryList($id, $url, $title, $seo_title, $seo_descr, $seo_keywords){
        $data = [
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        ];
        return DB::table('kedlek_gallery_list')->where('id', $id)->update($data);
    }

    //Подсчет записей
    public static function countGallery($id){
        return DB::table('kedlek_gallery')->where('gallery_list_id', $id)->count('*');
    }

    //Удаление галереи
    public static function deleteGalleryList($id){
        return DB::table('kedlek_gallery_list')->where('id', $id)->delete();
    }

    //Записи галереи
    //Вывод элементов
    public static function selectAllGallery($gallery_list_id){
        return DB::table('kedlek_gallery')->where('gallery_list_id', $gallery_list_id)->orderBy('title')->get();
    }

    //Вывод данных галереи
    public static function selectGallery($id){
        return DB::table('kedlek_gallery')->where('id', $id)->first();
    }

    //Вывод элементов галерии
    public static function selectGalleryItems($g_id){
        return DB::table('kedlek_gallery_items')->where('g_id', $g_id)->orderBy('ord')->get();
    }

    //Вывод элемента галерии
    public static function selectGalleryItem($id){
        return DB::table('kedlek_gallery_items')->where('id', $id)->first();
    }

    //Добавление галереи
    public static function addGallery($title, $descr, $datetime, $type, $file, $thumb, $seo_title, $seo_descr, $seo_keywords, $gallery_list_id, $url) {
        $data = [
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
        ];
        return DB::table('kedlek_gallery')->insertGetId($data);
    }

    //Добавление элемента галереи
    public static function addGalleryItem($file, $thumb, $g_id) {
        $data = [
            "file" => $file,
            "thumb" => $thumb,
            "ord" => '0',
            "g_id" => $g_id
        ];
        return DB::table('kedlek_gallery_items')->insertGetId($data);
    }

    //Обновление галереи (Альбома)
    public static function updateGallery($id, $title, $descr, $datetime, $file, $thumb, $seo_title, $seo_descr, $seo_keywords, $gallery_list_id, $url){
        $data = [
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
        ];
        return DB::table('kedlek_gallery')->where('id', $id)->update($data);
    }

    //Обновление галереи (Видео)
    public static function updateGalleryVideo($id, $title, $descr, $datetime, $file, $gallery_list_id){
        $data = [
            "title" => $title,
            "descr" => $descr,
            "datetime" => $datetime,
            "file" => $file,
            "gallery_list_id" => $gallery_list_id
        ];
        return DB::table('kedlek_gallery')->where('id', $id)->update($data);
    }

    //Обновление элемента галереи
    public static function updateGalleryItem($id, $ord){
        return DB::table('kedlek_gallery_items')->where('id', $id)->update(["ord" => $ord]);
    }

    //проверка альбома на уникальность url
    public static function unicGallery($url, $id){
        $result = DB::table('kedlek_gallery')->where('url', $url)->first();
        if($result){
            if ($result['id'] != $id){
                return false;
            }
        }
        return true;
    }

    //Удаление галереи
    public static function deleteGallery($id){
        return DB::table('kedlek_gallery')->where('id', $id)->delete();
    }

    //Удаление элемента галереи
    public static function deleteGalleryItem($id){
        return DB::table('kedlek_gallery_items')->where('id', $id)->delete();
    }
}