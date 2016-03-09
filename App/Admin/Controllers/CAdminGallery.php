<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\MAdminGallery;

//Контроллер галереи
class CAdminGallery extends CAdminController
{

    public $title;
    public $descr;
    public $datetime;
    public $type;
    public $id;
    public $file;
    public $ord;
    public $url;
    public $position;
    public $g_id;
    public $gallery_list_id;
    public $seo_title;
    public $seo_descr;
    public $seo_keywords;

    function __construct(\Slim\Slim $context){
        parent::__construct($context);
        if ($this->getContext()->request()->isPost()){
            if (!empty($this->getContext()->request()->post('title'))){
                $this->title = $this->string_valid($this->getContext()->request()->post('title'));
            }
            if (!empty($this->getContext()->request()->post('descr'))){
                $this->descr = $this->string_valid($this->getContext()->request()->post('descr'));
            }
            if (!empty($this->getContext()->request()->post('datetime'))){
                $this->datetime = $this->string_valid($this->getContext()->request()->post('datetime'));
            }
            if (!empty($this->getContext()->request()->post('file'))){
                $this->file = $this->string_valid($this->getContext()->request()->post('file'));
            }
            if (!empty($this->getContext()->request()->post('type'))){
                $this->type = abs((int)$this->getContext()->request()->post('type'));
            }
            if (!empty($this->getContext()->request()->post('id'))){
                $this->id = abs((int)$this->getContext()->request()->post('id'));
            }
            if (!empty($this->getContext()->request()->post('url'))){
                $this->url = $this->string_valid($this->getContext()->request()->post('url'));
            }
            if (!empty($this->getContext()->request()->post('g_id'))){
                $this->g_id = abs((int)$this->getContext()->request()->post('g_id'));
            }
            if (!empty($this->getContext()->request()->post('gallery_list_id'))){
                $this->gallery_list_id = abs((int)$this->getContext()->request()->post('gallery_list_id'));
            }
            if (!empty($this->getContext()->request()->post('position'))){
                $this->position = $this->string_valid($this->getContext()->request()->post('position'));
            }
            if (!empty($this->getContext()->request()->post('ord'))){
                $this->ord = $this->string_valid($this->getContext()->request()->post('ord'));
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
        }
    }

    //-----------------------------
    //Разделы галереи
    //-----------------------------

    //Создаем новый раздел галереи
    public function action_add_gallery_list(){
        $result = MAdminGallery::addGalleryList($this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);
        if ($result){
            header('Location: /admin/gallerylist');
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка добавления';
            header('Location: /admin/gallerylist');
            exit();
        }
    }

    //Обновление раздела галерея
    public function action_update_gallery_list(){
        $result = MAdminGallery::updateGalleryList($this->id, $this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);
        if ($result){
            header('Location: /admin/gallerylist');
            exit();
        } else {
            if ($result !== 0) $_SESSION['error'] = 'Ошибка добавления';
            header('Location: /admin/gallerylist');
            exit();
        }
    }

    //Проверка url создаваемого раздела на уникальность
    public function action_unic(){
        echo MAdminGallery::unicGalleryList($this->url, '0');
        exit();
    }

    //Проверка url обновляемого раздела на уникальность при обновлении
    public function action_unicexist(){
        echo MAdminGallery::unicGalleryList($this->url, $this->id);
        exit();
    }

    //Вывод шаблона разделов галереи
    public function action_index(){
        $items = MAdminGallery::selectGalleryListAll();
        //Настройки
        $title = 'Список разделов галереи';
        $header = 'Список разделов галереи';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_list.js"></script>

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
        $smarty->display('gallery_list.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона добавления раздела галереи
    public function action_addgallerylist(){
        //Настройки
        $title = 'Добавление раздела галереи';
        $header = 'Добавление раздела галереи';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
                <script type="text/javascript" src="/dist/jquery.liTranslit.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_list_add.js"></script>
                <script type="text/javascript" src="/dist/config/validate/gallery_list_add.js"></script>
                <script type="text/javascript" src="/dist/config/liTranslit/gallery_list_add.js"></script>
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
        $smarty->display('gallery_list_add.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона обновления раздела галереи
    public function action_updgallerylist(){
        $item = MAdminGallery::selectGalleryList($this->params);
        //Настройки
        $title = 'Редактирование раздела галереи';
        $header = 'Редактирование раздела галереи';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_list_upd.js"></script>
                <script type="text/javascript" src="/dist/config/validate/gallery_list_upd.js"></script>
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
        $smarty->display('gallery_list_upd.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Удаление раздела галереи с проверкой на наличие элементов
    public function action_del_gallery_list(){
        $count = MAdminGallery::countGallery($this->params);
        if($count == 0){
            $result = MAdminGallery::deleteGalleryList($this->params);
            if ($result){
                header('Location: /admin/gallerylist');
                exit();
            } else {
                $_SESSION['error'] = $result;
                header('Location: /admin/gallerylist');
                exit();
            }
        } else {
            $_SESSION['error'] = 'У галереи есть элементы в кол-ве: ' . $count . ' шт. Для начала необходимо удалить их.';
            header('Location: /admin/gallerylist');
            exit();
        }
    }

    //-----------------------------
    //Элементы галереи
    //-----------------------------

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

    //AJAX запрос на Преобразование Адреса для миниатюры
    public function action_thumb(){
        echo $this->action_thumb_path();
        exit();
    }

    //Добавление элемета галереи (Альбом, видео)
    public function action_add(){
        if($this->type == 1){
            $thumb = $this->action_thumb_path();
        } else {
            $thumb ='';
        }
        $result = MAdminGallery::addGallery($this->title, $this->descr, $this->datetime, $this->type, $this->file, $thumb, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->gallery_list_id, $this->url);
        if ($result){
            if($this->type == 1){
                header('Location: /admin/gallerylist/updgallery/' . $result);
            }
            if($this->type == 2){
                header('Location: /admin/gallerylist/gallery/' . $this->gallery_list_id);
            }
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка добавления';
            if($this->type == 1){
                header('Location: /admin/gallerylist/addgallery');
            }
            if($this->type == 2){
                header('Location: /admin/gallerylist/gallery/' . $this->gallery_list_id);
            }
            exit();
        }
    }

    //Обновление элемета галереи (Альбома)
    public function action_update(){
        $thumb = $this->action_thumb_path();
        $result = MAdminGallery::updateGallery($this->id, $this->title, $this->descr, $this->datetime, $this->file, $thumb, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->gallery_list_id, $this->url);
        if ($result){
            header('Location: /admin/gallerylist/updgallery/' . $this->id);
            exit();
        } else {
            if ($result !== 0) $_SESSION['error'] = 'Ошибка обновления';
            header('Location: /admin/gallerylist/updgallery/'. $this->id);
            exit();
        }
    }

    //Обновление элемета галереи (Видео)
    public function action_update_video(){
        $result = MAdminGallery::updateGalleryVideo($this->id, $this->title, $this->descr, $this->datetime, $this->file, $this->gallery_list_id);
        if ($result){
            header('Location: /admin/gallerylist/updgalleryvideo/' . $this->id);
            exit();
        } else {
            if ($result !== 0) $_SESSION['error'] = 'Ошибка обновления';
            header('Location: /admin/gallerylist/updgalleryvideo/'. $this->id);
            exit();
        }
    }

    //Проверка url создаваемого альбом на уникальность
    public function action_unic_gallery(){
        echo MAdminGallery::unicGallery($this->url, '0');
        exit();
    }

    //Проверка url обновляемого альбома на уникальность при обновлении
    public function action_unicexist_gallery(){
        echo MAdminGallery::unicGallery($this->url, $this->id);
        exit();
    }

    //Удаление элемента галереи
    public function action_del(){
        $result = MAdminGallery::deleteGallery($this->params);
        if ($result){
            header('Location: /admin/gallerylist');
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка удаления';
            header('Location: /admin/gallerylist');
            exit();
        }
    }

    //Вывод шаблона списка элементов галереи
    public function action_gallery(){
        $result = MAdminGallery::selectGalleryList($this->params);
        $gallery_title = $result['title'];
        $items = MAdminGallery::selectAllGallery($this->params);

        //Настройки
        $javascript = 
            '

            ';
        $css = 
            '
                <link rel="stylesheet" type="text/css" href="/dist/config/css/gallery.css" />
                <style>#help_button{display:none;}</style>
            ';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $gallery_title);
        $smarty->assign('header', $gallery_title);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Вывод данных
        $smarty->assign('items',$items);

        //Вывод шаблона
        $smarty->display('gallery.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }
    
    //Вывод шаблона добавления видео
    public function action_addvideo(){
        $gallery_list = MAdminGallery::selectGalleryListMenu();
        //Настройки
        $title = 'Добавить видео';
        $header = 'Добавить видео';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/pickadate/picker.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.date.js"></script>
                <script type="text/javascript" src="/dist/pickadate/legacy.js"></script>
                <script type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"></script>

                <script type="text/javascript" src="/dist/config/pickadate/config.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_video_add.js"></script>
                <script type="text/javascript" src="/dist/config/validate/gallery_video_add.js"></script>

            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
            ';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Вывод данных
        $date = date("Y-m-d",time());
        $smarty->assign('date', $date);
        $smarty->assign('gallery_list', $gallery_list);

        //Вывод шаблона
        $smarty->display('gallery_video_add.page.tpl');


        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона добавления альбома
    public function action_addgallery(){
        $gallery_list = MAdminGallery::selectGalleryListMenu();
        //Настройки
        $title = 'Добавить альбом';
        $header = 'Добавить альбом';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/pickadate/picker.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.date.js"></script>
                <script type="text/javascript" src="/dist/pickadate/legacy.js"></script>
                <script type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
                <script type="text/javascript" src="/dist/jquery.liTranslit.js"></script>

                <script type="text/javascript" src="/dist/config/pickadate/config.js"></script>
                <script type="text/javascript" src="/dist/config/filemanager/responsive_filemanager_callback.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_add.js"></script>
                <script type="text/javascript" src="/dist/config/validate/gallery_add.js"></script>
                <script type="text/javascript" src="/dist/config/liTranslit/gallery_add.js"></script>

            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
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
        $date = date("Y-m-d",time());
        $smarty->assign('date', $date);
        $smarty->assign('gallery_list', $gallery_list);

        //Вывод шаблона
        $smarty->display('gallery_add.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона обновления альбома
    public function action_updgallery(){
        $gallery_list = MAdminGallery::selectGalleryListMenu();
        $g_id = $this->params;
        $item = MAdminGallery::selectGallery($g_id);
        $items = MAdminGallery::selectGalleryItems($g_id);

        //Настройки
        $title = 'Редактировать альбом';
        $header = 'Редактировать альбом';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/pickadate/picker.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.date.js"></script>
                <script type="text/javascript" src="/dist/pickadate/legacy.js"></script>
                <script type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"></script>
                <script type="text/javascript" src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js"></script>
                <script type="text/javascript" src="/dist/sortable/Sortable.min.js"></script>
                <script type="text/javascript" src="/dist/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

                <script type="text/javascript" src="/dist/config/validate/gallery_upd.js"></script>
                <script type="text/javascript" src="/dist/config/pickadate/config.js"></script>
                <script type="text/javascript" src="/dist/config/sortable/config.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_upd.js"></script>
                <script type="text/javascript" src="/dist/config/other/gallery_upd.js"></script>
            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
                <link rel="stylesheet" type="text/css" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
                <link rel="stylesheet" type="text/css" href="/dist/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css">
                <link rel="stylesheet" type="text/css" href="/dist/config/css/gallery_upd.css" />
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
        $smarty->assign('g_id',$g_id);
        $smarty->assign('item',$item);
        $smarty->assign('items',$items);
        $smarty->assign('gallery_list', $gallery_list);

        //Вывод шаблона
        $smarty->display('gallery_upd.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона обновления видео
    public function action_updgalleryvideo(){
        $gallery_list = MAdminGallery::selectGalleryListMenu();
        $item = MAdminGallery::selectGallery($this->params);
        //Настройки
        $title = 'Редактировать видео';
        $header = 'Редактировать видео';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/pickadate/picker.js"></script>
                <script type="text/javascript" src="/dist/pickadate/picker.date.js"></script>
                <script type="text/javascript" src="/dist/pickadate/legacy.js"></script>
                <script type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"></script>

                <script type="text/javascript" src="/dist/config/pickadate/config.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/gallery_video_upd.js"></script>
                <script type="text/javascript" src="/dist/config/other/gallery_video_upd.js"></script>
            ';
        $css =
            '
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
                <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
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
        $smarty->assign('gallery_list', $gallery_list);

        //Вывод шаблона
        $smarty->display('gallery_video_upd.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //-----------------------------
    //Содержимое альбома
    //-----------------------------
    
    //Добавление фото в альбом
    public function action_itemadd(){
        $thumb = $this->action_thumb_path();
        $result = MAdminGallery::addGalleryItem($this->file, $thumb, $this->g_id);
        if ($result){
            header('Location: /admin/gallerylist/updgallery/' . $this->g_id);
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка добавления';
            header('Location: /admin/gallerylist/updgallery/' . $this->g_id);
            exit();
        }
    }

    //Обновление порядка фото в альбоме
    public function action_itemsupdate(){
        $this->position = json_decode($this->position, true);
        $items = $this->position;
        foreach ($items as $item){
            MAdminGallery::updateGalleryItem($item['id'], $item['ord']);
        }
        echo 'Новый порядок сохранен';
        exit();
    }

    //Удаление фото из альбома
    public function action_delitem(){
        $id = MAdminGallery::selectGalleryItem($this->params);
        $result = MAdminGallery::deleteGalleryItem($this->params);
        if ($result){
            header('Location: /admin/gallerylist/updgallery/' . $id['g_id']);
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка удаления';
            header('Location: /admin/gallerylist/updgallery/' . $id['g_id']);
            exit();
        }
    }
}