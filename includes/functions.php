<?php
    function confirm_query($result_set){
        if (!$result_set){
            die("ошибка выдаче сайдбара )");
        }
    }
    function find_all_subjects(){
        global $connection;

        $query = "SELECT * ";
        $query .= "FROM subjects ";
        $query .= "WHERE visible = 1 ";
        $subjects_set = mysqli_query($connection, $query);
        confirm_query($subjects_set);
        return $subjects_set;
    }

    function find_pages_for_subject($subjects_id){
        global $connection;

        $query = "SELECT * ";
        $query .= "FROM pages ";
        $query .= "WHERE visible = 1 ";
        $query .= "AND subject_id = {$subjects_id} ";
        $page_set = mysqli_query($connection, $query);
        confirm_query($page_set);
        return $page_set;

    }

?>