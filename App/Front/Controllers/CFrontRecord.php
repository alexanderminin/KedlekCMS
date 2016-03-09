<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\MFrontRecord;

//Контроллер записи
class CFrontRecord extends CFrontController
{

	  //Вывод шаблона записи
    public function action_index(){
        //Получаем данные страницы
        $record = MFrontRecord::selectRecord($this->params[1]);

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Общие настройки страницы
        $smarty->assign('seo_title',$record['seo_title']);
        $smarty->assign('seo_descr',$record['seo_descr']);
        $smarty->assign('seo_keywords',$record['seo_keywords']);
        $smarty->assign('title',$record['title']);

        //Контент страницы
        $smarty->assign('text',$record['text']);
        $smarty->assign('datetime',$record['datetime']);
        $smarty->assign('file',$record['file']);
        $smarty->assign('thumb',$record['thumb']);

        //Вывод шаблона
        $smarty->assign('parent_url',$record['parent_url']);
        $smarty->assign('parent_title',$record['parent_title']);
        $smarty->display('record.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }
}