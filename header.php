<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>It`s my diploma</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/glyphicons-halflings-regular.svg" rel="icon">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="container-fluid">

<div class="container">

    <div class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target=".nav-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class = "row navbar-brand">
                        <div class = "brand visible-xs-inline-block" >
                            <img class src="images/logoleft.ico"></div>
                        <!--<div class="hidden-xs">Інтерактивний Web-ресурс з курсу "Web-програмування. Напрям PHP"
                        </div>-->
                        <!--<div class = "visible-xs-inline-block" ><img src="images/logoleft.png"></div>-->
                    </div>

                </div>

                <div class="navbar-collapse collapse nav-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">carousel</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">php. tutorial
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="tutorialFirst.php">знайомство з php</a></li>
                                <li><a href="begin.php">основи</a></li>
                                <li><a href="variables.php">змінні</a></li>
                                <li><a href="statements.php">оператори</a></li>
                                <li><a href="conditionalStatements.php">умовні оператори</a></li>
                                <li><a href="loops.php">цикли</a></li>
                                <li><a href="strings.php">рядки</a></li>
                                <li><a href="arrays.php">масиви</a></li>
                                <li><a href="functions.php">функції</a></li>
                                <li><a href="phpAndHTML.php">php + html</a></li>
                                <li><a href="oop.php">ооп</a></li>
                            </ul>
                        </li>

                        <li><a href="phpTheRigthWay.php">php. the right way</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">стандарти php
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="psr0.php">psr-0</a></li>
                                <li><a href="psr1.php">psr-1</a></li>
                                <li><a href="psr2.php">psr-2</a></li>
                                <li><a href="psr4.php">psr-4</a></li>
                                <li><a href="pearCodingSrandards.php">pear coding standards</a></li>
                                <li><a href="zendCodingStandards.php">zend coding standards</a></li>
                                <li><a href="symfonyCodingStandards.php">symfony soding standards</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Тестування
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="begineertest.php">Вступне тестування</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

