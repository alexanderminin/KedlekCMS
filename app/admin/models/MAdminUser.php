<?php
namespace Cms\Admin\Models;

use Illuminate\Database\Capsule\Manager as DB;

//пользователи
class MAdminUser
{

    //Вывод пользователя(ей)
    public static function selectUser($id = null){
        if($id){
            return DB::table('kedlek_users')->where('id', $id)->first();
        } else {
            return DB::table('kedlek_users')->get();
        }
    }

    //Добавление пользователя
    public static function addUser($data){
        return DB::table('kedlek_users')->insertGetId($data);
    }
    
    //Авторизация пользователя
    public static function getUserByLogin($login){
        return DB::table('kedlek_users')->where('login', $login)->first();
    }

    //удаление пользователя
    public static function deleteUser($id){
        return DB::table('kedlek_users')->where('id', $id)->delete();
    }

    //Обновление пользователя
    public static function updateUser($id, $login, $new_login, $fio, $mail, $role){
        if ($login != $new_login){
            $login_isset = self::getUserByLogin($new_login);
            if (!empty($login_isset)){
                return false;
            }
        }
        $data = [
          "login" => $new_login,
          "fio" => $fio,
          "mail" => $mail,
          "role" => $role
        ];
        return DB::table('kedlek_users')->where('id', $id)->update($data);
    }
    
    //изменение пароля
    public static function updateUserPass($id, $old_pass, $new_pass){
        $user = self::selectUser($id);
        $base_pass = $user['password'];
        if (password_verify($old_pass, $base_pass)){
            $new_pass = password_hash($new_pass, PASSWORD_BCRYPT);
            return DB::table('kedlek_users')->where('id', $id)->update(["password" => $new_pass]);
        } else {
            return false;
        } 
    }
    
}