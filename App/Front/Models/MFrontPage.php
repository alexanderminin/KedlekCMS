<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление страницами
class MFrontPage
{
    //Вывод страницы
    public static function selectPage($url){
        return DB::table('kedlek_pages')->where('url', $url)->first();
    }
}