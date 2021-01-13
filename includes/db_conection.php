<?php
//1 подключение к бд
$dbhost = "localhost";
$dbname = "CMS";
$dbpass = "root";
$dbuser = "root";
$connection =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//тестовое подключение выдает ошибки и проблемы
if (mysqli_connect_errno()){
    die("поключение к бд  не получилось " . mysqli_connect_error() . "(". mysqli_connect_errno() . ")");
}
?>