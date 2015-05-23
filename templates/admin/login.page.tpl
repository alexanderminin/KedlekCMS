<?php
    header("HTTP/1.0 401 Unauthorized");
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Авторизуйтесь</title>
    <link href="/dist/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/dist/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/dist/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">       
            <? if (isset($_SESSION['error'])){echo "<div class ='col-md-12'><div class='alert alert-danger'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>".$_SESSION['error']."</div></div>";} ?>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Авторизуйтесь</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action='/admin/login/auth' method='post'>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Логин" name="login" type="login" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Пароль" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Войти</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/dist/jquery/dist/jquery.min.js"></script>
    <script src="/dist/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/dist/metisMenu/dist/metisMenu.min.js"></script>
    <script src="/dist/js/sb-admin-2.js"></script>

</body>

</html>