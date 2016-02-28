<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//Управление галерей
class MFrontGallery
{
    //Вывод раздела
    public static function selectGalleryList($url){
        return DB::table('kedlek_gallery_list')->where('url', $url)->get();
    }

    //Вывод списка галереи
    public static function selectGalleryAll($gallery_list_id){
        return DB::table('kedlek_gallery')->where('gallery_list_id', $gallery_list_id)->get();
    }

    //Вывод галереи
    public static function selectGallery($url){
        return DB::table('kedlek_gallery as g')
            ->select(DB::raw('
                  g.id,
                  g.title,
                  g.descr,
                  g.seo_title,
                  g.seo_descr,
                  g.seo_keywords,
                  g.gallery_list_id
                  gl.url AS parent_url,
                  gl.title AS parent_title
            '))
            ->join('kedlek_gallery_list as gl', 'gl.gallery_list_id', '=', 'g.id')
            ->where('g.url', $url)
            ->first();
    }
  
    //Вывод элементов галерии
    public static function selectGalleryItems($g_id){
        return DB::table('kedlek_gallery_items')->where('g_id', $g_id)->orderBy('ord')->get();
    }
}