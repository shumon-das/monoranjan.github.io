<?php 

include("header.php");

?>
  
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            
          </div>
          
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <div class="text-center vd_info-parent"> <label for="profile_photo"><img alt="example image" src="img/<?php echo $profile_photo;?>" id="user_image"></label> </div>
                    <!-- user profile photo upload form -->
                      <form action="" method="post" enctype="multipart/form-data" style="display: none;">
                        <input type="file" name="profile_photo" id="profile_photo">
                        <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id'];?>">
                      </form>

                    <!-- end of user profile photo upload -->
                    <div class="row">
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon" ></i><?php if($status == 'deactivated'){
                                echo '<span class="label label-danger">'.ucfirst($status).'</span>';}
                                elseif ($status == 'active'){ echo '<span class="label label-success">'.ucfirst($status).'</span>'; } ?></td></a> </div>
                      
                    </div>
                    <h2 class="font-semibold mgbt-xs-5"><?php echo strtoupper($first_name)." ".strtoupper($last_name);?></h2>
                    <h4>Owner at Our Company, Inc.</h4>
                    <p>Ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td style="width:60%;">Status</td>
                            <td>
                              <?php if($status == 'deactivated'){
                                echo '<span class="label label-danger">'.ucfirst($status).'</span>';}
                                elseif ($status == 'active'){ echo '<span class="label label-success">'.ucfirst($status).'</span>'; } ?></td>
                          </tr>
                          <tr>
                            <td>User Lebel</td>
                            <td><?php $i = 1; $rating = 5; while ($i <= $rating) { echo "<i class='fa fa-star vd_yellow fa-fw'></i>";$i++; } ?></td>
                            
                          </tr>
                          <tr>
                            <td>Member Since</td>
                            <td> <?php echo timeago($date_time);?> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- panel widget -->
                
                
                <!-- panel widget --> 
              </div>
              <div class="col-sm-9">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Transaction History <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#projects-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
    <li> <a data-toggle="tab" href="#photos-tab"> Affiliate History <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    

  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
        <div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow" href="exchange.php"> <i class="fa fa-plus append-icon"></i> Add Project </a> </div>         
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><span><img src="img/trs.png" alt="" width="35"></span> Total <?php $trs_count = mysqli_query($conn,"SELECT * FROM `transactions` WHERE user_id='$user_id'");echo mysqli_num_rows($trs_count); ?> Transactions</h3>        
        <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Send</th>                                  
                    <th></th>                                  
                    <th>Receive</th>
                    <th>Send Amount</th>
                    <th>Receive Amount</th>
                    <th>Status</th>                                      
                    <th>Date</th>                                          
                  </tr>
                </thead>   
                <tbody>
                  <?php $i=1;
                    $trs_query = mysqli_query($conn,"SELECT * FROM `transactions` WHERE user_id='$user_id' ORDER BY id DESC");
                    while ($trs_rows = mysqli_fetch_assoc($trs_query)) {
                     $send_from = $trs_rows['send_from'];
                     $receive_with = $trs_rows['receive_with'];
                   ?>
                      
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td><?php echo $trs_rows['send_from']; ?></td>                    
                          <td><img src="img/trss.png" alt="" width="20"></td>                    
                          <td><?php echo $trs_rows['receive_with']; ?></td>                                    
                          <td class="center"><?php
                              $currency_sql = mysqli_query($conn,"SELECT * FROM ba WHERE account_name='$send_from'");
                              if(mysqli_num_rows($currency_sql) >= 1 ){echo $trs_rows['send_amount']." BDT"; }else{
                                echo $trs_rows['send_amount']." USD";
                              } ?>                                
                          </td>
                          <td class="center"><strong><?php
                              $currency_sql = mysqli_query($conn,"SELECT * FROM ba WHERE account_name='$receive_with'");
                              if(mysqli_num_rows($currency_sql) >= 1 ){echo $trs_rows['receive_amount']." BDT"; }else{
                                echo $trs_rows['receive_amount']." USD";
                              } ?> </strong></td>
                          <td class="center">
                            <?php if($trs_rows['status'] == 'completed'){?>
                            <span class="label label-success"><?php echo $trs_rows['status']; ?></span>
                            <?php }elseif ($trs_rows['status'] == 'rejected') {?>
                            <span class="label label-danger"><?php echo $trs_rows['status']; ?></span>
                            <?php }elseif ($trs_rows['status'] == 'waiting') {?>
                            <span class="label label-info"><?php echo $trs_rows['status']; ?></span>
                            <?php } ?>
                          </td>  
                          <td class="menu-action rounded-btn"><?php echo timeago($trs_rows['order_time']); ?></td>                                                                           
                        </tr>

                   <?php } ?>      
                                                                            
                </tbody>
             </table>
      

        <div class="row">
          
        
          <!-- col-sm-7 -->           
        </div>
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
      <div class="pd-10">
        
      </div>
    </div>
    <!-- home-tab -->
    
    <div id="projects-tab" class="tab-pane">
    	  <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">First Name:</label>
              <div class="col-xs-7 controls"><?php echo $first_name;?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Last Name:</label>
              <div class="col-xs-7 controls"><?php echo $last_name;?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">User Name:</label>
              <div class="col-xs-7 controls"><?php echo $username;?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo $email_address;?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          
         
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Interests:</label>
              <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
         
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls"><?php echo $phone;?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>
              <div class=""> </div>        
        </div>
    </div>
    
    <div id="photos-tab" class="tab-pane">
      <div class="pd-20">
		<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Add Photo </a> </div>        
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-picture-o mgr-10 profile-icon"></i> Affiliate History</h3>
        <hr class="pd-20">
        <h3>You have no affiliate history yet</h3>
        
        <br/>

       <div class="clearfix"></div>       
        
      </div>
      <!-- pd-20 -->       
    </div> <!-- photos tab -->
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright &copy;<?php echo date('Y');?> Exchange Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
<?php include("footer.php");?>