<?php
namespace Cms\Front\Controllers;

use Cms\Front\Models\FrontMessagesManager;

//Контроллер сообщений
class CFrontMessages extends CFrontController
{

    public $messages;
    public $type;
    public $text;
    public $name;
    public $phone;

    function __construct(\Slim\Slim $context){

        parent::__construct($context);

        $this->messages = new FrontMessagesManager();

        if ($this->getContext()->request()->isPost()){

            if (!empty($this->getContext()->request()->post('phone'))){
                $this->phone = $this->getContext()->request()->post('phone');
            }

            if (!empty($this->getContext()->request()->post('type'))){
                $this->type = $this->getContext()->request()->post('type');
            }

            if (!empty($this->getContext()->request()->post('text'))){
                $this->text = $this->getContext()->request()->post('text');
            }

            if (!empty($this->getContext()->request()->post('name'))){
                $this->name = $this->getContext()->request()->post('name');
            }

        }

    }

	//Отправка смс
    function sendSMS($text) {

        $to = $this->site_config['sms_phone'];
        $bytehandId = $this->site_config['bytehandId'];
        $bytehandKey = $this->site_config['bytehandKey'];
        $bytehandFrom = $this->site_config['bytehandFrom'];

        $result = @file_get_contents('http://bytehand.com:3800/send?id='.$bytehandId.'&key='.$bytehandKey.'&to='.urlencode($to).'&from='.urlencode($bytehandFrom).'&text='.urlencode($text));
        
        if ($result === false) {

                return false;

        } else {
            
                return true;

        }

    }

	//Запись сообщения об обратном звонке в БД
    public function action_callback(){

        $result = $this->messages->addMessage($this->type, $this->text, $this->name, $this->phone);

		//Отправка смс если если активно
        if ($this->site_config['sms_active'] == '2'){

            $message = $this->site_config['sms_message_call'];

            $message = str_replace(
                array(
                    '{NAME}',
                    '{TIME}',
                    '{PHONE}',
                ),
                array(
                    $this->name,
                    $this->text,
                    $this->phone,
                ),
                $message);

            $this->sendSMS($message);

        }

        if ($result == true) {
            exit(true);
        }else{
            exit(false);
        }

    }

	//Запись сообщения о вопросе в БД
    public function action_question(){


        $result = $this->messages->addMessage($this->type, $this->text, $this->name, $this->phone);

		//Отправка смс если если активно
        if ($this->site_config['sms_active'] == '2'){

            $message = $this->site_config['sms_message_question'];

            $message = str_replace(
                array(
                    '{NAME}',
                    '{QUESTION}',
                    '{PHONE}',
                ),
                array(
                    $this->name,
                    $this->text,
                    $this->phone,
                ),
                $message);

            $this->sendSMS($message);
        }

        if ($result == true) {
            exit(true);
        }else{
            exit(false);
        }

    }

	//Отправка сообщения из контактной формы
    public function action_contactform(){

        if($_POST)
        {
 
            $to_email = $this->site_config['contact_mail'];
            

            if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
                
                $output = json_encode(array(
                    'type'=>'error', 
                    'text' => 'Извините но запрос должен быть: Ajax POST'
                ));
                die($output);
            } 
            
            $user_name      = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
            $user_email     = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
            $phone_number   = filter_var($_POST["phone_number"], FILTER_SANITIZE_NUMBER_INT);
            $subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
            $message        = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);
            
            if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ 
                $output = json_encode(array('type'=>'error', 'text' => 'Введите корректный email адрес'));
                die($output);
            }
            if(!filter_var($phone_number, FILTER_SANITIZE_NUMBER_FLOAT)){
                $output = json_encode(array('type'=>'error', 'text' => 'Номер телефона должен состоять из цифр.'));
                die($output);
            }
 
            $message_body = "
                <html>
                  <head>
                    <title>Новое сообщение от ".$user_name."</title>
                  </head>
                  <body>
                    <h3>Сообщение</h3>
                    <p>C сайта отправлено сообщение.</p>
                    <p><b>Содержание сообщения:</b></p>
                    <p>".$message."</p>
                    <br/>
                    <p><b>Номер телефона:</b> ".$phone_number."</p>
                    <p><b>Email:</b> ".$user_email."</p>
                  </body>
                </html>
                ";

            $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=utf-8\r\n";
            $headers .= "From: ".$user_email."\r\n";
            $headers .= "X-Priority: 1\r\n";

            $send_mail = mail($to_email, $subject, $message_body, $headers);
            
            if(!$send_mail)
            {
                $output = json_encode(array('type'=>'error', 'text' => 'Ошибка. Сообщение неможет быть отправлено.'));
                die($output);
            }else{
                $output = json_encode(array('type'=>'message', 'text' => $user_name .' спасибо вам за сообщение. Скоро мы вам ответим.'));
                die($output);
            }
        }
    }
 
}