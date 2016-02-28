<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\MAdminMessages;

//Контроллер сообщений
class CAdminMessages extends CAdminController
{
    public $id;

    function __construct(\Slim\Slim $context){
        parent::__construct($context);
        if ($this->getContext()->request()->isPost()){
            if (!empty($this->getContext()->request()->post('id'))){
                $this->id = abs((int)$this->getContext()->request()->post('id'));
            }
        }
    }

	  //Помечаем сообщение как прочитанное
    public function action_read(){
        $result = MAdminMessages::markIsRead($this->params);
        if ($result){
            header('Location: /admin/messages');
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка';
            header('Location: /admin/messages');
            exit();
        }
    }

	  //Вывод шаблона списка сообщений
    public function action_index(){
        $items = MAdminMessages::selectAll();
        //Настройки
        $title = 'Сообщения с сайта';
        $header = 'Сообщения с сайта';
        $javascript =
            '
                <script src="/dist/stacktable/stacktable.js" type="text/javascript"></script>

                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/messages.js"></script>

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
        $smarty->display('messages.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	  //Удаление сообщения
    public function action_del(){
        $result = MAdminMessages::deleteMessage($this->params);
        if ($result){
            header('Location: /admin/messages');
            exit();
        } else {
            $_SESSION['error'] = 'Ошибка удаления';
            header('Location: /admin/messages');
            exit();
        }
    }

}