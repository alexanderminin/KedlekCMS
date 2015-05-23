<?php

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


    function __construct(){

        parent::__construct();

        $this->pages = new AdminPageManager();

        if ($this->isPost()){

            if(isset($_POST['id'])){
                $this->id = abs((int)$_POST['id']);
            }

            if(isset($_POST['url'])){
                $this->url = $this->string_valid($_POST['url']);
            }

            if(isset($_POST['title'])){
                $this->title = $this->string_valid($_POST['title']);
            }

            if(isset($_POST['text'])){
                $this->text = trim($_POST['text']);
            }

            if(isset($_POST['seo_title'])){
                $this->seo_title = $this->string_valid($_POST['seo_title']);
            }

            if(isset($_POST['seo_descr'])){
                $this->seo_descr = $this->string_valid($_POST['seo_descr']);
            }

            if(isset($_POST['seo_keywords'])){
                $this->seo_keywords = $this->string_valid($_POST['seo_keywords']);
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

        $item = $this->pages->selectPage($this->params[3]);

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

        $result = $this->pages->deletePage($this->params[3]);

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