<?php
    require_once('../config.php');

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($username) > 0 && strlen($password) > 0) {

            $password = md5($password);

            $query = "SELECT * FROM User WHERE username='$username' AND password = '$password'";

            $result = mysqli_query($conn, $query);

            if(mysqli_num_rows($result) == 1) {
                session_start();

                foreach($result as $row) {
                    $level = $row['level'];
                }

                $_SESSION['username'] = $username;
                $_SESSION['level'] = $level;
                header('Location: ../index.php');
            }

            else {
                header('Location: ../template/login.php');
            }
        }

        else {
            header('Location: ../template/login.php');
        }
    }

?>