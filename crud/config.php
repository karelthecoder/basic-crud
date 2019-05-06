<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php-crud";

//create the connection
$conn = mysqli_connect($servername, $username, $password, $database);

//check connection
if(!$conn) {
    die('Connection Failed:' .mysqli_connect_error);
}
?>