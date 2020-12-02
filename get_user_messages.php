<?php
include("database_connection.php");

// after select user li 
if(isset($_POST['user_id'])){
	$user_id = $_POST['user_id'];
	if($_POST['user_id'] != null){
	$p = mysqli_query($conn,"SELECT * FROM `user_information` WHERE id='$user_id'");
    $ph = mysqli_fetch_assoc($p);
    $photo = $ph['profile_photo'];
	}else{$photo = 'user-icon.png';}
	$sql = mysqli_query($conn,"SELECT * FROM `chat` WHERE user_id='$user_id'");
	while($rows = mysqli_fetch_assoc($sql)){?>
          <ul>
          	<?php 
                if($rows['sent_message'] == ''){}else{?>
				<li class="sent">
					<img src="http://localhost/project_one/img/<?php echo $photo; ?>" alt='' width='80' height="30"/>
					<p><?php echo $rows['sent_message']; ?></p>
				</li>

            <?php  }
          	
                if($rows['replie_message'] == ''){}else{?>

				<li class="replies">
					<img src="http://localhost/project_one/img/<?php echo 'user-icon.png'; ?>" alt="" />
					<p><?php echo $rows['replie_message']; ?></p>
				</li>
			<?php } ?>	

			</ul>
	<?php }
}

// sent message
if(isset($_POST['replie_message'])){
	$replie_message = $_POST['replie_message'];
	$user_id = $_POST['user_id'];
	$date = date("Y-m-d");
	$user_query = mysqli_query($conn,"INSERT INTO `chat` VALUES(NULL,'$user_id','','$replie_message','',null,'$date')");
	if($user_query){
		$sql = mysqli_query($conn,"SELECT * FROM `chat` WHERE user_id='$user_id'");
	    while($rows = mysqli_fetch_assoc($sql)){?>
            <ul>
          	   <?php 
                if($rows['sent_message'] == ''){}else{?>
				<li class="sent">
					<img src="http://localhost/project_one/img/<?php echo 'user-icon.png'; ?>" alt="" />
					<p><?php echo $rows['sent_message']; ?></p>
				</li>

                <?php  }
          	
                if($rows['replie_message'] == ''){}else{?>

				<li class="replies">
					<img src="http://localhost/project_one/img/<?php echo 'user-icon.png'; ?>" alt="" />
					<p><?php echo $rows['replie_message']; ?></p>
				</li>
			    <?php } ?>	
			</ul>
  <?php }
    }
}

?>