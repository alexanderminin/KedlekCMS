<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление страницами
class MAdminPage
{
    
    //Вывод всех страниц
    public static function selectAllPages(){
        return DB::table('kedlek_pages')->orderBy('title')->get();
    }

    //Вывод страницы
    public static function selectPage($id){
        return DB::table('kedlek_pages')->where('$id', $id)->first();
    }
    
    //проверка на уникальность url
    public static function unicPage($url, $id){
        $result = DB::table('kedlek_pages')->where('url', $url)->first();
        if ($result){
            if ($result['id'] != $id){
                return false;
            }
        } else {
            $result = DB::table('kedlek_gallery_list')->where('url', $url)->first();
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

    //Добавление страницы
    public static function addPage($url, $title, $text, $seo_title, $seo_descr, $seo_keywords) {
        return DB::table('kedlek_pages')->insertGetId([
          "url" => $url,
          "title" => $title,
          "text" => $text,
          "seo_title" => $seo_title,
          "seo_descr" => $seo_descr,
          "seo_keywords" => $seo_keywords
        ]);
    }

    //Обновление страницы
    public static function updatePage($id, $url, $title, $text, $seo_title, $seo_descr, $seo_keywords){
        $data = [
            "url" => $url,
            "title" => $title,
            "text" => $text,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        ];
        return DB::table('kedlek_pages')->where('id', $id)->update($data);
    }

    //Удаление страницы
    public static function deletePage($id){
        return DB::table('kedlek_pages')->where('id', $id)->delete();
    }
}