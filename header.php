<?php
include_once("includes/connection.php");
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>It`s my diploma</title>

    <!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">-->

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
                            <img class src="images/logoleft.png"></div>
                        <!--<div class="hidden-xs">Інтерактивний Web-ресурс з курсу "Web-програмування. Напрям PHP"</div>-->
                        <!--<div class = "visible-xs-inline-block" ><img src="images/logoleft.png"></div>-->
                    </div>

                </div>

                <div class="navbar-collapse collapse nav-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">JUMBOTRON</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">PHP. Tutorial
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="tutorialFirst.php">Знайомство з PHP</a></li>
                                <li><a href="begin.php">Основи</a></li>
                                <li><a href="variables.php">Змінні</a></li>
                                <li><a href="statements.php">Оператори</a></li>
                                <li><a href="conditionalStatements.php">Умовні оператори</a></li>
                                <li><a href="loops.php">Цикли</a></li>
                                <li><a href="strings.php">Рядки</a></li>
                                <li><a href="arrays.php">Масиви</a></li>
                                <li><a href="functions.php">Функції</a></li>
                                <li><a href="phpAndHTML.php">PHP + HTML</a></li>
                                <li><a href="oop.php">ООП</a></li>
                            </ul>
                        </li>

                        <li><a href="phpTheRigthWay.php">PHP. The Right Way</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Стандарти PHP
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="psr0.php">PSR-0</a></li>
                                <li><a href="psr1.php">PSR-1</a></li>
                                <li><a href="psr2.php">PSR-2</a></li>
                                <li><a href="">PSR-4</a></li>
                                <li><a href="">PEAR Coding Standards</a></li>
                                <li><a href="">Zend Coding Standards</a></li>
                                <li><a href="">Symfony Coding Standards</a></li>
                            </ul>
                        </li>

                        <li><a href="">Тестування</a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

