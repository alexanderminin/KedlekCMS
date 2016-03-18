<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\MAdminConfig;
use Cms\Admin\Models\MAdminMessages;
use Cms\Admin\Models\MAdminUser;

class CAdminController
{
    /**
     * @var \Slim\Slim
     */
    private $context;
    protected static $instance;

    //Содержит GET переменные
    public $params;

    //Содержит настройки сайта
    public $site_config;

    private $login;
    private $password;

    function __construct(\Slim\Slim $context){
        $this->context = $context;
        //проверка авторизации
        if ($this->getContext()->request()->isPost()){
            if (!empty($this->getContext()->request()->post('auth_login')) && !empty($this->getContext()->request()->post('auth_password'))){
                $this->login = $this->string_valid($this->getContext()->request()->post('auth_login'));
                $this->password = $this->string_valid($this->getContext()->request()->post('auth_password'));
                $this->action_auth();
            }
        }
        $this->action_check();
        
        //Извлекаем текущие настройки
        $site_settings = MAdminConfig::selectConfig();

        //Формируем список настроек
        $this->site_config = [];
        foreach ($site_settings as $site_setting){
            $this->site_config[$site_setting['config']] = $site_setting['value'];
        }
    }
    
    public static function getInstance(\Slim\Slim $app)
    {
        if (is_null(self::$instance[get_called_class()])){
            self::$instance[get_called_class()] = new static($app);
        }
        return self::$instance[get_called_class()];
    }

    protected function getContext(){
        return $this->context;
    }
    
    //проверка сессии
    function action_check(){
        if(empty($_SESSION['auth']) || $_SESSION['auth'] != 'auth'){
            $this->action_login();
        }
    }

    //вывод страницы авторизации
    function action_login(){
        ob_start();
        include ROOT_DIR."/templates/admin/login.page.tpl";
        echo ob_get_clean();
        exit;
    }

    //авторизация 
    function action_auth(){
        $result = MAdminUser::getUserByLogin($this->login);
        if (!empty($result)){
            if(password_verify($this->password, $result['password'])){
                session_regenerate_id();
                $_SESSION['auth'] = 'auth';
                $_SESSION['role'] = $result['role'];
                $_SESSION['user_id'] =  $result['id'];
            } else {
                $_SESSION['error'] = 'Неверный логин или пароль';
                $this->getContext()->redirect($this->getContext()->urlFor('admin_login'));
            }
        } else {
            $_SESSION['error'] = 'Неверный логин или пароль';
            $this->getContext()->redirect($this->getContext()->urlFor('admin_login'));
        }
        $this->getContext()->redirect($this->getContext()->urlFor('admin'));
    }

    //выход
    function action_logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['auth']);
        unset($_SESSION['role']);
        session_destroy();
        $this->getContext()->redirect($this->getContext()->urlFor('admin_login'));
    }

    //Список пунктов меню
    public function action_menu(){
        
        //Иерархия меню
        return [

            ['menu_href' => '/admin/home', 'menu_title' => 'Главная', 'icon' => 'fa-home', 'role' => 'user'],

            [ 'group' => 'Страницы',  'icon' => 'fa-file-text-o','role' => 'user',
                'childs' => [
                    ['menu_href' => '/admin/pages', 'menu_title' => 'Список', 'icon' => 'fa-th-list','role' => 'user'],
                    ['menu_href' => '/admin/pages/addpage', 'menu_title' => 'Добавить', 'icon' => 'fa-plus-circle','role' => 'user']
                ]
            ],

            [ 'group' => 'Записи',  'icon' => 'fa-list-alt','role' => 'user',
                'childs' => [
                    ['menu_href' => '/admin/category', 'menu_title' => 'Список категорий', 'icon' => 'fa-list-ol','role' => 'user'],
                    ['menu_href' => '/admin/category/addcategory', 'menu_title' => 'Добавить категорию', 'icon' => 'fa-plus-circle','role' => 'user'],
                    ['menu_href' => '/admin/category/addrecord', 'menu_title' => 'Добавить запись', 'icon' => 'fa-plus-square','role' => 'user']
                ]
            ],

            [ 'group' => 'Галерея', 'icon' => 'fa-camera-retro','role' => 'user',
                'childs' => [
                    ['menu_href' => '/admin/gallerylist', 'menu_title' => 'Список разделов', 'icon' => 'fa-th','role' => 'user'],
                    ['menu_href' => '/admin/gallerylist/addgallerylist', 'menu_title' => 'Добавить раздел', 'icon' => 'fa-list-alt','role' => 'user'],
                    ['menu_href' => '/admin/gallerylist/addgallery', 'menu_title' => 'Добавить альбом', 'icon' => 'fa-photo','role' => 'user'],
                    ['menu_href' => '/admin/gallerylist/addvideo', 'menu_title' => 'Добавить видео', 'icon' => 'fa-video-camera','role' => 'user']
                ]
            ],

            ['menu_href' => '/admin/menu', 'menu_title' => 'Меню', 'icon' => 'fa-tasks','role' => 'user'],

            [ 'group' => 'Настройки', 'icon' => 'fa-gears','role' => 'user',
                'childs' => [
                    ['menu_href' => '/admin/config/site', 'menu_title' => 'Сайт', 'icon' => 'fa-globe','role' => 'user'],
                    ['menu_href' => '/admin/config/home', 'menu_title' => 'Главная стр.', 'icon' => 'fa-home','role' => 'user'],
                    ['menu_href' => '/admin/config/contacts', 'menu_title' => 'Стр. контакты', 'icon' => 'fa-envelope-o','role' => 'user'],
                    ['menu_href' => '/admin/config/sms', 'menu_title' => 'SMS сообщения', 'icon' => 'fa-mobile','role' => 'admin'],
                    ['menu_href' => '/admin/config/social', 'menu_title' => 'Соц. кнопки', 'icon' => 'fa-thumbs-o-up','role' => 'admin'],
                    ['menu_href' => '/admin/config/analytics', 'menu_title' => 'Код. аналит.', 'icon' => 'fa-dashboard','role' => 'admin'],
                    ['menu_href' => '/admin/config/admin', 'menu_title' => 'Админ. интерфейс', 'icon' => 'fa-home','role' => 'admin']
                ]
            ]

        ];

    }

    //вывод сообщений
    protected function lastMessages(){
        $unread_messages = MAdminMessages::selectLast3Unread();
        $last_messages = [];
        $c = 0;
        foreach ($unread_messages as $unread_message){
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

        $smarty = new \Smarty();

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
        $smarty->assign('menu_active', $this->getContext()->request()->getResourceUri());

        //Три последних сообщения
        $smarty->assign('last_messages',$this->lastMessages());

        //Роль пользователя и его ID
        $smarty->assign('role',$_SESSION['role']);
        $smarty->assign('user_id',$_SESSION['user_id']);

        //Системные настройки сайта
        $smarty->assign('site_settings',$this->site_config);

        return $smarty;

    }

	  //Проверка строк
    public function string_valid($string){
        return trim(strip_tags($string));
    }
}