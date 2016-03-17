<?php
namespace Cms\Admin\Controllers;

use Cms\Admin\Models\MAdminConfig;
use Cms\Admin\Models\MAdminPage;

//Контроллер галереи
class CAdminConfig extends CAdminController
{
    public $config;

    function __construct(\Slim\Slim $context){
        parent::__construct($context);
        if ($this->getContext()->request()->isPost()){
            if (!empty($this->getContext()->request()->post('config'))){
                $this->config = (array)$this->getContext()->request()->post('config');
            }
        }
    }

	  //Обновление настроек
    public function action_update(){
        foreach ($this->config as $config => $value){
            MAdminConfig::updateConfig($config, $value);
        }
        $this->getContext()->redirect($_SERVER['HTTP_REFERER']);
    }

	  //Вывод шаблона Настройки адм. части
    public function action_admin(){
        $site_settings = $this->site_config;
        //Параметры страницы
        $title = 'Настройки сайта';
        $header = 'Настройки сайта';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/config_admin.js"></script>
            ';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $smarty->assign('site_settings',$site_settings);

        //Вывод шаблона
        $smarty->display('config_admin.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона Настройки сайта
    public function action_site(){
        $site_settings = $this->site_config;
        $themes = MAdminConfig::readThemes();

        //Параметры страницы
        $title = 'Настройки сайта';
        $header = 'Настройки сайта';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/filemanager/responsive_filemanager_callback_2.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/config_site.js"></script>
            ';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных

        $smarty->assign('site_settings',$site_settings);
        $smarty->assign('themes',$themes);

        //Вывод шаблона
        $smarty->display('config_site.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	  //Вывод шаблона Настройки контактный данных (страница контакты)
    public function action_contacts(){
        $site_settings = $this->site_config;
        //Параметры страницы
        $title = 'Стр. контакты';
        $header = 'Стр. контакты';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/tinymce/tinymce.min.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/config_contacts.js"></script>
            ';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $site_settings['contact_map'] = htmlspecialchars($site_settings['contact_map']);
        $site_settings['contact_html'] = htmlspecialchars($site_settings['contact_html']);
        $smarty->assign('site_settings',$site_settings);

        //Вывод шаблона
        $smarty->display('config_contacts.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	  //Вывод шаблона Настройки главной страницы
    public function action_home(){
        $site_settings = $this->site_config;
        $pages = MAdminPage::selectAllPages();
        //Параметры страницы
        $title = 'Главная стр.';
        $header = 'Главная стр.';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/tinymce/tinymce.min.js"></script>
                <script type="text/javascript" src="/dist/config/tinymce/config.js"></script>
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/config_home.js"></script>
            ';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $site_settings['home_html'] = htmlspecialchars($site_settings['home_html']);
        $smarty->assign('pages',$pages);
        $smarty->assign('site_settings',$site_settings);

        //Вывод шаблона
        $smarty->display('config_home.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	  //Вывод шаблона Настройки SMS
    public function action_sms(){
        if ($this->site_config["sms_active"] == '2'){
            $bytehandId = $this->site_config["bytehandId"];
            $bytehandKey = $this->site_config["bytehandKey"];
            $result = @file_get_contents('http://bytehand.com:3800/balance?id='.$bytehandId.'&key='.$bytehandKey);
            if ($result === false){
                $balance = 'Нет инф.';
            } else {
                $result = json_decode($result);
                $balance = round($result->description, 2) . ' р.';
            }
        } else {
            $balance = 'Не активно';
        }
        $site_settings = $this->site_config;

        //Параметры страницы
        $title = 'SMS сообщения';
        $header = 'SMS сообщения';
        $javascript = 
            '
                <script type="text/javascript" src="/dist/config/bootstrap-tour-master/config_sms.js"></script>
            ';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $smarty->assign('balance',$balance);

        $smarty->assign('site_settings',$site_settings);

        //Вывод шаблона
        $smarty->display('config_sms.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

    //Вывод шаблона Настройки Социальных кнопок
    public function action_social(){
        $site_settings = $this->site_config;
        //Параметры страницы
        $title = 'Соц. кнопки';
        $header = 'Соц. кнопки';
        $javascript = '';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $site_settings['fb_header'] = htmlspecialchars($site_settings['fb_header']);
        $site_settings['fb_footer'] = htmlspecialchars($site_settings['fb_footer']);
        $site_settings['vk_header'] = htmlspecialchars($site_settings['vk_header']);
        $site_settings['vk_footer'] = htmlspecialchars($site_settings['vk_footer']);
        $site_settings['twitter'] = htmlspecialchars($site_settings['twitter']);
        $site_settings['gplus_header'] = htmlspecialchars($site_settings['gplus_header']);
        $site_settings['gplus_footer'] = htmlspecialchars($site_settings['gplus_footer']);
        $site_settings['yandex_share'] = htmlspecialchars($site_settings['yandex_share']);
        $smarty->assign('site_settings',$site_settings);

        //Вывод шаблона
        $smarty->display('config_social.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

	  //Вывод шаблона Настройки счетчиков аналитики
	  public function action_analytics(){
        $site_settings = $this->site_config;
        //Параметры страницы
        $title = 'Настройки сайта';
        $header = 'Настройки сайта';
        $javascript = '';
        $css = '';

        //Инициализация Smarty
        $smarty = $this->SmartyInit();

        //Настройки страницы
        $smarty->assign('title', $title);
        $smarty->assign('header', $header);
        $smarty->assign('javascript',$javascript);
        $smarty->assign('css',$css);

        //Передача данных
        $site_settings['google_analytics'] = htmlspecialchars($site_settings['google_analytics']);
        $site_settings['yandex_metrika'] = htmlspecialchars($site_settings['yandex_metrika']);
        $site_settings['other_metrika'] = htmlspecialchars($site_settings['other_metrika']);

        $smarty->assign('site_settings',$site_settings);

        //Вывод шаблона
        $smarty->display('config_analytics.page.tpl');

        //Очистка переменных
        $smarty->clearAllAssign();
    }

}