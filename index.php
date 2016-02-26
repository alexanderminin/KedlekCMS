<?php
$app = require_once __DIR__ . '/bootstrap.php';
require __DIR__ . '/routes.php';
$app->run();

/*
//переобразование GET запроса
$params = array();

if(isset($_GET['q'])){

    $info = explode('/', $_GET['q']);   
    $params = array();

    foreach ($info as $v)
    {
      if ($v != '')
        $params[] = $v;
    }

    $action = 'action_';

    if(isset($params[0]) && $params[0] == 'admin'){

        if(isset($params[2])){
            $url = $params[2];
        }else{
            $url = 'index';
            //$params[1] = null;
        }

    } else {

        if(isset($params[1])){
            $url = $params[1];
        }else{
            $url = 'index';
        }
    }

    $action .= $url;

}else{

    $params[0] = null;

}


//выбор контролера
switch($params[0]){

    //Фронт часть
    case 'messages':
        $controller = new \Cms\Front\Controllers\CMessages();
        break;

    case 'contact': 
        $controller = new \Cms\Front\Controllers\CContact();
        $action = 'action_index';
        break;

    case 'index': 
        $controller = new \Cms\Front\Controllers\CHome();
        $action = 'action_index';
        break;

    case 'home': 
        $controller = new \Cms\Front\Controllers\CHome();
        $action = 'action_index';
        break;

    case null:
        $controller = new \Cms\Front\Controllers\CHome();
        $action = 'action_index';
        break;

    case '404': 
        $controller = new \Cms\Front\Controllers\CHome();
        $action = 'action_404';
        break;

    default:
        $controller = new \Cms\Front\Controllers\CRouting();
        $action = 'action_index';

}


//Сохранение GET параметров
$controller->params = $params;
//Инициализация экшена
$controller->$action();

*/