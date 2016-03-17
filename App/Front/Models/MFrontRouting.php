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
                $result = DB::table('kedlek_category_records')->where('url', $params[1])->get();
                if (count($result) > 0){
                    return ['CFrontRecord', 'action_index'];
                } else {
                    unset($params[1]);
                }
            } 
            return ['CFrontCategory', 'action_index'];
        }
        
        $result = DB::table('kedlek_gallery_list')->where('url', $params[0])->get();
        if ($result){
            if (count($params) > 1){
                $result = DB::table('kedlek_gallery')->where('url', $params[1])->get();
                if (count($result) > 0){
                    return ['CFrontGallery', 'action_view'];
                } else {
                    unset($params[1]);
                }
            } 
            return ['CFrontGallery', 'action_index'];
        }

        $result = DB::table('kedlek_pages')->where('url', $params[0])->get();
        if ($result){
            return ['CFrontPage', 'action_index'];
        } 

        return null;
    }
}