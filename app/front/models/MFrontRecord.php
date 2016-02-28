<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление записью
class MFrontRecord
{
    //Вывод записи
    public static function selectRecord($url){
        return DB::table('kedlek_category_records as cr')
            ->select(DB::raw('
              cr.title,
              cr.text,
              cr.seo_title,
              cr.seo_descr,
              cr.seo_keywords,
              cr.file,
              cr.thumb,
              cr.datetime,
              cr.category_id,
              c.url AS parent_url,
              c.title AS parent_title
            '))
            ->join('kedlek_category as c', 'c.id', '=', 'cr.category_id')
            ->where('cr.url', $url)
            ->first();
    }
}