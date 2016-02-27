<?php
namespace Cms\Front\Controllers;

//Контроллер страницы контактов
class CFrontContact extends CFrontController
{

	//Вывод шаблона страницы контактов
    public function action_index(){

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Общие настройки страницы
        $smarty->assign('seo_title','Контакты');
        $smarty->assign('seo_descr','Контакты');
        $smarty->assign('seo_keywords','Контакты');
        $smarty->assign('title','Контакты');

        //Вывод шаблона
        $smarty->display('contacts.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

}