<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\CategoryManager;

//Контроллер страниц
class CCategory extends CController
{

	//Вывод шаблона категорий
    public function action_index(){

        //Получаем данные категории
        $class = new CategoryManager();
        $category = $class->selectCategory($this->params[0]);
        $records = $class->selectRecords($category['id']);

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Пагинатор
        //Кол-во записей
        $Num_Rows = count($records);

        //Кол-во записей на странице
        $Per_Page = $this->site_config['record_per_page'];

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
            $record = array();
            for($i=$Page_Start;$i<$Page_End;$i++){
                $record[] = $records[$i];
            }
            $smarty->assign('records',$record);

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

            $smarty->assign('records',$records);

        }

        //Общие настройки страницы
        $smarty->assign('category_url', $this->params[0]);
        $smarty->assign('seo_title',$category['seo_title']);
        $smarty->assign('seo_descr',$category['seo_descr']);
        $smarty->assign('seo_keywords',$category['seo_keywords']);
        $smarty->assign('title',$category['title']);

        //Вывод шаблона
        $smarty->display('category.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }


}