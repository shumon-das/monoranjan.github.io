<?php session_start();
include("database_connection.php");
$user_id = $_SESSION['user_id'];
$time = time()+10;
mysqli_query($conn,"UPDATE `user_information` SET last_login='$time' WHERE id='$user_id'");?>
<ul>
        <?php // active user query
         $sql = mysqli_query($conn,"SELECT * FROM `user_information`");
         while ($rows = mysqli_fetch_assoc($sql)) { 
                if($rows['last_login']>time()){?>
                   <li class="contact" data-for-tab="<?php echo $rows['id']; ?>">
                    <div class="wrap">
                      <span class="contact-status online"></span>
                      <img src="http://localhost/project_one/img/<?php echo $rows['profile_photo']; ?>" alt="" style="border:5px solid green;"/>
                      <div class="meta">
                        <p class="name"><?php echo $rows['username']; ?></p>
                        <p class="preview">Active</p>
                      </div>
                    </div>
                  </li>
        <?php } } ?>   
        <?php  // in active user query
         $dsql = mysqli_query($conn,"SELECT * FROM `user_information`");
         while ($drows = mysqli_fetch_assoc($dsql)) { 
                if($drows['last_login']<time()){?>
                   <li class="contact" data-for-tab="<?php echo $drows['id']; ?>">
                    <div class="wrap">
                      <span class="contact-status online"></span>
                      <img src="http://localhost/project_one/img/<?php echo $drows['profile_photo']; ?>" alt="" style="border:5px solid lightgray;"/>
                      <div class="meta">
                        <p class="name"><?php echo $drows['username']; ?></p>
                        <p class="preview">Not Active</p>
                      </div>
                    </div>
                  </li>
        <?php } } ?>       
				<li class="contact" data-for-tab="one">
					<div class="wrap">
						<span class="contact-status online"></span>
						<img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
						<div class="meta">
							<p class="name">Louis Litt</p>
							<p class="preview">You just got LITT up, Mike.</p>
						</div>
					</div>
				</li>
				<li class="contact active" data-for-tab="two">
					<div class="wrap">
						<span class="contact-status busy"></span>
						<img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
						<div class="meta">
							<p class="name">Harvey Specter</p>
							<p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
						</div>
					</div>
				</li>
				<li class="contact" data-for-tab="three">
					<div class="wrap">
						<span class="contact-status away"></span>
						<img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
						<div class="meta">
							<p class="name">Rachel Zane</p>
							<p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
						</div>
					</div>
				</li>


			</ul>