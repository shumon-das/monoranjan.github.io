<?php 
include("database_connection.php");
$date_time = date("Y-m-d h:i:s");
$date = date("Y-m-d");

// actions.php start    active deactive user
  if(isset($_GET['u'])){
      $user_id = $_GET['u'];
    if($_GET['ac']=='active'){
      echo $user_id;
      mysqli_query($conn,"UPDATE `user_information` SET status='active' WHERE id='$user_id'");
      mysqli_query($conn,"INSERT INTO `notifications` VALUES(NULL,'$user_id','user_action','$user_id','active','unseen','unseen','unseen','unseen','$date_time',null,'$date')");
      header("location:users.php");
    }else{
      mysqli_query($conn,"UPDATE `user_information` SET status='deactivated' WHERE id='$user_id'");
      mysqli_query($conn,"INSERT INTO `notifications` VALUES(NULL,'$user_id','user_action','$user_id','deactivated','unseen','unseen','unseen','unseen','$date_time',null,'$date')");
      
      header("location:users.php");
    }
  }
 ?>