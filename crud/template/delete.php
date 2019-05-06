<?php
    require_once('../config.php');
    $id = $_GET['id'];

    $query = "DELETE FROM User WHERE id = $id";

    $result = mysqli_query($conn, $query);

    if($result) {
        exit(header('Location: ../index.php'));
    }

    else {
        echo 'Failed to delete';
    }
?>