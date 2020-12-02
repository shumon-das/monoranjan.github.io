<?php 
include("database_connection.php");
if(isset($_POST['sent_message'])){
  $sent_message = $_POST['sent_message'];
  $user_id = $_POST['user_id'];
  $date = date("Y-m-d");
  $sql = mysqli_query($conn,"INSERT INTO `chat` VALUES(NULL,'$user_id','$sent_message','','',null,'$date')");
  $p = mysqli_query($conn,"SELECT * FROM `user_information` WHERE id='$user_id'");
  $ph = mysqli_fetch_assoc($p);
  $photo = $ph['profile_photo'];
  $chat_sql = mysqli_query($conn,"SELECT * FROM chat WHERE user_id='$user_id'");
   while($c_rows = mysqli_fetch_assoc($chat_sql)){ ?>
   <?php if($c_rows['replie_message'] == ''){}else{ ?>
     <li> 
     <span style="background-color: #435f7a;color: #f5f5f5;padding: 5px 10px;border-radius: 15px;"><?php echo $c_rows['replie_message'];?></span>
     </li>
     <?php } ?>

     <?php if($c_rows['sent_message'] == ''){}else{ ?>
     <li class="align-right"> 

     <span style="background-color: #f5f5f5;color: #000;padding: 5px 10px;border-radius: 15px;float: right;"><?php echo $c_rows['sent_message'];?></span>
     
     </li>                                     
  <?php }
  }
  } ?> 