<?php
//Управление Роутингом клиент. сайта
class RoutingManager
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

                    return array('CCategory', 'action_index');

                } else {

                    $result = $this->db->kedlek_category_records()->where("url = ?", $params[1]);

                    if (count($result) > 0) {

                        return array('CRecord', 'action_index');

                    } else {

                        return null;

                    }

                }

            } else {

                return array('CCategory', 'action_index');

            }

        }

        $result = $this->db->kedlek_gallery_list()->where("url = ?", $params[0]);

        if (count($result) > 0) {

            if (count($params) > 1) {

                if(strlen(utf8_decode($params[1])) <= 4 && substr($params[1], 0) > 0){

                    return array('CGallery', 'action_index');

                } else {

                    $result = $this->db->kedlek_gallery()->where("url = ?", $params[1]);

                    if (count($result) > 0) {

                        return array('CGallery', 'action_view');

                    } else {

                        return null;

                    }

                }

            } else {

                return array('CGallery', 'action_index');

            }

        }


        $result = $this->db->kedlek_pages()->where("url = ?", $params[0]);

        if (count($result) > 0) {

                return array('CPage', 'action_index');

        } else {

            return null;

        }

      
    }

}