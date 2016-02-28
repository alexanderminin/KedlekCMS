<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\MFrontGallery;

//Контроллер галееи
class CFrontGallery extends CFrontController
{

	  //Вывод шаблона списка галереии
    public function action_index(){
        //Получаем данные галереи
        $gallery_list = MFrontGallery::selectGalleryList($this->params[0]);
        $items = MFrontGallery::selectGalleryAll($gallery_list['id']);

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Пагинатор
        //Кол-во записей
        $Num_Rows = count($items);

        //Кол-во записей на странице
        $Per_Page = $this->site_config['gallery_per_page'];

        //Если кол-во элементов превышает то выводим пагинатор
        if($Num_Rows > $Per_Page){

            //Текущий номер страницы
            if (!isset($this->params[1])) {
                $Page=1;
            }else{
                $Page = $this->params[1];
            }
            $smarty->assign('Page',$Page);

            //Точка отсчета
            $Page_Start = (($Per_Page*$Page)-$Per_Page);
            if ($Num_Rows<=$Per_Page) {
                $Num_Pages =1;
            } elseif (($Num_Rows % $Per_Page)==0) {
                $Num_Pages =($Num_Rows/$Per_Page) ;
            } else {
                $Num_Pages =($Num_Rows/$Per_Page)+1;
                $Num_Pages = (int)$Num_Pages;
            }

            //Точка завершения
            $Page_End = $Per_Page * $Page;
            if ($Page_End > $Num_Rows) {
                $Page_End = $Num_Rows;
            }

            //Формирование списка записей на странице
            $item = array();
            for($i=$Page_Start;$i<$Page_End;$i++){
                $item[] = $items[$i];
            }
            $smarty->assign('items',$item);

            //Кнопка Пред.
            $Prev_Page = $Page-1;
            if($Prev_Page > 0){
                $smarty->assign('Prev_Page',$Prev_Page);
            }

            //Кнопка след
            $Next_Page = $Page+1;
             if($Num_Pages != $Page){
                $smarty->assign('Next_Page',$Next_Page);
            }

            //Стартовое значение для ссылок пагинатора
            $start = $Page - 4;
            if($start <= 0){
                $start = 1;
            }

            //Конечное значение для ссылок пагинатора
            $ost = $Num_Pages - $Page;
            if($ost === 0){
                $end = $Page;
            }else if($ost > 5){
                $end = $Page + 4;
            }else{
                $end = $Page + $ost;
            }

            //Формирование ссылок пагинатора
            $pag_urls = array();
            for ($i=$start; $i<=$end; $i++) {
                $pag_urls[] = $i;
            }
            $smarty->assign('pag_urls',$pag_urls);

        } else {

            $smarty->assign('items',$items);

        }

        //Общие настройки страницы
        $smarty->assign('gallery_list_url',$this->params[0]);
        $smarty->assign('seo_title',$gallery_list['seo_title']);
        $smarty->assign('seo_descr',$gallery_list['seo_descr']);
        $smarty->assign('seo_keywords',$gallery_list['seo_keywords']);
        $smarty->assign('title',$gallery_list['title']);

        //Вывод шаблона
        $smarty->display('gallery_list.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	  //Вывод шаблона галереи
    public function action_view(){
        //Получаем данные галереи
        $item = MFrontGallery::selectGallery($this->params[1]);
        $items = MFrontGallery::selectGalleryItems($item['id']);

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Общие настройки страницы
        $smarty->assign('seo_title',$item['seo_title']);
        $smarty->assign('seo_descr',$item['seo_descr']);
        $smarty->assign('seo_keywords',$item['seo_keywords']);
        $smarty->assign('title',$item['title']);
        $smarty->assign('descr',$item['descr']);

        //Контент страницы
        $smarty->assign('parent_url',$item['parent_url']);
        $smarty->assign('parent_title',$item['parent_title']);
        $smarty->assign('items',$items);

        //Вывод шаблона
        $smarty->display('gallery.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }
}