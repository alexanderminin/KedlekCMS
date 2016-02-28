<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление категориями
class MFrontCategory
{
    //Вывод категории
    public static function selectCategory($url){
        return DB::table('kedlek_category')->where('url', $url)->first();
    }

    //Вывод записей
    public static function selectRecords($id){
      return DB::table('kedlek_category_records')->where('category_id', $id)->get();
    }
}