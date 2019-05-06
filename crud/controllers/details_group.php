<?php 
    require_once('../config.php');

    $id = $_GET['id'];

    if(empty($id)) {
        header('location: ../templates/details_group.php');
        die();
    }
     else {
         $query = "SELECT
                    g.id AS groups_id,
                    g.name AS group_name,
                    g.created_at,
                    g.enddate,
                    u.username
                    FROM groups AS g
                    LEFT JOIN user AS u ON(u.group_id = g.id)
                    WHERE g.id = $id";
         $result = mysqli_query($conn, $query);
         $result = mysqli_fetch_all($result);
         return $result;
     }
?>
