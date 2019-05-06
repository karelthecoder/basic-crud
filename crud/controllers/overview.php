<?php
   require_once('config.php');

    $query = "SELECT * FROM User";
    $result = mysqli_query($conn, $query);

    $query_groups = "SELECT * FROM groups";
    $result_groups = mysqli_query($conn, $query_groups);
    
    if($result && $result_groups) {
        return $result;
        return $result_groups;
    }
    
?>