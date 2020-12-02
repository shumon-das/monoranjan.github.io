<?php session_start();
include("database_connection.php");
$user_id = $_SESSION['user_id'];
$time = time()+10;
mysqli_query($conn,"UPDATE `user_information` SET last_login='$time' WHERE id='$user_id'");
?>