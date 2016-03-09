<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//сообщения
class MAdminMessages
{
    //Вывод последних 3х новых сообщений
    public static function selectLast3Unread(){
        return DB::table('kedlek_messages')->where('mark_read',1)->orderBy('id', 'desc')->take(3)->get();
    }

    //Вывод всех сообщений
    public static function selectAll(){
       return DB::table('kedlek_messages')->orderBy('id', 'desc')->get();
    }

    //Вывод всех новых сообщений
    public static function selectNew(){
        return DB::table('kedlek_messages')->where('mark_read', 1)->orderBy('id', 'desc')->get();
    }

    //Удаление сообщения
    public static function deleteMessage($id){
        return DB::table('kedlek_messages')->where('id', $id)->delete();
    }

    //Пометить сообщение как прочитанное
    public static function markIsRead($id){
        return DB::table('kedlek_messages')->where('id', $id)->update(["mark_read" => 2]);
    }
    
}