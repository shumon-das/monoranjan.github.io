<?php
session_start();
include("database_connection.php");
$user_id = $_SESSION['user_id'];
$user_info_query = mysqli_query($conn,"SELECT * FROM `user_information` WHERE id='$user_id'");
$user_rows = mysqli_fetch_assoc($user_info_query);
$first_name = $user_rows['first_name'];
$last_name  = $user_rows['last_name'];
$username   = $user_rows['username'];
$email_address = $user_rows['email_address'];
$phone   = $user_rows['phone'];
$status = $user_rows['status'];
$profile_photo = $user_rows['profile_photo'];
$date_time = $user_rows['date_time'];



// transaction
$trss_query = mysqli_query($conn,"SELECT * FROM `transactions`,`wa` WHERE transactions.send_from=wa.wa_name");

// trs_rate

$trs_rate_query = mysqli_query($conn,"SELECT * FROM `trs_rate`");
?>