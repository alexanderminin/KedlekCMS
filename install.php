<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if( $_POST['dbhost']   == '' || 
        $_POST['dbname']   == '' || 
        $_POST['dbuser']   == '' || 
        $_POST['site']     == '' ||
        $_POST['login']    == '' ||
        $_POST['password'] == '' ||
        $_POST['mail']     == '' ){
        header('Location: /install.php?error=Заполните все поля (поле DB password - может быть пустым)');
    }

    $host = $_POST['dbhost'];
    $dbname = $_POST['dbname'];
    $dbuser = $_POST['dbuser'];
    $dbpassword = $_POST['dbpassword'];
    $site = $_POST['site'];
    $login = $_POST['login'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $mail = $_POST['mail'];

    $text = "<?php\r\n";
    $text .= "  'debug' => true,\r\n";
    $text .= "  'illuminate_db' => [\r\n";
    $text .= "    'driver'    => 'mysql',\r\n";
    $text .= "    'host'      => '$host',\r\n";
    $text .= "    'database'  => '$dbname',\r\n";
    $text .= "    'username'  => '$dbuser',\r\n";
    $text .= "    'password'  => '$dbpassword',\r\n";
    $text .= "    'charset'   => 'utf8',\r\n";
    $text .= "    'collation' => 'utf8_general_ci'\r\n";
    $text .= "  ]\r\n";
    $text .= "];";
     
    $fp = fopen("config.php", "w");
    fwrite($fp, $text);
    fclose($fp);

    $pdo = new PDO($host, $dbuser, $dbpassword);
    $pdo->exec("set names utf8");

    $stmt = $pdo->query("
    CREATE TABLE IF NOT EXISTS `kedlek_category` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `url` varchar(255) NOT NULL,
      `title` varchar(255) NOT NULL,
      `seo_title` varchar(255) NOT NULL,
      `seo_descr` varchar(255) NOT NULL,
      `seo_keywords` varchar(255) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `url` (`url`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

    CREATE TABLE IF NOT EXISTS `kedlek_category_records` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `category_id` int(11) NOT NULL,
      `url` varchar(255) NOT NULL,
      `title` varchar(255) NOT NULL,
      `descr` text NOT NULL,
      `text` text NOT NULL,
      `seo_descr` varchar(255) NOT NULL,
      `seo_keywords` varchar(255) NOT NULL,
      `seo_title` varchar(255) NOT NULL,
      `file` varchar(255) NOT NULL,
      `thumb` varchar(255) NOT NULL,
      `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      UNIQUE KEY `url` (`url`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

    CREATE TABLE IF NOT EXISTS `kedlek_config` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `config` varchar(255) NOT NULL,
      `value` text NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `config` (`config`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

    INSERT INTO `kedlek_config` (`id`, `config`, `value`) VALUES
    (1, 'admin_title', '". $site ."'),
    (2, 'admin_site_url', '/home'),
    (3, 'bytehandId', ''),
    (4, 'bytehandKey', ''),
    (5, 'bytehandFrom', ''),
    (6, 'sms_message_question', ''),
    (7, 'sms_message_buy', ''),
    (8, 'sms_message_call', ''),
    (9, 'sms_phone', ''),
    (10, 'sms_active', '1'),
    (11, 'help_active', '2'),
    (12, 'fb_header', ''),
    (13, 'fb_footer', ''),
    (14, 'vk_header', ''),
    (15, 'vk_footer', ''),
    (16, 'twitter', ''),
    (17, 'gplus_header', ''),
    (18, 'gplus_footer', ''),
    (19, 'yandex_share', ''),
    (20, 'yandex_metrika', ''),
    (21, 'google_analytics', ''),
    (22, 'other_metrika', ''),
    (23, 'contact_phone', ''),
    (24, 'contact_adr', ''),
    (25, 'contact_mail', ''),
    (26, 'contact_map', ''),
    (27, 'record_per_page', '10'),
    (28, 'gallery_per_page', '10'),
    (29, 'contact_html', ''),
    (30, 'site_title', ''),
    (31, 'site_logo', 'logo.png'),
    (32, 'site_favicon', 'favicon.ico'),
    (33, 'thumb_gallery_height', '300'),
    (34, 'thumb_gallery_width', '400'),
    (35, 'thumb_record_height', '400'),
    (36, 'thumb_record_width', '600'),
    (37, 'theme', 'templates/front/default'),
    (38, 'home_html', ''),
    (39, 'home_url', '');

    CREATE TABLE IF NOT EXISTS `kedlek_gallery` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `url` varchar(255) NOT NULL,
      `title` varchar(255) DEFAULT NULL,
      `descr` text,
      `type` int(11) NOT NULL DEFAULT '1',
      `file` varchar(255) NOT NULL,
      `thumb` varchar(255) NOT NULL,
      `seo_title` varchar(255) NOT NULL,
      `seo_descr` varchar(255) NOT NULL,
      `seo_keywords` varchar(255) NOT NULL,
      `datetime` date DEFAULT NULL,
      `gallery_list_id` int(11) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `url` (`url`),
      KEY `gallery_list_id` (`gallery_list_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

    CREATE TABLE IF NOT EXISTS `kedlek_gallery_items` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `file` varchar(255) DEFAULT NULL,
      `thumb` varchar(255) NOT NULL,
      `ord` int(11) DEFAULT NULL,
      `g_id` int(11) NOT NULL,
      PRIMARY KEY (`id`),
      KEY `g_id` (`g_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

    CREATE TABLE IF NOT EXISTS `kedlek_gallery_list` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `url` varchar(255) NOT NULL,
      `title` varchar(255) NOT NULL,
      `seo_title` varchar(255) NOT NULL,
      `seo_descr` varchar(255) NOT NULL,
      `seo_keywords` varchar(255) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `url` (`url`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

    CREATE TABLE IF NOT EXISTS `kedlek_menu` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `parent_id` int(11) NOT NULL DEFAULT '0',
      `title` varchar(255) NOT NULL,
      `ord` int(11) NOT NULL DEFAULT '0',
      `target` varchar(255) NOT NULL,
      `active` enum('1','2') NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

    INSERT INTO `kedlek_menu` (`id`, `parent_id`, `title`, `ord`, `target`, `active`) VALUES
    (2, 0, 'Главная', 2, '/home', '2'),
    (10, 0, 'Контакты', 13, '/contact', '2');

    CREATE TABLE IF NOT EXISTS `kedlek_messages` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `type` enum('1','2','3') NOT NULL,
      `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      `text` varchar(255) NOT NULL,
      `name` varchar(50) NOT NULL,
      `phone` varchar(50) NOT NULL,
      `mark_read` enum('1','2') NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

    CREATE TABLE IF NOT EXISTS `kedlek_pages` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `url` varchar(255) NOT NULL,
      `title` varchar(255) NOT NULL,
      `text` text NOT NULL,
      `seo_title` varchar(255) NOT NULL,
      `seo_descr` varchar(255) NOT NULL,
      `seo_keywords` varchar(255) NOT NULL,
      `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      UNIQUE KEY `url` (`url`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

    CREATE TABLE IF NOT EXISTS `kedlek_users` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `login` varchar(255) NOT NULL,
      `password` varchar(255) NOT NULL,
      `fio` varchar(255) NOT NULL,
      `mail` varchar(255) NOT NULL,
      `role` varchar(255) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

    INSERT INTO `kedlek_users` (`id`, `login`, `password`, `fio`, `mail`, `role`) VALUES
    (1, '" . $login . "', '" . $password . "', 'Администратор', '" . $mail . "', 'admin');

    ALTER TABLE `kedlek_gallery`
      ADD CONSTRAINT `kedlek_gallery_ibfk_1` FOREIGN KEY (`gallery_list_id`) REFERENCES `kedlek_gallery_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

    ALTER TABLE `kedlek_gallery_items`
      ADD CONSTRAINT `kedlek_gallery_items_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `kedlek_gallery` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

    ");
    
    chmod("images", 755);
    chmod("lib/cache", 755);
    chmod("lib/templates_c/admin", 755);
    chmod("lib/templates_c/front", 755);
    chmod("install.php", 755);
    unlink('install.php');
    header('Location: /admin');

}?>

<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="{$seo_keywords}" />
<meta name="description" content="{$seo_descr}">
<meta name="author" content="Boldrich.ru">
<link rel="shortcut icon" href="/images/{$site_settings.site_favicon}">

<title>Установка Kedlek CMS</title>

<link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
<div class="container">

    <?php if (isset($_GET['error'])){?>

        <div class="row" style="margin-top: 30px;"> 

                <div class ='col-md-12'>
                    <div class='alert alert-danger'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                        <?=$_GET['error'];?>
                    </div>
                </div>
            
        </div>
        <div class="clearfix"></div>

    <?php }?>

    <div class="row" style="margin-top: 30px;">
        
        <form role="form" action="install.php" method="post">
           
            <div class="col-lg-12 col-md-12 col-xs-12">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Установка Kedlek CMS</h3>
                    </div>
                    <div class="panel-body"> 

                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="well">
                                <p>Минимальные требования:</p>
                                <ul>
                                    <li>PHP 5.5 или выше</li>
                                    <li>MySQL 5.5 или выше</li>
                                    <li>mod_rewrite (модуль Apache)</li>
                                </ul>
                            </div>
                        </div>
                    

                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Параметры БД</h3>
                                </div>
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="control-label">DB Host</label>
                                        <input type="text" class="form-control"  name="dbhost" autocomplete="off" value="localhost" require>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">DB name</label>
                                        <input type="text" class="form-control" name="dbname" autocomplete="off" require>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">DB user</label>
                                        <input type="text" class="form-control" name="dbuser" autocomplete="off" require>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">DB password</label>
                                        <input type="text" class="form-control" name="dbpassword" autocomplete="off">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Пользователь</h3>
                                </div>
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label>Название сайта</label>
                                        <input type="text" class="form-control" name="site"  autocomplete="off" require>
                                    </div>

                                    <div class="form-group">
                                        <label>Логин</label>
                                        <input type="text" class="form-control" name="login"  autocomplete="off" require>
                                    </div>

                                    <div class="form-group">
                                        <label>Пароль</label>
                                        <input type="password" class="form-control" name="password"  autocomplete="off" require>
                                    </div>

                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="text" class="form-control"  name="mail" autocomplete="off" require>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                         <div class="panel-footer">
                            <button type="submit" class="btn btn-success">Начать установку</button>
                        </div>

                </div>
             </div>

        </form>

    </div>

</div>

<script type="text/javascript" src="/dist/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/dist/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>