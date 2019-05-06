<?php
    require_once('../config.php');

    if(isset($_POST['send'])){
        if(count(array_filter($_POST['group'])) === count($_POST['group'])){
            $group = $_POST['group'];
            $name = $group['name'];
            $date = $group['date'];
            $now = date("Y-m-d");

            if($date < $now) {
  
            }

            $query = "INSERT INTO groups (`name`, `enddate`)
                      VALUES ('$name', '$date')";

            $result = mysqli_query($conn,$query);

            if($result) {
                // header('Location: ../index.php');
            }

            else{
                // header('Location: ../index.php');
                echo'fail';
                print_r($result);
                print_r($query);
            }
        }

        else {
            // header('Location: ../index.php');
            echo'failer';
        }
    }
?>