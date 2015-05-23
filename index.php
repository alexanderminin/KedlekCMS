<?php
error_reporting(E_ALL);
ini_set('session.cookie_httponly',true);
ini_set('session.use_strict_mode',true);

session_start();

//Инициализация пути автозагрузки
set_include_path(get_include_path()
  .PATH_SEPARATOR.'app'
  .PATH_SEPARATOR.'app/admin/controllers'
  .PATH_SEPARATOR.'app/admin/models'
  .PATH_SEPARATOR.'app/front/controllers'
  .PATH_SEPARATOR.'app/front/models');

//Подключаем Smarty
define('SMARTY_SPL_AUTOLOAD',1);
require('lib/Smarty.class.php');

//Регистрируем свой автозагрузчик
function KedlekAutoLoad($class) {
    require_once($class.'.php');
}
spl_autoload_register('KedlekAutoLoad');


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

    //Админ часть
    case 'admin': 

        if(isset($params[1])){

            switch($params[1]){

                case 'menu': 
                    $controller = new CAdminMenu();
                    break;

                case 'config': 
                    $controller = new CAdminConfig();
                    break;

                case 'login': 
                    $controller = new CAdminAuth();
                    break;

                case 'users': 
                    $controller = new CAdminUser();
                    break;

                case 'messages': 
                    $controller = new CAdminMessages();
                    break;

                case 'home': 
                    $controller = new CAdminHome();
                    $action = 'action_index';
                    break;

                case '404': 
                    $controller = new CAdminHome();
                    $action = 'action_404';
                    break;

                case 'gallerylist': 
                    $controller = new CAdminGallery();
                    break;

                case 'pages': 
                    $controller = new CAdminPage();
                    break;

                case 'category': 
                    $controller = new CAdminCategory();
                    break;

                case null:
                    $controller = new CAdminHome();
                    $action = 'action_index';
                    break;

                default:
                    $controller = new CAdminHome();
                    $action = 'action_index';

            } 

        } else {

            $controller = new CAdminHome();
            $action = 'action_index';

        }
        break;

    //Фронт часть
    case 'messages':
        $controller = new CMessages();
        break;

    case 'contact': 
        $controller = new CContact();
        $action = 'action_index';
        break;

    case 'index': 
        $controller = new CHome();
        $action = 'action_index';
        break;

    case 'home': 
        $controller = new CHome();
        $action = 'action_index';
        break;

    case null:
        $controller = new CHome();
        $action = 'action_index';
        break;

    case '404': 
        $controller = new CHome();
        $action = 'action_404';
        break;

    default:
        $controller = new CRouting();
        $action = 'action_index';

}


//Сохранение GET параметров
$controller->params = $params;
//Инициализация экшена
$controller->$action();