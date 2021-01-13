<?php require_once("../includes/db_conection.php");?>
<?php include("../includes/header.php");?>
<?php require_once("../includes/functions.php");?>

<?php
$query = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible = 1 ";
$result = mysqli_query($connection, $query);
confirm_query($result);

?>


<!DOCTYPE html>

<div id="main">
    <div id="navigation">
        <?php
        while ($subjects = mysqli_fetch_assoc($result)){

        ?>
        <li><?php echo $subjects['menu_name']?></li>
        <?php } ?>
    </div>
    <div id="page">
        <ul>
            <li><a href="manage_content.php"> Content Website</a> </li>
            <li><a href="admin.php"> Content  Admins Website</a> </li>
            <li><a href="logout.php"> logout</a> </li>
        </ul>
    </div>
</div>
<?php include("../includes/footer.php");?>

