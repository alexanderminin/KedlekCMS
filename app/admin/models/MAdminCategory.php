<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление категориями
class MAdminCategory
{
    
	  //Категории
    //Вывод всех категорий
    public static function selectAllCategory(){
        return DB::select("
            SELECT
                cat.id,
                cat.title,
                (SELECT COUNT(*) FROM kedlek_category_records as rec WHERE rec.category_id = cat.id) as cnt 
            FROM kedlek_category as cat
            ORDER by cat.title
        ");
    }

    //Вывод категории
    public static function selectCategory($id){
        return DB::table('kedlek_category')->where('id', $id)->first();
    }

    //Вывод списка категорий для меню
    public static function selectCategoryMenu(){
        return DB::table('kedlek_category')->orderBy('title')->get();
    }

    //проверка на уникальность url
    public static function unicCategory($url, $id){
        $result = DB::table('kedlek_category')->where('url', $url)->first();
        if ($result){
            if ($result['id'] != $id){
                return false;
            }
        } else {
            $result = DB::table('kedlek_pages')->where('url', $url)->first();
            if($result){
                return false;
            }
            $result = DB::table('kedlek_gallery_list')->where('url', $url)->first();
            if($result){
                return false;
            }
        }
        return true;
    }

    //Добавление категории
    public static function addCategory($url, $title, $seo_title, $seo_descr, $seo_keywords) {
        $data = [
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        ];
        return DB::table('kedlek_category')->insertGetId($data);
    }

    //Обновление категории
    public static function updateCategory($id, $url, $title, $seo_title, $seo_descr, $seo_keywords){
        $data = [
            "url" => $url,
            "title" => $title,
            "seo_title" => $seo_title,
            "seo_descr" => $seo_descr,
            "seo_keywords" => $seo_keywords
        ];
        return DB::table('kedlek_category')->where('id', $id)->update($data);
    }

    //Подсчет записей
    public static function countRecords($id){
        return DB::table('kedlek_category_records')->where('category_id', $id)->count('*');
    }

    //Удаление категории
    public static function deleteCategory($id){
        return DB::table('kedlek_category')->where('id', $id)->delete();
    }

    //Записи категорий
    //Вывод всех записей категории
    public static function selectAllRecords($category_id){
        return DB::table('kedlek_category_records')->where('category_id', $category_id)->orderBy('title')->get();
    }

    //Вывод записи
    public static function selectRecord($id){
        return DB::table('kedlek_category_records')->where('id', $id)->first();
    }
 
    //Добавление записи
    public static function addRecord($category_id, $url, $title, $descr, $text, $seo_title, $seo_descr, $seo_keywords, $file, $thumb, $datetime) {
        $data = [
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
        ];
        return DB::table('kedlek_category_records')->insertGetId($data);
    }

    //Обновление записи
    public static function updateRecord($id, $category_id, $url, $title, $descr, $text, $seo_title, $seo_descr, $seo_keywords, $file, $thumb, $datetime){
        $data = [
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
        ];
        return DB::table('kedlek_category_records')->where('id', $id)->update($data);
    }
    
    //Удаление категории
    public static function deleteRecord($id){
        return DB::table('kedlek_category_records')->where('id', $id)->delete();
    }

    //проверка на уникальность url
    public static function unicRecord($url, $id){
        $result = DB::table('kedlek_category_records')->where('url', $url)->first();
        if($result){
            if ($result['id'] != $id){
                return false;
            }
        }
        return true;
    }

}