<?php
    require_once('../config.php');

    if(isset($_POST['send'])){
        if(count(array_filter($_POST['user'])) === count($_POST['user'])){
            $user = $_POST['user'];
            $first_name = htmlentities($user['first_name'], ENT_QUOTES);
            $last_name = htmlentities($user['last_name'], ENT_QUOTES);
            $user_name = htmlentities($user['user_name'], ENT_QUOTES);
            $password = md5($user['password']);
            $level = $user['level'];
            $group = $user['group'];

            $query = "INSERT INTO User (`first_name`, `last_name`, `username`, `password`, `level`, `group_id`)
                      VALUES ('$first_name', '$last_name', '$user_name', '$password', '$level', '$group')";

            $result = mysqli_query($conn,$query);

            if($result) {
                header('Location: ../index.php');
            }

            else{
                header('Location: ../index.php');
            }
        }

        else {
            header('Location: ../index.php');
        }
    }
?>