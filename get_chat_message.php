<?php session_start();
include("database_connection.php");
$user_id = $_SESSION['user_id'];
$u = mysqli_query($conn,"SELECT * FROM `user_information` WHERE id='$user_id'");
$uid = mysqli_fetch_assoc($u);
$profile_photo = $uid['profile_photo'];
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
} ?> 