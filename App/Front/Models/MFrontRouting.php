<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление Роутингом клиент. сайта
class MFrontRouting
{
    //Вывод категории
    public static function search($params){
        $result = DB::table('kedlek_category')->where('url', $params[0])->get();
        if ($result){
            if (count($params) > 1){
                if(strlen(utf8_decode($params[1])) <= 4 && substr($params[1], 0) > 0){
                    return ['CFrontCategory', 'action_index'];
                } else {
                    $result = DB::table('kedlek_category_records')->where('url', $params[1])->get();
                    if (count($result) > 0){
                        return ['CFrontRecord', 'action_index'];
                    } else {
                        return null;
                    }
                }
            } else {
                return ['CFrontCategory', 'action_index'];
            }
        }

        $result = DB::table('kedlek_gallery_list')->where('url', $params[0])->get();
        if ($result){
            if (count($params) > 1){
                if(strlen(utf8_decode($params[1])) <= 4 && substr($params[1], 0) > 0){
                    return ['CFrontGallery', 'action_index'];
                } else {
                    $result = DB::table('kedlek_gallery')->where('url', $params[1])->get();
                    if (count($result) > 0){
                        return ['CFrontGallery', 'action_view'];
                    } else {
                        return null;
                    }
                }
            } else {
                return ['CFrontGallery', 'action_index'];
            }
        }

        $result = DB::table('kedlek_pages')->where('url', $params[0])->get();
        if ($result){
            return ['CFrontPage', 'action_index'];
        } else {
            return null;
        }
    }
}