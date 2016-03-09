<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\MAdminCategory;

//Контроллер категорий и записей
class CAdminCategory extends CAdminController
{
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


    function __construct(\Slim\Slim $context){
        parent::__construct($context);
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
            if (!empty($this->getContext()->request()->post('descr'))){
                $this->descr = trim($this->getContext()->request()->post('descr'));
            }
            if (!empty($this->getContext()->request()->post('text'))){
                $this->text = trim($this->getContext()->request()->post('text'));
            }
            if (!empty($this->getContext()->request()->post('seo_title'))){
                $this->seo_title = $this->string_valid($this->getContext()->request()->post('seo_title'));
            }
            if (!empty($this->getContext()->request()->post('seo_descr'))){
                $this->seo_descr = $this->string_valid($this->getContext()->request()->post('seo_descr'));
            }
            if (!empty($this->getContext()->request()->post('seo_keywords'))){
                $this->seo_keywords = $this->string_valid($this->getContext()->request()->post('seo_keywords'));
            }
            if (!empty($this->getContext()->request()->post('category_id'))){
                $this->category_id = abs((int)$this->getContext()->request()->post('category_id'));
            }
            if (!empty($this->getContext()->request()->post('file'))){
                $this->file = $this->string_valid($this->getContext()->request()->post('file'));
            }
            if(!empty($this->getContext()->request()->post('date')) && !empty($this->getContext()->request()->post('time'))){
                $date = $this->string_valid($this->getContext()->request()->post('date'));
                $time = $this->string_valid($this->getContext()->request()->post('time'));
                $this->datetime = $date . ' ' . $time . ':00';
            }
        }
    }

	  //Категории
	  //Добавление категории
    public function action_add_category(){
        $result = MAdminCategory::addCategory($this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);
        if ($result){
            header('Location: /admin/category');
            exit();
        } else {
            $_SESSION['error'] = $result;
            header('Location: /admin/category');
            exit();
        }
    }

	  //Обновление категории
    public function action_update_category(){
        $result = MAdminCategory::updateCategory($this->id, $this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);
        if ($result){
            header('Location: /admin/category');
            exit();
        } else {
            if ($result !== 0) $_SESSION['error'] = 'Ошибка обновления';
            header('Location: /admin/category');
            exit();
        }
    }

	  //Вывод шаблона списка категорий
    public function action_index(){
        $items = MAdminCategory::selectAllCategory();
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
        $item = MAdminCategory::selectCategory($this->params);
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
        echo MAdminCategory::unicCategory($this->url, '0');
        exit();
    }

	  //Проверка url категории на уникальность при обновлении
    public function action_unicexist(){
        echo MAdminCategory::unicCategory($this->url, $this->id);
        exit();
    }

	  //Удаление категории
    public function action_delcategory(){
        $count = MAdminCategory::countRecords($this->params);
        if($count == 0){
            $result = MAdminCategory::deleteCategory($this->params);
            if ($result){
                header('Location: /admin/category');
                exit();
            } else {
                $_SESSION['error'] = 'Ошибка удаления';
                header('Location: /admin/category');
                exit();
            }
        } else {
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
        } else {
            $thumb[1] = $thumb[0];
            $thumb[0] = 'thumb';
        }
        $thumb = implode('/', $thumb);
        return $thumb;
    }

	  //Добавление записи
    public function action_add_record(){
        $thumb = $this->action_thumb_path();
        $result = MAdminCategory::addRecord($this->category_id, $this->url, $this->title, $this->descr, $this->text, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->file, $thumb, $this->datetime);
        if ($result){
            header('Location: /admin/category/records/' . $this->category_id);
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка добавления';
            header('Location: /admin/category/records/' . $this->category_id);
            exit();
        }
    }

	  //Обновление записи
    public function action_update_record(){
        $thumb = $this->action_thumb_path();
        $result = MAdminCategory::updateRecord($this->id, $this->category_id, $this->url, $this->title, $this->descr, $this->text, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->file, $thumb, $this->datetime);
        if ($result){
            header('Location: /admin/category/records/' . $this->category_id);
            exit();
        } else {
            if ($result !== 0) $_SESSION['error'] = 'Ошибка обновления';
            header('Location: /admin/category/records/' . $this->category_id);
            exit();
        }
    }

	  //Вывод шаблона записи
    public function action_records(){
        $result = MAdminCategory::selectCategory($this->params);
        $category_title = $result['title'];
        $items = MAdminCategory::selectAllRecords($this->params);
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
        $category = MAdminCategory::selectCategoryMenu();
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
        $category = MAdminCategory::selectCategoryMenu();
        $item = MAdminCategory::selectRecord($this->params);
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
        $result = MAdminCategory::deleteRecord($this->params);
        if ($result){
            header('Location: /admin/category/records/' . $this->params);
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка удаления';
            header('Location: /admin/category/records/' . $this->params);
            exit();
        }
    }

	  //Проверка уникальности url записи
    public function action_unic_record(){
        echo MAdminCategory::unicRecord($this->url, '0');
        exit();
    }

	  //Проверка уникальности url записи при обновлении
    public function action_unicexist_record(){
        echo MAdminCategory::unicRecord($this->url, $this->id);
        exit();
    }
}