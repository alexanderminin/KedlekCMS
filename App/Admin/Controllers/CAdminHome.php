<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\MAdminMessages;

//Контроллер главной страницы
class CAdminHome extends CAdminController
{
	  //Вывод шаблона главной страницы
    public function action_index(){
        $items = MAdminMessages::selectNew();
        //Настройки
        $title = 'Главная';
        $header = 'Главная';
        $javascript =
            '
                <script src="/dist/stacktable/stacktable.js" type="text/javascript"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/home.js"></script>

                <script>
                  $("#card-table").cardtable({myClass:"stacktable small-only" });
                </script>
            ';
        $css =
            '
                <link href="/dist/stacktable/stacktable.css" rel="stylesheet" />
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
        $smarty->display('home.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }
}