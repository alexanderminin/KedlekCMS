<?php

class CRouting extends CController
{


    //Роутинг клиент. части сайта
    public function action_index(){

        $rout = new RoutingManager();

        $result = $rout->search($this->params);
        
        if($result == null){
            
            header('Location: /404');
            exit();

        }else{

            $controller = new $result[0]();
            $action = $result[1];
            $controller->params = $this->params;
            $controller->$action();

        }

    }


}