<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\MFrontRouting;

class CFrontRouting extends CFrontController
{
    //Роутинг клиент. части сайта
    public function action_index(){
        $result = MFrontRouting::search($this->params);
        if($result == null){
            header('Location: /index');
            exit();
        } else {
            $controller = new $result[0]();
            $action = $result[1];
            $controller->params = $this->params;
            $controller->$action();
        }
    }
}