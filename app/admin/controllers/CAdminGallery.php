<?php
//Контроллер галереи
class CAdminGallery extends CAdminController
{

    public $gallery;
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

    function __construct(){

        parent::__construct();

        $this->gallery = new AdminGalleryManager();

        if ($this->isPost()){

            if(isset($_POST['title'])){
                $this->title = $this->string_valid($_POST['title']);
            }

            if(isset($_POST['descr'])){
                $this->descr = $this->string_valid($_POST['descr']);
            }

            if(isset($_POST['datetime'])){
                $this->datetime = $this->string_valid($_POST['datetime']);
            }

            if(isset($_POST['file'])){
                $this->file = $this->string_valid($_POST['file']);
            }

            if(isset($_POST['type'])){
                $this->type = abs((int)$_POST['type']);
            }

            if(isset($_POST['id'])){
                $this->id = abs((int)$_POST['id']);
            }

            if(isset($_POST['url'])){
                $this->url = $this->string_valid($_POST['url']);
            }

            if(isset($_POST['g_id'])){
                $this->g_id = abs((int)$_POST['g_id']);
            }

            if(isset($_POST['gallery_list_id'])){
                $this->gallery_list_id = abs((int)$_POST['gallery_list_id']);
            }

            if(isset($_POST['position'])){
                $this->position = $this->string_valid($_POST['position']);
            }

            if(isset($_POST['ord'])){
                $this->ord = $this->string_valid($_POST['ord']);
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

    //-----------------------------
    //Разделы галереи
    //-----------------------------

    //Создаем новый раздел галереи
    public function action_add_gallery_list(){
        
        $result = $this->gallery->addGalleryList($this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);

        if ($result['id'] >= 0) {

            header('Location: /admin/gallerylist');
            exit();

        }else{

            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist');
            exit();

        }

    }

    //Обновление раздела галерея
    public function action_update_gallery_list(){

        $result = $this->gallery->updateGalleryList($this->id, $this->url, $this->title, $this->seo_title, $this->seo_descr, $this->seo_keywords);

        if ($result == true) {
            header('Location: /admin/gallerylist');
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist');
            exit();
        }

    }

    //Проверка url создаваемого раздела на уникальность
    public function action_unic(){

        exit($this->gallery->unicGalleryList($this->url, '0'));

    }

    //Проверка url обновляемого раздела на уникальность при обновлении
    public function action_unicexist(){

        exit($this->gallery->unicGalleryList($this->url, $this->id));

    }

    //Вывод шаблона разделов галереи
    public function action_index(){
        
        $items = $this->gallery->selectGalleryListAll();

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

        $item = $this->gallery->selectGalleryList($this->params[3]);

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

        $count = $this->gallery->countGallery($this->params[3]);

        if($count == 0){
            $result = $this->gallery->deleteGalleryList($this->params[3]);

            if ($result == true) {
                header('Location: /admin/gallerylist');
                exit();
            }else{
                $_SESSION['error'] = $result;
                header('Location: /admin/gallerylist');
                exit();
            }
        }else{
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

        }else{

            $thumb[1] = $thumb[0];
            $thumb[0] = 'thumb';

        }

        $thumb = implode('/', $thumb);

        return $thumb;

    }

    //AJAX запрос на Преобразование Адреса для миниатюры
    public function action_thumb(){

        exit($this->action_thumb_path());

    }


    //Добавление элемета галереи (Альбом, видео)
    public function action_add(){

        if($this->type == 1){

            $thumb = $this->action_thumb_path();

        }else{

            $thumb ='';

        }
        
        $result = $this->gallery->addGallery($this->title, $this->descr, $this->datetime, $this->type, $this->file, $thumb, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->gallery_list_id, $this->url);

        if ($result['id'] >= 0) {

            if($this->type == 1){
                header('Location: /admin/gallerylist/updgallery/' . $result['id']);
            }

            if($this->type == 2){
                header('Location: /admin/gallerylist/gallery/' . $this->gallery_list_id);
            } 

            exit();

        }else{

            $_SESSION['error'] = $result;

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

        $result = $this->gallery->updateGallery($this->id, $this->title, $this->descr, $this->datetime, $this->file, $thumb, $this->seo_title, $this->seo_descr, $this->seo_keywords, $this->gallery_list_id, $this->url);

        if ($result == true) {
            header('Location: /admin/gallerylist/updgallery/' . $this->id);
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist/updgallery/'. $this->id);
            exit();
        }

    }

    //Обновление элемета галереи (Видео)
    public function action_update_video(){

        $result = $this->gallery->updateGalleryVideo($this->id, $this->title, $this->descr, $this->datetime, $this->file, $this->gallery_list_id);

        if ($result == true) {
            header('Location: /admin/gallerylist/updgalleryvideo/' . $this->id);
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist/updgalleryvideo/'. $this->id);
            exit();
        }

    }

    //Проверка url создаваемого альбом на уникальность
    public function action_unic_gallery(){

        exit($this->gallery->unicGallery($this->url, '0'));

    }

    //Проверка url обновляемого альбома на уникальность при обновлении
    public function action_unicexist_gallery(){

        exit($this->gallery->unicGallery($this->url, $this->id));

    }

    //Удаление элемента галереи
    public function action_del(){

        $result = $this->gallery->deleteGallery($this->params[3]);

        if ($result == true) {
            header('Location: /admin/gallerylist');
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist');
            exit();
        }

    }

    //Вывод шаблона списка элементов галереи
    public function action_gallery(){

        $result = $this->gallery->selectGalleryList($this->params[3]);
        $gallery_title = $result['title'];
        
        $items = $this->gallery->selectAllGallery($this->params[3]);

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

        $gallery_list = $this->gallery->selectGalleryListMenu();

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

        $gallery_list = $this->gallery->selectGalleryListMenu();

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

        $gallery_list = $this->gallery->selectGalleryListMenu();
        $g_id = $this->params[3];
        $item = $this->gallery->selectGallery($g_id);
        $items = $this->gallery->selectGalleryItems($g_id);

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

        $gallery_list = $this->gallery->selectGalleryListMenu();
        $item = $this->gallery->selectGallery($this->params[3]);

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
        
        $result = $this->gallery->addGalleryItem($this->file, $thumb, $this->g_id);

        if ($result['id'] >= 0) {
         
            header('Location: /admin/gallerylist/updgallery/' . $this->g_id);
            exit();

        }else{

            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist/updgallery/' . $this->g_id);
            exit();
        }

    }

    //Обновление порядка фото в альбоме
    public function action_itemsupdate(){

        $this->position = json_decode($this->position, true);

        $items = $this->position;

        foreach ($items as $item){

            $this->gallery->updateGalleryItem($item['id'], $item['ord']);

        }

        echo 'Новый порядок сохранен';

        exit();


    }

    //Удаление фото из альбома
    public function action_delitem(){


        $id = $this->gallery->selectGalleryItem($this->params[3]);


        $result = $this->gallery->deleteGalleryItem($this->params[3]);

        if ($result == true) {
            header('Location: /admin/gallerylist/updgallery/' . $id['g_id']);
            exit();
        }else{
            $_SESSION['error'] = $result;
            header('Location: /admin/gallerylist/updgallery/' . $id['g_id']);
            exit();
        }

    }

}