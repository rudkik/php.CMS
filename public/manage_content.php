<?php require_once("../includes/db_conection.php");?>
<?php include("../includes/header.php");?>
<?php require_once("../includes/functions.php");?>



<!DOCTYPE html>

<div id="main">
    <div id="navigation">
        <?php
        $subjects_set = find_all_subjects();
        while ($subjects = mysqli_fetch_assoc($subjects_set)){
            ?>
        <li>
            <?php
                echo $subjects['menu_name'];
                $page_set = find_pages_for_subject($subjects["id"]);
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

