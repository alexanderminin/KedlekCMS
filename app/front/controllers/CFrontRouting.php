<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\FrontRoutingManager;

class CFrontRouting extends CFrontController
{


    //Роутинг клиент. части сайта
    public function action_index(){

        $rout = new FrontRoutingManager();

        $result = $rout->search($this->params);
        
        if($result == null){
            
            header('Location: /index');
            exit();

        }else{

            $controller = new $result[0]();
            $action = $result[1];
            $controller->params = $this->params;
            $controller->$action();

        }

    }


}