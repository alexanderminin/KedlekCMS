<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление меню
class MAdminMenu
{
    //Вывод списка активного меню
    public static function selectActiveMenu(){
        return DB::table('kedlek_menu')->where('active', 2)->orderBy('ord')->get();
    }

    //Вывод списка меню
    public static function selectMenu(){
        return DB::table('kedlek_menu')->where('active', 1)->orderBy('ord')->get();
    }

    //Добавление меню
    public static function addMenu($title, $target){
        $data = [
            "title" => $title,
            "target" => $target
        ];
        return DB::table('kedlek_menu')->insertGetId($data);
    }

    //Обновление порядка меню
    public static function updateMenu($id, $parent_id, $ord, $active){
        $data = [
          "parent_id" => $parent_id,
          "ord" => $ord,
          "active" => $active
        ];
        return DB::table('kedlek_menu')->where('id', $id)->update($data);
    }

    //Удаление элемента меню
    public static function deleteMenu($id){
        return DB::table('kedlek_menu')->where('id', $id)->delete();
    }

}