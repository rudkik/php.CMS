<?php require_once("../includes/db_conection.php");?>
<?php include("../includes/header.php");?>
<?php require_once("../includes/functions.php");?>
<?php if (isset($_GET["subjects"])){
    $selected_subjects_id = $_GET["subjects"];
    $selected_page_id = null;}
    elseif (isset($_GET["page"])){
    $selected_page_id = $_GET["page"];
    $selected_subjects_id = null;
    }
    else {
        $selected_page_id = null;
        $selected_subjects_id = null;
    }?>

<!DOCTYPE html>
<div id="main">
    <div id="navigation">
        <?php
        $subjects_set = find_all_subjects();
        while ($subjects = mysqli_fetch_assoc($subjects_set)){
            ?>
            <?php
            echo "<li" ;
            if ($selected_subjects_id == $subjects["id"]){
                echo " style=\"font-size:20px;\"";
            }
            echo ">" ;
            ?>
           <a href="manage_content.php?subjects=<?php echo urlencode($subjects["id"])?>"> <?php echo $subjects['menu_name'];?> </a>
               <?php $page_set = find_pages_for_subject($subjects["id"]); ?>

            <ul>
                <?php while ($page = mysqli_fetch_assoc($page_set)){  ?>
                    <?php
                    echo "<li" ;
                    if ($selected_page_id == $page["id"]){
                        echo " style=\"font-size:20px;\"";
                    }
                    echo ">" ;
                    ?>  <a href="manage_content.php?page=<?php echo urlencode($page["id"])?>"> <?php echo $page['menu_name'] ;?> </a> </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
    </div>
    <div id="page">
        <h2> Мэнедже контент</h2>
        <?php echo $selected_subjects_id;?>
        <?php echo $selected_page_id;?>

    </div>
</div>
<?php include("../includes/footer.php");?>

