<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\AdminConfigManager;
use Cms\Admin\Models\AdminMessagesManager;
use Cms\Admin\Models\AdminUserManager;

class CAdminController
{
    /**
     * @var \Slim\Slim
     */
    private $context;

    //Содержит объект класса ConfigManager
    public $config;

    //Содержит GET переменные
    public $params;

    //Содержит настройки сайта
    public $site_config;

    private $login;
    private $password;
    private $users;

    function __construct(\Slim\Slim $context){

        $this->context = $context;
        
        //проверка авторизации
        $this->users = new AdminUserManager();
        if ($this->getContext()->request()->isPost()) {
            if (!empty($this->getContext()->request()->post('login')) && !empty($this->getContext()->request()->post('password'))) {
                $this->login = $this->string_valid($this->getContext()->request()->post('login'));
                $this->password = $this->string_valid($this->getContext()->request()->post('password'));
                $this->action_auth();
            }
        }
        
        $this->action_check();
        
        //Извлекаем текущие настройки
        $this->config = new AdminConfigManager();
        $site_settings = $this->config->selectConfig();

        //Формируем список настроек
        $this->site_config = array();
        foreach ($site_settings as $site_setting) {
            $this->site_config[$site_setting['config']] = $site_setting['value'];
        }
        
    }

    protected static $instance;
    public static function getInstance(\Slim\Slim $app)
    {
        if (is_null(self::$instance[get_called_class()])) {
            self::$instance[get_called_class()] = new static($app);
        }
        return self::$instance[get_called_class()];
    }

    protected function getContext() {
        return $this->context;
    }


    //проверка сессии
    function action_check(){
        if(isset($_SESSION['auth'])){
            if ($_SESSION['auth'] != 'auth') {
                $this->action_login();
                exit();
            }
        }else{
            $this->action_login();
            exit();
        }
    }

    //вывод страницы авторизации
    function action_login(){
        ob_start();
        include ROOT_DIR."/templates/admin/login.page.tpl";
        echo ob_get_clean();
    }

    //авторизация 
    function action_auth(){
        $result = $this->users->authUser($this->login, $this->password);
        if($result){
            header("Location: /admin/home");
            exit();
        }else{
            $_SESSION['error'] = 'Ошибка авторизации';
            header("Location: /admin/login");
            exit();
        }
    }

    //выход
    function action_logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['auth']);
        unset($_SESSION['role']);
        session_destroy();
        header("Location: /admin/login");
        exit();
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
}