<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\PageManager;

//Контроллер главной страницы
class CHome extends CController
{


	//Вывод шаблона главной страницы
    public function action_index(){

        //Инициализация Smarty
        $smarty = $this->SmartyInit();


        //Получаем данные главной страницы
        if($this->site_config['home_url'] != ''){

            $page = new PageManager();
            $item = $page->selectPage($this->site_config['home_url']);

            //Общие настройки страницы
            $smarty->assign('seo_title',$item['seo_title']);
            $smarty->assign('seo_descr',$item['seo_descr']);
            $smarty->assign('seo_keywords',$item['seo_keywords']);
            $smarty->assign('title',$item['title']);

            //Контент страницы
            $smarty->assign('text',$item['text']);
            $smarty->assign('home_html',$this->site_config['home_html']);

        }else{

            //Общие настройки страницы
            $smarty->assign('seo_title',$this->site_config['site_title']);
            $smarty->assign('seo_descr',$this->site_config['site_title']);
            $smarty->assign('seo_keywords',$this->site_config['site_title']);
            $smarty->assign('title',$this->site_config['site_title']);

            //Контент страницы
            $smarty->assign('text','Главная страница не задана');
            $smarty->assign('home_html',$this->site_config['home_html']);

        }

        //Вывод шаблона
        $smarty->display('home.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();


    }

	//Вывод шаблона 404 страницы
    public function action_404(){

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Общие настройки страницы
        $smarty->assign('seo_title','404');
        $smarty->assign('seo_descr','Такой страницы не существует');
        $smarty->assign('seo_keywords','Такой страницы не существует');
        $smarty->assign('title','404');

        //Вывод шаблона
        $smarty->display('404.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

}