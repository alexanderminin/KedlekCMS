<?
//пользователи
class AdminUserManager
{
    
    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }

    //Вывод пользователя(ей)
    function selectUser($id = null){

        if ($id) {
            return $this->db->kedlek_users[$id];
        } else {
            return $this->db->kedlek_users();
        }

    }


    //Добавление пользователя
    public function addUser($login, $password, $fio, $mail, $role){

        $password = password_hash($password, PASSWORD_BCRYPT);
        
        $data = array(
            "login" => $login,
            "password" => $password,
            "fio" => $fio,
            "mail" => $mail,
            "role" => $role
            );

        $result = $this->db->kedlek_users()->insert($data);

        return $result;

    }


  
    //Авторизация пользователя
    public function authUser($login, $password){
       
        $result = $this->db->kedlek_users()->where('login = ?', $login);
        $check = count($result);

        if ($check == 1){

            foreach ($result as $res) {

                if(password_verify($password, $res['password'])){
                    session_regenerate_id();

                    $_SESSION['auth'] = 'auth';
                    $_SESSION['role'] = $res['role'];
                    $_SESSION['user_id'] =  $res['id'];
                }

            }

            return true;

        }else{

            return true;

        }

    }


    //удаление пользователя
    function deleteUser($id){

        $item = $this->db->kedlek_users[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

    //Обновление пользователя
    function updateUser($id, $login, $new_login, $fio, $mail, $role){

        $check = 0;
        
        if ($login != $new_login) {
       
            $check = $this->db->kedlek_users()->where('login = ?', $new_login);
            $check = count($check);

            if ($check > 0) {

                return false;

            }

        }

        if ($check == 0) {

            $item = $this->db->kedlek_users[$id];

            $data = array(
                "login" => $new_login,
                "fio" => $fio,
                "mail" => $mail,
                "role" => $role
            );

            $result = $item->update($data);

            return true;

        }

    }

    
    //изменение пароля
    public function updateUserPass($id, $old_pass, $new_pass){

        $item = $this->db->kedlek_users[$id];

        $base_pass = $item['password'];

        if(password_verify($old_pass, $base_pass)){

            $new_pass = password_hash($new_pass, PASSWORD_BCRYPT);

            $data = array(
                "password" => $new_pass
            );

            $result = $item->update($data);

            return true;
            
        }else{

            return false;

        } 
    }
    
}