<?php 
    require_once('../config.php');

    $id = $_GET['id'];

    if(empty($id)) {
        header('location: ../templates/details.php');
        die();
    }
     else {
         $query = "SELECT
                    u.id,
                    u.first_name,
                    u.last_name,
                    u.username,
                    u.level,
                    g.name AS group_name
                    FROM User AS u
                    LEFT JOIN groups AS g ON(u.group_id = g.id)
                    WHERE u.id = $id";
         $result = mysqli_query($conn, $query);
         $result = mysqli_fetch_assoc($result);

         return $result;
     }
?>
