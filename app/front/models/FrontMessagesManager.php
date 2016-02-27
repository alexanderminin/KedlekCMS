<?php
namespace Cms\Front\Models;

use Cms\ConnectionDB;

//сообщения
class FrontMessagesManager
{
    
    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    public function addMessage($type, $text, $name, $phone){
        
        $data = array(
            "type" => $type,
            "text" => $text,
            "name" => $name,
            "phone" => $phone
            );

        $result = $this->db->kedlek_messages()->insert($data);

        return $result;

    }


  
}