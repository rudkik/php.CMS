<?php
//1 подключение к бд
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","root");
define("DB_NAME","CMS");

$connection =  mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//тестовое подключение выдает ошибки и проблемы
if (mysqli_connect_errno()){
    die("поключение к бд  не получилось " . mysqli_connect_error() . "(". mysqli_connect_errno() . ")");
}
?>