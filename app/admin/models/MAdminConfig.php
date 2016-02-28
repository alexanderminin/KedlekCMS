<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление настройками
class MAdminConfig
{

    //Вывод списка тем
    public static function readThemes(){
        $dir = 'templates/front';
        $files = glob($dir.'/*');
        return $files;
    }

    //Вывод списка настроек
    public static function selectConfig(){
        return DB::table('kedlek_config')->get();
    }

    //Обновление настройки
    public static function updateConfig($config, $value){
        return DB::table('kedlek_config')->where('config', $config)->update(["value" => $value]);
    }
}