<?php
namespace Cms\Admin\Models;

use Cms\ConnectionDB;

//Управление меню
class AdminMenuManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод списка активного меню
    function selectActiveMenu(){

        return $this->db->kedlek_menu()->where("active = ?", 2)->order("ord");

    }

    //Вывод списка меню
    function selectMenu(){

        return $this->db->kedlek_menu()->where("active = ?", 1)->order("ord");

    }

    //Добавление меню
    function addMenu($title, $target) {


        $data = array(
            "title" => $title,
            "target" => $target
            );

        $result = $this->db->kedlek_menu()->insert($data);

        return $result;

    }


    //Обновление порядка меню
    function updateMenu($id, $parent_id, $ord, $active){

        $item = $this->db->kedlek_menu[$id];


            $data = array(
                "parent_id" => $parent_id,
                "ord" => $ord,
                "active" => $active
            );

            $result = $item->update($data);

            return $result;

    }

    //Удаление элемента меню
    function deleteMenu($id){

        $item = $this->db->kedlek_menu[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

}