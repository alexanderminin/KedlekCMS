<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\FrontConfigManager;

class CFrontController
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

    function __construct(\Slim\Slim $context){

        //Извлекаем текущие настройки
        $this->config = new FrontConfigManager();
        $site_settings = $this->config->selectConfig();

        //Формируем список настроек
        $this->site_config = array();
        foreach ($site_settings as $site_setting) {
            $this->site_config[$site_setting['config']] = $site_setting['value'];
        }
        
        $this->context = $context;

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

    //Список пунктов меню
    public function action_menu(){
        
        //Делаем выборку пунктов меню в массив
        $menu = $this->config->selectMenu();

        //Сортируем массив меню по ключам
        function array_sort_it($items){
            $menu_arr = array();
            foreach ($items as $item) {
                $menu_arr[$item['id']]['id'] = $item['id'];
                $menu_arr[$item['id']]['parent_id'] = $item['parent_id'];
                $menu_arr[$item['id']]['title'] = $item['title'];
                $menu_arr[$item['id']]['ord'] = $item['ord'];
                $menu_arr[$item['id']]['target'] = $item['target'];
                $menu_arr[$item['id']]['active'] = $item['active'];

            }

            return $menu_arr;
        }

        //Создаем древовидный массив меню
        function build_tree($data){
            
            $tree = array();
            
            foreach($data as $id => &$row){
            
                if($row['parent_id'] == '0'){
                    
                    $tree[$id] = &$row;
                }
                else{
                    $data[$row['parent_id']]['childs'][$id] = &$row;
                }
            }
            
            return $tree;
        }

        //вывод результата
        $menu = array_sort_it($menu);
        $menu = build_tree($menu);

        return $menu;

    }

    //Инициализация Smarty
    protected function SmartyInit(){

        $smarty = new \Smarty();

        //Определим основные директории
        $smarty->setConfigDir('lib/configs');
        //$smarty->setTemplateDir('templates/front');
        $smarty->setTemplateDir($this->site_config['theme']);
        $smarty->setCompileDir('lib/templates_c/front');
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
        $param = array();
        $param[] = $this->params[0];
        if(isset($this->params[1])){
            $param[] = $this->params[1];
        }
        $smarty->assign('menu_active', '/' . implode("/", $param));

        //Системные настройки сайта
        $smarty->assign('site_settings',$this->site_config);

        return $smarty;

    }
    
}