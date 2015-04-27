<?php


    /*session_start();
    if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
    echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
    echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить";


    function go() {
        include('template/main.php');
    }*/


    // подключаем файлы ядра
    require_once 'acore/model.php';
    require_once 'acore/view.php';
    require_once 'acore/controller.php';


    require_once 'acore/route.php';
    Route::start(); // запускаем маршрутизатор



?>