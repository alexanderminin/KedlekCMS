<?php

//Контроллер категорий и записей
class CAdminCategory extends CAdminController
{

    public $category;
    public $id;
    public $url;
    public $category_id;
    public $title;
    public $descr;
    public $text;
    public $seo_title;
    public $seo_descr;
    public $seo_keywords;
    public $file;
    public $datetime;


    function __construct(){

        parent::__construct();

        $this->category = new AdminCategoryManager();

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

            if(isset($_POST['descr'])){
                $this->descr = trim($_POST['descr']);
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

            if(isset($_POST['category_id'])){
                $this->category_id = abs((int)$_POST['category_id']);
            }

            if(isset($_POST['file'])){
                $this->file = $this->string_valid($_POST['file']);
            }

            if(isset($_POST['date']) && isset($_POST['time'])){
                $date = $this->string_valid($_POST['date']);
                $time = $this->string_valid($_POST['time']);
                $this->datetime = $date . ' ' . $time . ':00';
            }

        }

    }

	//Категории
	
	//Добавление категории
    public function action_add_category(){
        
        $result = $this->category->addCategory($this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);

        if ($result['id'] >= 0) {

            header('Location: /admin/category');
            exit();

        }else{

            $_SESSION['error'] = $result;
            header('Location: /admin/category');
            exit();

        }

    }

	//Обновление категории
    public function action_update_category(){

        $result = $this->category->updateCategory($this->id, $this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);

        if ($result == true) {
            header('Location: /admin/category');
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/category');
            exit();
        }

    }

	//Вывод шаблона списка категорий
    public function action_index(){
        
        $items = $this->category->selectAllCategory();

        //Настройки
        $title = 'Список категории';
        $header = 'Список категории';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/category.js"></script>

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
        $smarty->display('category.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign(); 

    }

	//Вывод шаблона добавления категории
    public function action_addcategory(){

        //Настройки
        $title = 'Добавление категории';
        $header = 'Добавление категории';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
                <script type="text/javascript" src="/dist/jquery.liTranslit.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/category_add.js"></script>
                <script type="text/javascript" src="/dist/config/validate/category_add.js"></script>
                <script type="text/javascript" src="/dist/config/liTranslit/category_add.js"></script>
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
        $smarty->display('category_add.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Вывод шаблона обновления категории
    public function action_updcategory(){

        $item = $this->category->selectCategory($this->params[3]);

        //Настройки
        $title = 'Редактирование категории';
        $header = 'Редактирование категории';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/category_upd.js"></script>
                <script type="text/javascript" src="/dist/config/validate/category_upd.js"></script>
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
        $smarty->assign('item',$item);

        //Вывод шаблона
        $smarty->display('category_upd.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Проверка url категории на уникальность
    public function action_unic(){

        exit($this->category->unicCategory($this->url, '0'));

    }

	//Проверка url категории на уникальность при обновлении
    public function action_unicexist(){

        exit($this->category->unicCategory($this->url, $this->id));

    }

	//Удаление категории
    public function action_delcategory(){

        $count = $this->category->countRecords($this->params[3]);

        if($count == 0){
            $result = $this->category->deleteCategory($this->params[3]);

            if ($result == true) {
                header('Location: /admin/category');
                exit();
            }else{
                $_SESSION['error'] = $result;
                header('Location: /admin/category');
                exit();
            }
        }else{
            $_SESSION['error'] = 'У категории есть записи в кол-ве: ' . $count . ' шт. Для начала необходимо удалить их.';
            header('Location: /admin/category');
            exit();
        }

    }


    //Записи

    //Преобразование Адреса для миниатюры
    public function action_thumb_path(){

        $thumb = explode('/', $this->file);

        $count = count($thumb) - 1;

        if ($count >= 1){

            $thumb[] = $thumb[$count];
            $thumb[$count] = 'thumb';

        }else{

            $thumb[1] = $thumb[0];
            $thumb[0] = 'thumb';

        }

        $thumb = implode('/', $thumb);

        return $thumb;

    }

	//Добавление записи
    public function action_add_record(){

        $thumb = $this->action_thumb_path();
        
        $result = $this->category->addRecord($this->category_id, $this->url, $this->title, $this->descr, $this->text, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->file, $thumb, $this->datetime);    
        

        if ($result['id'] >= 0) {

            header('Location: /admin/category/records/' . $this->category_id);
            exit();

        }else{

            $_SESSION['error'] = $result;
            header('Location: /admin/category/records/' . $this->category_id);
            exit();

        }

    }

	//Обновление записи
    public function action_update_record(){

        $thumb = $this->action_thumb_path();

        $result = $this->category->updateRecord($this->id, $this->category_id, $this->url, $this->title, $this->descr, $this->text, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->file, $thumb, $this->datetime);

        if ($result == true) {
            header('Location: /admin/category/records/' . $this->category_id);
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/category/records/' . $this->category_id);
            exit();
        }

    }

	//Вывод шаблона записи
    public function action_records(){

        $result = $this->category->selectCategory($this->params[3]);
        $category = array();
        $category_title = $result['title'];
        
        $items = $this->category->selectAllRecords($this->params[3]);

        //Настройки
        $title = 'Список записей';
        $header = 'Список записей';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/category_records.js"></script>

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
        $smarty->assign('category_title',$category_title);

        //Вывод шаблона
        $smarty->display('category_records.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Вывод шаблона добавления записи
    public function action_addrecord(){

        $category = $this->category->selectCategoryMenu();

        //Настройки
        $title = 'Запись';
        $header = 'Добавление записи';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/tinymce/tinymce.min.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.date.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.time.js"></script>
                <script type="text/javascript" src="/dist/pickadate/legacy.js"></script>
                <script type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"></script>
                <script type="text/javascript" src="/dist/jquery.liTranslit.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

                <script type="text/javascript" src="/dist/config/pickadate/config.js"></script>
                <script type="text/javascript" src="/dist/config/pickadate/config-time.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config2.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/category_record_add.js"></script>
                <script type="text/javascript" src="/dist/config/filemanager/responsive_filemanager_callback.js"></script>
                <script type="text/javascript" src="/dist/config/liTranslit/category_record_add.js"></script>
                <script type="text/javascript" src="/dist/config/validate/category_record_add.js"></script>
            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.time.css" />
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
        $smarty->assign('category', $category);
        $smarty->assign('date', date("Y-m-d",time()));
        $smarty->assign('time', date("H:i",time()));

        //Вывод шаблона
        $smarty->display('category_record_add.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Вывод шаблона обновления записи
    public function action_updrecord(){

        $category = $this->category->selectCategoryMenu();
         
        $item = $this->category->selectRecord($this->params[3]);

        //Настройки
        $title = 'Редактирование записи';
        $header = 'Редактирование записи';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/tinymce/tinymce.min.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.date.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.time.js"></script>
                <script type="text/javascript" src="/dist/pickadate/legacy.js"></script>
                <script type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"></script>
                <script type="text/javascript" src="/dist/jquery.liTranslit.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/category_record_upd.js"></script>
                <script type="text/javascript" src="/dist/config/pickadate/config.js"></script>
                <script type="text/javascript" src="/dist/config/pickadate/config-time.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config2.js"></script>
                <script type="text/javascript" src="/dist/config/filemanager/responsive_filemanager_callback.js"></script>
                <script type="text/javascript" src="/dist/config/validate/category_record_upd.js"></script>
            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.time.css" />
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
        $item['descr'] = htmlspecialchars($item['descr']);
        $item['text'] = htmlspecialchars($item['text']);
        $smarty->assign('item', $item);
        $smarty->assign('category', $category);
        $datetime = strtotime($item['datetime']);
        $smarty->assign('date', date("Y-m-d",$datetime));
        $smarty->assign('time', date("H:i",$datetime));

        //Вывод шаблона
        $smarty->display('category_record_upd.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }



	//Удаление записи
    public function action_delrecord(){

        $result = $this->category->deleteRecord($this->params[3]);

        if ($result == true) {
            header('Location: /admin/category/records/' . $this->params[3]);
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/category/records/' . $this->params[3]);
            exit();
        }

    }

	//Проверка уникальности url записи
    public function action_unic_record(){

        exit($this->category->unicRecord($this->url, '0'));

    }

	//Проверка уникальности url записи при обновлении
    public function action_unicexist_record(){

        exit($this->category->unicRecord($this->url, $this->id));

    }

}