<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\AdminUserManager;

//Контроллер пользователей
class CAdminUser extends CAdminController
{

    public $users;
    public $id;
    public $login;
    public $new_login;
    public $password;
    public $fio;
    public $mail;
    public $role;
    public $old_pass;
    public $new_pass;

    function __construct(\Slim\Slim $context){

        parent::__construct($context);

        $this->users = new AdminUserManager();

        if ($this->getContext()->request()->isPost()){

            if (!empty($this->getContext()->request()->post('id'))){
                $this->id = abs((int)$this->getContext()->request()->post('id'));
            }

            if (!empty($this->getContext()->request()->post('login'))){
                $this->login = $this->string_valid($this->getContext()->request()->post('login'));
            }

            if (!empty($this->getContext()->request()->post('new_login'))){
                $this->new_login = $this->string_valid($this->getContext()->request()->post('new_login'));
            }

            if (!empty($this->getContext()->request()->post('password'))){
                $this->password = $this->string_valid($this->getContext()->request()->post('password'));
            }

            if (!empty($this->getContext()->request()->post('fio'))){
                $this->fio = $this->string_valid($this->getContext()->request()->post('fio'));
            }

            if (!empty($this->getContext()->request()->post('role'))){
                $this->role = $this->string_valid($this->getContext()->request()->post('role'));
            }

            if (!empty($this->getContext()->request()->post('mail'))){
                $this->mail = $this->string_valid($this->getContext()->request()->post('mail'));
            }

            if (!empty($this->getContext()->request()->post('old_pass'))){
                $this->old_pass = $this->string_valid($this->getContext()->request()->post('old_pass'));
            }

            if (!empty($this->getContext()->request()->post('new_pass'))){
                $this->new_pass = $this->string_valid($this->getContext()->request()->post('new_pass'));
            }

        }

    }

	//Добавление пользователя
    public function action_add(){

        $result = $this->users->addUser($this->login, $this->password, $this->fio, $this->mail, $this->role);

        if ($result['id'] >= 0) {

            header('Location: /admin/users/user/' . $result['id']);
            exit();

        }else{

            $_SESSION['error'] = $result;
            header('Location: /admin/users');
            exit();
        }

    }

	//Обновление пользователя
    public function action_update(){


        $result = $this->users->updateUser($this->id, $this->login, $this->new_login, $this->fio, $this->mail, $this->role);

        if ($result == true) {
            $_SESSION['message'] = 'Пользователь обновлен';
            $_SESSION['role'] = $this->role;
            header('Location: /admin/users/user/' . $this->id);
            exit();
        }else{
            $_SESSION['error'] = 'Ошибка обновления';
            header('Location: /admin/users/user/'. $this->id);
            exit();
        }

    }

	//Обновление пароля
    public function action_updatepass(){

        $result = $this->users->updateUserPass($this->id, $this->old_pass, $this->new_pass);

        if ($result == true) {
            $_SESSION['message'] = 'Пароль обновлен';
            header('Location: /admin/users/user/' . $this->id);
            exit();
        }else{
            $_SESSION['error'] = 'Ошибка';
            header('Location: /admin/users/user/'. $this->id);
            exit();
        }

    }

	//Вывод шаблона списка пользователей
    public function action_index(){
        
        $items = $this->users->selectUser();

        //Настройки
        $title = 'Список пользователей';
        $header = 'Список пользователей';
        $javascript =
            '
                <script src="/dist/stacktable/stacktable.js" type="text/javascript"></script>

                <script>
                  $("#card-table").cardtable({myClass:"stacktable small-only" });
                </script>
                
            ';
        $css =
            '
                <link href="/dist/stacktable/stacktable.css" rel="stylesheet" />
                <style>#help_button{display:none;}</style>

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
        $smarty->display('users.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign(); 

    }

	//Вывод шаблона профиля пользователя
    public function action_user(){
        
        $item = $this->users->selectUser($this->params);


        //Настройки
        $title = 'Профиль пользователя';
        $header = 'Профиль пользователя';
        $javascript ='';
        $css =
            '
                <style>#help_button{display:none;}</style>
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
        $smarty->display('user.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();

    }

	//Удаление пользователя
    public function action_del(){

        $result = $this->users->deleteUser($this->params);

        if ($result == true) {
            header('Location: /admin/users');
            exit();
        }else{
            $_SESSION['error'] = 'Ошибка удаления';
            header('Location: /admin/users/user' . $this->params);
            exit();
        }

    }

}