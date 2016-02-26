<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\AdminUserManager;

//Контроллер авторизации
class CAdminAuth
{
    private $login;
    private $password;
    private $users;

    function __construct(){

        if (isset($_POST['login'])){
           $this->login = $this->string_valid($_POST['login']);
        }

        if (isset($_POST['password'])){
           $this->password = $this->string_valid($_POST['password']);
        }

        $this->users = new AdminUserManager();
    }

    public function string_valid($string){

        return trim(strip_tags($string));

    }

    protected function isPost() {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

	//проверка сессии
    function action_check(){

        if(isset($_SESSION['auth'])){

            if ($_SESSION['auth'] != 'auth') {
                $this->action_index();
                exit();
            }

        }else{
            $this->action_index();
            exit();
        }

    }

	//вывод страницы авторизации
    function action_index(){

        ob_start();
        include ROOT_DIR."/templates/admin/login.page.tpl";
        echo ob_get_clean();  

    }

	//авторизация 
    function action_auth(){

        if ($this->isPost()){

          $result = $this->users->authUser($this->login, $this->password);

          if($result){

              header("Location: /admin/home");
              exit();

          }else{

              $_SESSION['error'] = 'Ошибка авторизации';
              header("Location: /admin/login");
              exit();

          }

        }

    }
	//выход
    function action_logout(){

        unset($_SESSION['user_id']);
        unset($_SESSION['auth']);
        unset($_SESSION['role']);
        session_destroy();
        header("Location: /admin/login");
        exit();

    }



}