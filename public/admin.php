<?php
//1 подключение к бд
$dbhost = "localhost";
$dbname = "CMS";
$dbpass = "root";
$dbuser = "root";
$connection =  mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//тестовое подключение
if (mysqli_connect_errno()){
    die("поключение к бд  не получилось " . mysqli_connect_error() . "(". mysqli_connect_errno() . ")");
}
?>

<?php include("../includes/header.php");?>
<?php require_once("../includes/functions.php");?>


<!DOCTYPE html>

    <div id="main">
        <div id="navigation"></div>
        <div id="page">
            <ul>
                <li><a href="manage_content.php"> Content Website</a> </li>
                <li><a href="admin.php"> Content  Admins Website</a> </li>
                <li><a href="logout.php"> logout</a> </li>
            </ul>
        </div>
    </div>
<?php include("../includes/footer.php");?>

