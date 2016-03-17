<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\MFrontRouting;

class CFrontRouting extends CFrontController
{
    //Роутинг клиент. части сайта
    public function action_index(){
        $result = MFrontRouting::search($this->params);
        if($result === null){
            $this->getContext()->redirect($this->getContext()->urlFor('404'));
        } else {
            $c = new \ReflectionClass('\Cms\Front\Controllers\\' . $result[0]);
            $controller = $c->newInstance($this->context);
            $action = $result[1];
            $controller->params = $this->params;
            $controller->$action();
        }
    }
}