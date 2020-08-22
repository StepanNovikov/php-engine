<?php   
    if($_SERVER['REQUEST_URI'] == '/php-engine/') {
        $page = 'home';
    } else {
        $page = substr($_SERVER['REQUEST_URI'],12);
        if(!preg_match('/^[A-z0-9]{3,15}$/',$page)){
            exit('error url');
        }
    }

    session_start();

    if (file_exists("all/".$page.".php")) {
        include "all/".$page.".php";
    } 
    else if($_SESSION['ulogin'] == 1 and file_exists("auth/".$page.".php")) {
        include "auth/".$page.".php";
    } 
    else if($_SESSION['ulogin'] !=1 and file_exists("guest/".$page.".php")) {
        include "guest/".$page.".php"; 
    } 
    else {
        exit('Page 404');
    }



    function top($title) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$title.'</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;600&display=swap" rel="stylesheet">
        </head>
        <body>
        
        <div class="wrapper">
                <div class="menu">
                    <a href="/">Главная</a>
                    <a href="/login">Вход</a>
                    <a href="/register">Регистрация</a>
                </div>
                    <div class="content">
                        <div class="block">


                
        ';
    }

    function bottom(){
        echo '
                        </div>
                    </div>
                </div>
            </body>
            </html>';
    }

    







?>