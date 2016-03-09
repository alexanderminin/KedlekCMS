<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\MFrontPage;

//Контроллер страниц
class CFrontPage extends CFrontController
{
	//Вывод шаблона страницы
    public function action_index(){
        //Получаем данные страницы
        $item = MFrontPage::selectPage($this->params[0]);

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Общие настройки страницы
        $smarty->assign('seo_title',$item['seo_title']);
        $smarty->assign('seo_descr',$item['seo_descr']);
        $smarty->assign('seo_keywords',$item['seo_keywords']);
        $smarty->assign('title',$item['title']);

        //Контент страницы
        $smarty->assign('text',$item['text']);

        //Вывод шаблона
        $smarty->display('page.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }
}