<?php require_once("../includes/db_conection.php");?>
<?php include("../includes/header.php");?>
<?php require_once("../includes/functions.php");?>

<?php
$query = "SELECT * ";
$query .= "FROM subjects ";
$query .= "WHERE visible = 1 ";
$subjects_set = mysqli_query($connection, $query);
confirm_query($subjects_set);
?>

<!DOCTYPE html>

<div id="main">
    <div id="navigation">
        <?php
        while ($subjects = mysqli_fetch_assoc($subjects_set)){
            ?>
        <li>
            <?php echo $subjects['menu_name'] ;?>
            <?php
            $query = "SELECT * ";
            $query .= "FROM pages ";
            $query .= "WHERE visible = 1 ";
            $query .= "AND subject_id = {$subjects["id"]} ";
            $page_set = mysqli_query($connection, $query);
            confirm_query($page_set);
            ?>
            <ul>
                <?php while ($page = mysqli_fetch_assoc($page_set)){  ?>
                <li>  <?php echo $page['menu_name'] ;?>  </li>
                <?php } ?>
            </ul>
        </li>
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

