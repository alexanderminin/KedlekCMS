<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\AdminPageManager;

//Контроллер страниц
class CAdminPage extends CAdminController
{

    public $pages;

    public $id;
    public $url;
    public $title;
    public $text;
    public $seo_title;
    public $seo_descr;
    public $seo_keywords;


    function __construct(\Slim\Slim $context){

        parent::__construct($context);

        $this->pages = new AdminPageManager();

        if ($this->getContext()->request()->isPost()){
            
            if (!empty($this->getContext()->request()->post('id'))){
                $this->id = abs((int)$this->getContext()->request()->post('id'));
            }

            if (!empty($this->getContext()->request()->post('url'))){
                $this->url = $this->string_valid($this->getContext()->request()->post('url'));
            }
            
            if (!empty($this->getContext()->request()->post('title'))){
                $this->title = $this->string_valid($this->getContext()->request()->post('title'));
            }
            
            if (!empty($this->getContext()->request()->post('text'))){
                $this->text = trim($this->getContext()->request()->post('text'));
            }
            
            if (!empty($this->getContext()->request()->post('seo_title'))){
                $this->seo_title = $this->string_valid($this->getContext()->request()->post('seo_title'));
            }

            if (!empty($this->getContext()->request()->post('seo_descr'))){
                $this->seo_descr = $this->string_valid($this->getContext()->request()->post('seo_title'));
            }

            if (!empty($this->getContext()->request()->post('seo_keywords'))){
                $this->seo_keywords = $this->string_valid($this->getContext()->request()->post('seo_title'));
            }

        }

    }

	//Добавление страницы
    public function action_add(){
        
        $result = $this->pages->addPage($this->url, $this->title, $this->text, $this->seo_title, $this->seo_descr, $this->seo_keywords);

        if ($result['id'] >= 0) {

            header('Location: /admin/pages/page/' . $result['id']);
            exit();

        }else{

            $_SESSION['error'] = $result;
            header('Location: /admin/pages/page');
            exit();

        }

    }

	//Обновление страницы
    public function action_update(){

        $result = $this->pages->updatePage($this->id, $this->url, $this->title, $this->text, $this->seo_title, $this->seo_descr, $this->seo_keywords);

        if ($result == true) {
            header('Location: /admin/pages/page/' . $this->id);
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/pages/page/'. $this->id);
            exit();
        }

    }

	//Вывод шаблона списка страниц
    public function action_index(){
        
        $items = $this->pages->selectAllPages();

        //Настройки
        $title = 'Страницы';
        $header = 'Страницы';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/pages.js"></script>

            ';
        $css = 
            '
                
            ';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Вывод данных
        $smarty->assign('items',$items);

        //Вывод шаблона
        $smarty->display('pages.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	//Вывод шаблона добавления страницы
    public function action_addpage(){

        //Настройки
        $title = 'Страница';
        $header = 'Добавление страницы';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/tinymce/tinymce.min.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
                <script type="text/javascript" src="/dist/jquery.liTranslit.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/page_add.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config.js"></script>
                <script type="text/javascript" src="/dist/config/liTranslit/page_add.js"></script>
                <script type="text/javascript" src="/dist/config/validate/page_add.js"></script>
            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/bootstrap-tagsinput/bootstrap-tagsinput.css" />
            ';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Вывод шаблона
        $smarty->display('page_add.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Вывод шаблона страницы
    public function action_page(){

        $item = $this->pages->selectPage($this->params);

        //Настройки
        $title = 'Страница';
        $header = 'Редактирование страницы';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/tinymce/tinymce.min.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/page.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config.js"></script>
                <script type="text/javascript" src="/dist/config/validate/page.js"></script>
            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/bootstrap-tagsinput/bootstrap-tagsinput.css" />
            ';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Вывод данных
        $item['text'] = htmlspecialchars($item['text']);
        $smarty->assign('item',$item);

        //Вывод шаблона
        $smarty->display('page.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Проверка url страницы на уникальность
    public function action_unic(){

        exit($this->pages->unicPage($this->url, '0'));

    }

	//Проверка url страницы на уникальность при обновлении
    public function action_unicexist(){

        exit($this->pages->unicPage($this->url, $this->id));

    }

	//Удаление страницы
    public function action_del(){

        $result = $this->pages->deletePage($this->params);

        if ($result == true) {
            header('Location: /admin/pages');
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/pages');
            exit();
        }

    }

}