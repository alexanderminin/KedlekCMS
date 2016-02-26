<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\AdminMenuManager;
use Cms\Admin\Models\AdminPageManager;
use Cms\Admin\Models\AdminCategoryManager;
use Cms\Admin\Models\AdminGalleryManager;

//Контроллер меню
class CAdminMenu extends CAdminController
{

    public $id;
    public $title;
    public $target;
    public $menu;
    public $data;

    function __construct(\Slim\Slim $context){

        parent::__construct($context);

        $this->menu = new AdminMenuManager();

        if ($this->getContext()->request()->isPost()){

            if(isset($_POST['id'])){
                $this->id = abs((int)$_POST['id']);
            }


            if(isset($_POST['title'])){
                $this->title = $this->string_valid($_POST['title']);
            }

            if(isset($_POST['target'])){
                $this->target = $this->string_valid($_POST['target']);
            }

            if(isset($_POST['data'])){
                $this->data = $this->string_valid($_POST['data']);
            }

        }

    }



	//Вывод списка доступных страниц
    public function target_list(){

        $pages = new AdminPageManager();
        $pages = $pages->selectPageMenu();
        
        $target = '<optgroup label="Страницы">';

        foreach ($pages as $page) {

            $target .= '<option value="/' . $page['url'] . '">' . $page['title'] . '</option>';

        }

        $target .= '</optgroup>';
        $target .= '<optgroup label="Категории">';

        $category = new AdminCategoryManager();
        $category = $category->selectCategoryMenu();

        foreach ($category as $cat) {

            $target .= '<option value="/' . $cat['url'] . '">' . $cat['title'] . '</option>';

        }

        $target .= '</optgroup>';
        $target .= '<optgroup label="Галереи">';

        $gallery_list = new AdminGalleryManager();
        $gallery_list = $gallery_list->selectGalleryListMenu();

        foreach ($gallery_list as $gallery) {

            $target .= '<option value="/' . $gallery['url'] . '">' . $gallery['title'] . '</option>';


        }

        $target .= '</optgroup>';

        return $target;

    }

	//Добавление пункта меню
    public function action_add(){

        
        $result = $this->menu->addMenu($this->title, $this->target);

        if ($result['id'] >= 0) {

            header('Location: /admin/menu');
            exit(); 

        }else{

            $_SESSION['error'] = $result;

            header('Location: /admin/menu');

            exit();
        }

    }

	//Вывод шаблона меню
    public function action_index(){
        
        $active_menu = $this->menu->selectActiveMenu();
        $menu = $this->menu->selectMenu();

        $targets = $this->target_list();

        //сортируем массив по ключам
        function array_sort($items){
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

        //создание древовидного массива
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
        $menu_list = array_sort($menu);
        $active_menu = array_sort($active_menu);
        $active_menu = build_tree($active_menu);

        //Параметры страницы
        $title = 'Меню сайта';
        $header = 'Меню сайта';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/nestable/jquery.nestable.js"></script>

                <script type="text/javascript" src="/dist/config/nestable/config.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/menu.js"></script>
                <script type="text/javascript" src="/dist/config/validate/menu.js"></script>

            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/nestable/nestable.css">
            ';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $smarty->assign('menu_list',$menu_list);
        $smarty->assign('active_menu',$active_menu);
        $smarty->assign('targets',$targets);

        //Вывод шаблона
        $smarty->display('menu.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Удаление пункта меню
    public function action_del(){

        $result = $this->menu->deleteMenu($this->params[3]);

        if ($result == true) {
            header('Location: /admin/menu');
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/menu');
            exit();
        }

    }

	//Преобразование массива в древовидный
    public function parseJsonArray($jsonArray, $parentID = 0) {

      $return = array();
      foreach ($jsonArray as $subArray) {
        $returnSubSubArray = array();
        if (isset($subArray['children'])) {
      $returnSubSubArray = $this->parseJsonArray($subArray['children'], $subArray['id']);
        }
        $return[] = array('id' => $subArray['id'], 'parent_id' => $parentID);
        $return = array_merge($return, $returnSubSubArray);
      }
      return $return;

    }

	//Обновление активных пунктов меню
    public function action_updateactive(){

        $this->data = json_decode($this->data, true);

        $items = $this->parseJsonArray($this->data);

        $c = 1;

        foreach ($items as $item) {
            $this->menu->updateMenu($item['id'], $item['parent_id'], $c, '2');
            $c++;
        }

        echo 'Активное меню обновлено';

        exit();

    }

	//Обновление пунктов меню
    public function action_update(){

        $this->data = json_decode($this->data, true);

        $items = $this->parseJsonArray($this->data);

        foreach ($items as $item) {
            $this->menu->updateMenu($item['id'], '0', '0', '1');
        }

        echo 'Меню обновлено';

        exit();

    }

}