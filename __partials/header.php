<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/ico" href="img/favicon.ico">
    <title>Туристическое агенство "R-Travel"</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One|Kavivanar|Roboto+Condensed&subset=latin,cyrillic" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    <![endif]-->
</head>
<body>
<div class="pre-menu">
    <div class="container">
        <div class="row">
            <div class="pull-left">
                <a href="index.php" class="navbar-brand">R-Travel</a>
            </div>
            <div class="pull-right phone-number hidden-xs">
               <i><img src="img/viber.png" class="viber"> </i> <i class="fa fa-whatsapp" aria-hidden="true"></i> <i class="fa fa-phone-square"></i> <span>+992 934769996</span>
            </div>
        </div>
    </div>
</div>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <div class="container">
                <div class="pull-left phone-number visible-xs phone-number-xs">
                    <i><img src="img/viber.png" class="viber"> </i> <i class="fa fa-whatsapp" aria-hidden="true"></i> <i class="fa fa-phone-square"></i> <span>+992 934769996</span>
                </div>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive_menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="responsive_menu">
            <ul class="nav navbar-nav">
                <li><a href="#">Туристам</a></li>
                <li><a href="#">Подбор тура</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Страны <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Таджикистан</a></li>
                        <li><a href="#">Турция</a></li>
                        <li><a href="#">Дубай</a></li>
                        <li><a href="#">Россия</a></li>
                        <li><a href="#">Европа</a></li>
                    </ul>
                </li>
                <li><a href="#">Медицинский туризм</a></li>
                <li><a href="#">Отели</a></li>
                <li><a href="#">Блог</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
            <div class="navbar-form navbar-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#sign-in">
                    <i class="fa fa-plane"></i><span> Заказать билет</span>
                </button>
            </div>
        </div>
    </div>
</div>