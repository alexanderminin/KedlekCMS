<?php
namespace Cms\Front\Models;

use Illuminate\Database\Capsule\Manager as DB;

//сообщения
class MFrontMessages
{
    public static function addMessage($type, $text, $name, $phone){
        $data = [
            "type" => $type,
            "text" => $text,
            "name" => $name,
            "phone" => $phone
        ];
        return DB::table('kedlek_messages')->insertGetId($data);
    }
}