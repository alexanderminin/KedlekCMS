<?php
namespace Cms\Front\Models;

use Cms\ConnectionDB;

//Управление Роутингом клиент. сайта
class FrontRoutingManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод категории
    function search($params){

        $result = $this->db->kedlek_category()->where("url = ?", $params[0]);

        if (count($result) > 0) {

            if (count($params) > 1) {

                if(strlen(utf8_decode($params[1])) <= 4 && substr($params[1], 0) > 0){

                    return array('CFrontCategory', 'action_index');

                } else {

                    $result = $this->db->kedlek_category_records()->where("url = ?", $params[1]);

                    if (count($result) > 0) {

                        return array('CFrontRecord', 'action_index');

                    } else {

                        return null;

                    }

                }

            } else {

                return array('CFrontCategory', 'action_index');

            }

        }

        $result = $this->db->kedlek_gallery_list()->where("url = ?", $params[0]);

        if (count($result) > 0) {

            if (count($params) > 1) {

                if(strlen(utf8_decode($params[1])) <= 4 && substr($params[1], 0) > 0){

                    return array('CFrontGallery', 'action_index');

                } else {

                    $result = $this->db->kedlek_gallery()->where("url = ?", $params[1]);

                    if (count($result) > 0) {

                        return array('CFrontGallery', 'action_view');

                    } else {

                        return null;

                    }

                }

            } else {

                return array('CFrontGallery', 'action_index');

            }

        }


        $result = $this->db->kedlek_pages()->where("url = ?", $params[0]);

        if (count($result) > 0) {

                return array('CFrontPage', 'action_index');

        } else {

            return null;

        }

      
    }

}