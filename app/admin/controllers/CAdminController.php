<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\AdminConfigManager;
use Cms\Admin\Models\AdminMessagesManager;
use Smarty;

class CAdminController extends CAdminBase
{

    //Содержит объект класса ConfigManager
    public $config;

    //Содержит GET переменные
    public $params;

    //Содержит настройки сайта
    public $site_config;

    function __construct($context){

        parent::__construct($context);

        //проверка авторизации
        $auth = new CAdminAuth();
        $check = $auth->action_check();

        //Извлекаем текущие настройки
        $this->config = new AdminConfigManager();
        $site_settings = $this->config->selectConfig();

        //Формируем список настроек
        $this->site_config = array();
        foreach ($site_settings as $site_setting) {
            $this->site_config[$site_setting['config']] = $site_setting['value'];
        }


    }

    //Список пунктов меню
    public function action_menu(){
        
        //Иерархия меню
        $main_menu = array (

                array('menu_href' => '/admin/home', 'menu_title' => 'Главная', 'icon' => 'fa-home', 'role' => 'user'),

                array( 'group' => 'Страницы',  'icon' => 'fa-file-text-o','role' => 'user',
                        'childs' => array (
                            array('menu_href' => '/admin/pages/index', 'menu_title' => 'Список', 'icon' => 'fa-th-list','role' => 'user'),
                            array('menu_href' => '/admin/pages/addpage', 'menu_title' => 'Добавить', 'icon' => 'fa-plus-circle','role' => 'user')
                        )
                ),

                array( 'group' => 'Записи',  'icon' => 'fa-list-alt','role' => 'user',
                        'childs' => array (
                            array('menu_href' => '/admin/category/index', 'menu_title' => 'Список категорий', 'icon' => 'fa-list-ol','role' => 'user'),
                            array('menu_href' => '/admin/category/addcategory', 'menu_title' => 'Добавить категорию', 'icon' => 'fa-plus-circle','role' => 'user'),
                            array('menu_href' => '/admin/category/addrecord', 'menu_title' => 'Добавить запись', 'icon' => 'fa-plus-square','role' => 'user')
                        )
                ),

                array( 'group' => 'Галерея', 'icon' => 'fa-camera-retro','role' => 'user',
                        'childs' => array (
                            array('menu_href' => '/admin/gallerylist/index', 'menu_title' => 'Список разделов', 'icon' => 'fa-th','role' => 'user'),
                            array('menu_href' => '/admin/gallerylist/addgallerylist', 'menu_title' => 'Добавить раздел', 'icon' => 'fa-list-alt','role' => 'user'),
                            array('menu_href' => '/admin/gallerylist/addgallery', 'menu_title' => 'Добавить альбом', 'icon' => 'fa-photo','role' => 'user'),
                            array('menu_href' => '/admin/gallerylist/addvideo', 'menu_title' => 'Добавить видео', 'icon' => 'fa-video-camera','role' => 'user')
                        )
                ),

                array('menu_href' => '/admin/menu/index', 'menu_title' => 'Меню', 'icon' => 'fa-tasks','role' => 'user'),

                array( 'group' => 'Настройки', 'icon' => 'fa-gears','role' => 'user',
                        'childs' => array (
                            array('menu_href' => '/admin/config/site', 'menu_title' => 'Сайт', 'icon' => 'fa-globe','role' => 'user'),
                            array('menu_href' => '/admin/config/home', 'menu_title' => 'Главная стр.', 'icon' => 'fa-home','role' => 'user'),
                            array('menu_href' => '/admin/config/contacts', 'menu_title' => 'Стр. контакты', 'icon' => 'fa-envelope-o','role' => 'user'),
                            array('menu_href' => '/admin/config/sms', 'menu_title' => 'SMS сообщения', 'icon' => 'fa-mobile','role' => 'admin'),
                            array('menu_href' => '/admin/config/social', 'menu_title' => 'Соц. кнопки', 'icon' => 'fa-thumbs-o-up','role' => 'admin'),
                            array('menu_href' => '/admin/config/analytics', 'menu_title' => 'Код. аналит.', 'icon' => 'fa-dashboard','role' => 'admin'),
                            array('menu_href' => '/admin/config/admin', 'menu_title' => 'Админ. интерфейс', 'icon' => 'fa-home','role' => 'admin')
                        )
                )

            );

        return $main_menu;

    }

    //вывод сообщений
    protected function lastMessages(){

        $messages = new AdminMessagesManager();
        $unread_messages = $messages->selectLast3Unread();

        $last_messages = array();

        $c = 0;
        foreach ($unread_messages as $unread_message) {

            $last_messages[$c]['name'] = $unread_message['name'];
            $last_messages[$c]['phone'] = $unread_message['phone'];
            $last_messages[$c]['text'] = $unread_message['text'];
            $last_messages[$c]['type'] = $unread_message['type'];
            $last_messages[$c]['datetime'] = $unread_message['datetime'];
            $last_messages[$c]['id'] = $unread_message['id'];
            $c++;
            
        }

        return $last_messages;
    }

    //Инициализация Smarty
    protected function SmartyInit(){

        $smarty = new Smarty();

        //Определим основные директории
        $smarty->setConfigDir('lib/configs');
        $smarty->setTemplateDir('templates/admin');
        $smarty->setCompileDir('lib/templates_c/admin');
        $smarty->setCacheDir('lib/cache');

        //Прием уведомлений об ошибке
        if(isset($_SESSION['error'])){
            $smarty->assign('error',$_SESSION['error']);
            unset($_SESSION['error']);
        }

        //Прием уведомлений
        if(isset($_SESSION['message'])){
            $smarty->assign('message',$_SESSION['message']);
            unset($_SESSION['message']);
        }

        //Список пунктов меню
        $smarty->assign('menu',$this->action_menu());

        //Активный пункт  меню (для пометки активной страницы)
        $smarty->assign('menu_active', $_SERVER['REQUEST_URI']);

        //Три последних сообщения
        $smarty->assign('last_messages',$this->lastMessages());

        //Роль пользователя и его ID
        $smarty->assign('role',$_SESSION['role']);
        $smarty->assign('user_id',$_SESSION['user_id']);

        //Активный пункт  меню (для пометки активной страницы)
        $smarty->assign('menu_active', $_SERVER['REQUEST_URI']);

        //Системные настройки сайта
        $smarty->assign('site_settings',$this->site_config);

        return $smarty;

    }

	  //Проверка строк
    public function string_valid($string){

        return trim(strip_tags($string));

    }

	  //Проверка на POST
    protected function isPost() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

	  //Перенаправление на 404 страницу
    public function __call($name, $params){
        
        header('Location: /404');
        exit();

    }

	  //Перенаправление на 404 страницу
    public function action_404(){
        
        header('Location: /404');
        exit();

    }
}