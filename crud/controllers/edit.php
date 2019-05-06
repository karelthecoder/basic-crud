<?php 
    require_once('../config.php');

    $id = $_POST['id'];

    if(empty($id)) {
        header('location: ../index.php');
        die();
    }
     else {
        if(isset($_POST['send'])){
                $user = $_POST['user'];
                $first_name = htmlentities($user['first_name'], ENT_QUOTES);
                $last_name = htmlentities($user['last_name'], ENT_QUOTES);
                $user_name = htmlentities($user['user_name'], ENT_QUOTES);
                $password = md5($user['password']);
                $level = $user['level'];
                $query = "UPDATE User 
                          SET `first_name` = '$first_name', `last_name` =  '$last_name', `username` = '$user_name', `level` = '$level'
                          WHERE id = $id";

                $result = mysqli_query($conn,$query);

                if($result) {
                    exit(header('Location: ../index.php'));
                }
    
                else{
                    echo'fail';
                    print_r($result);
                }
        }

        else {
            header('Location: ../index.php');
        }
    }
?>