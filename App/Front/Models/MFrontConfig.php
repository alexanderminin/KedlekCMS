<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление настройками
class MFrontConfig
{
    //Вывод списка настроек
    public static function selectConfig(){
        return DB::table('kedlek_config')->get();
    }

    //Вывод списка настроек
    public static function selectMenu(){
        return DB::table('kedlek_menu')->where('active', 2)->orderBy('ord')->get();
    }
}