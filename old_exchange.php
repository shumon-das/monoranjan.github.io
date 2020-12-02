<?php session_start();
include("connect.php");
include("ago.php");
// security issue

//reserve amount
$world_account = mysqli_query($conn,"SELECT * FROM world_account WHERE account_name='bikash'");
$world_account_row = mysqli_fetch_assoc($world_account);
//netteller minimum transcation
$net_sql = mysqli_query($conn,"SELECT * FROM world_account WHERE account_name='neteller'");
$net_min_trans = mysqli_fetch_assoc($net_sql);

// check email verified or not
$email_query = mysqli_query($conn,"SELECT * FROM `users` WHERE id='$user_id'");
$mail = mysqli_fetch_assoc($email_query);

// notification 
$notif_sql = mysqli_query($conn,"SELECT * FROM `notification` WHERE user_id='$user_id' AND seen_status='unseen' order by update_time DESC");
$rowcount = mysqli_num_rows($notif_sql);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Dashboard - Exchange</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />


		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>
		<!--[endif]-->
	</head>

	<body class="no-skin">
		<div id="" class="navbar navbar-default ace-save-state navbar-fixed-top">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="index.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Exchange
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important"><?php echo $rowcount; ?></span>
							</a>
                        <!-- notification header -->
							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									<?php echo $rowcount; ?> Notifications
								</li>
                        <!-- notification body -->

								<li class="dropdown-content">
									<?php include("include_notification_page.php");?>
								</li>

                        <!-- end of notification body -->
                        
								<li class="dropdown-footer">
									<a href="dashbord.php">
										Create New Transcation
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>

								</li>
							
							</ul>
						</li>

						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">0</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									0 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
									<!--	
										<li>
											<a href="#" class="clearfix">
												<img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Admin:</span>
														Your Transection ammount $20 Exchange has been succesfull.
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

									 -->

								
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php  echo $_SESSION['user_name']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="dashbord.php">
										<i class="ace-icon fa fa-cog"></i>
										Transection history
									</a>
								</li>
								
								
								<li>
									<a href="setting.php">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="login.html">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidbar" class="sidebar responsive ace-save-state sidebar-fixed sidebar-scroll">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				

				<ul class="nav nav-list">
					<li class="active">
						<a href="dashbord.php">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="buy.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Buy </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="sell.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Sell </span>
						</a>

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="exchange.php">
							<i class="menu-icon fa fa-list-alt"></i>
							<span class="menu-text"> Exchange </span>
						</a>

						<b class="arrow"></b>
					</li>

					
				</ul>

				<!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="bread===crumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div><div class="page-content"></div></div>

					<!-- page content -->
                 <div class="col-sm-12">
					<div class="widget-">
						<div class="widget-header text-center ">
							<h4 class="widget-title ">EXCHANGE DOLLERS</h4>
						</div>
						<div class="space-10"></div>

				        <form action="test.php" method="post" class="form-horizontal" id="sample-form">						
							<div class="row">
						        <div class="col-md-7 bg-success">
						        	<div class="space-5"></div>
						        	<?php if($mail['verification'] == 'verified'){ ?>
						            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						            <?php }else{
									echo "<span>we had already send a mail in your email</span>
									<h2 style='color:red;'> Before any transcation please verify your email id </h2>";
								} ?>
						        </div>
						    </div>
						    <div class="space-20"></div>
						       <!-- <form action="" method="post" enctype="multipart/form-data"> -->

				            <div class="form-group">
				                <label class="col-md-2 control-label">Send Method </label>
				                <div class="col-md-5">
				                    <div class="input-group">
				                        <div class="input-group-addon" style="padding: 2px;">
				                        	<img id="previewIcon" style="width: 28px;"  src="http://localhost/exchange/assets/images/neteller.png">
				                        </div>
					                    <select id="send_method" name="send_method" class="form-control" required>
										<?php   
												$wql = mysqli_query($conn,"SELECT * FROM world_account WHERE account_category='en'");
												while($w = mysqli_fetch_assoc($wql)){echo "<option value='".$w['account_name']."'>".$w['account_name']."</option>";}
											?>
					                    </select>
					                 </div>
					                
				                </div>
				            </div>

				        	<div class="form-group">
				               <label class="col-md-2 control-label">Receive Method </label>
				                  <div class="col-md-5">
				                     <div class="alert alert-danger" id="alrt" style="display: none;">	
										Unable Direction : <strong id="directionError"></strong>
									 </div>
				                     <div class="input-group">
				                        <div class="input-group-addon" style="padding: 2px;">
				                        	<img id="previewImage" style="width: 28px;height: 27px;" src="http://localhost/exchange/assets/images/perfect-money.jpg">
				                        </div>

										<select id="receive_method" name="receive_method" class="form-control">   
										   <?php
											$wql = mysqli_query($conn,"SELECT * FROM world_account WHERE account_category='en' ORDER BY id DESC");
											while($w = mysqli_fetch_assoc($wql)){echo "<option value='".$w['account_name']."'>".$w['account_name']."</option>";}
											?>
										</select>
										
				                     </div>
				                     <div class="alert alert-info" >	
										Reserve Amount : <strong id="balance"><?php echo $world_account_row['balance']; ?> TK</strong>                  
									</div>
				                  </div>
				            </div>

				            <div class="form-group">
				                <label class="col-md-2 control-label" id="send_amount_icon">Send Amount ( $ )</label>
				                <div class="col-md-5">
				                    <input type="number" name="send_amount" class="form-control" id="send_amount" placeholder=".00" required >
				                    <div class="alert alert-info">
			                    	 <p id="min_transaction"><?php echo "Minmum Transaction : ".$net_min_trans['min_transaction']." USD";?></p>
									</div>
				                </div>
 				            </div>
				            <div class="form-group">
				                <label class="col-md-2 control-label" id="receive_icon">Receive Amount ( ৳ )</label>
				                <div class="col-md-5">
				                    <input type="number" name="receive_amount" id="receive_amount" class="form-control"  value="" placeholder=".00" />
				                    <div class="alert alert-info">
				                    	 <strong id="send_amount"></strong>
				                          <strong id="receive_amount"> </strong>
									</div>
				                </div>
				            </div>


				            <div class="form-group">
				                <label class="col-md-2 control-label " id="trs_number">BKash Number </label>
				                <div class="col-md-5">
				                    <input type="text" name="receive_account_mail_or_id" class="form-control" required>
				                </div>
				                
				            </div>

				            <div class="form-group" id="bangla_trx_id" >
				                <label class="col-md-2 control-label ng-binding" name="send_trx_id" id="trs_id">BKash TRX ID</label>
				                <div class="col-md-5">
				                    <input type="text" name="transaction_identity" class="form-control">
				                </div>
				                
				            </div>

				            <div class="form-group">
				                <label class="col-md-2 control-label ng-binding" name="send_account" id="mail">Neteller Email </label>
				                <div class="col-md-5">
				                    <input type="email" name="send_account" class="form-control" required>
				                </div>
				                
				            </div>
				                
				            <div class="form-group">
				                <label class="col-md-2 control-label">Contact No.</label>
				                <div class="col-md-5">
				                    <input type="number" min="0" minlength="11" name="contact_no" class="form-control" placeholder="01700000000" required="">
				                </div>
				            </div>

				            <div class="row" ng-hide="active">
				                <div class="col-md-offset-2  col-md-5 text-center">
				                    <p id="owner_account" style="background-color: #d9edf7; padding: 12px;">Send your amount in this neteller account<br> ACCOUNT NO : neteller             
				                    </p>
				                </div>
				            </div>
                             <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
				            <div class="form-group">
				                <div class="col-md-offset-2 col-md-5">
				                    <div class="pull-right">
				                    	<?php if($mail['verification'] == 'verified'){ ?>
				                        <input type="submit" value="submit" class="btn btn-primary" name="exchangesubmit" id="submitButton">
				                        <?php }else{ ?> 
				                       <input type="button" value="submit" class="btn btn-primary" onclick="alert('before any transcation please verify your email')">
				                   		<?php } ?>
				                        <button type="reset" class="btn btn-danger">Cancel</button>
				                    </div>
				                </div>
				            </div>
				        </form>	
 					</div>
				</div>
 		      <!-- /.page-content -->
			</div>
		</div>
			</div>
			<!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Ex</span>
							Change &copy; 2020.
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		
		<script src="assets/js/jquery-2.1.4.min.js"></script>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		 <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
		$(document).ready(function(){
           $("#send_method").on('change',function(){
           	var ex_send = $(this).val();
           	var ex_receive = $("#receive_method").val();
           	var samount = $("#send_amount").val();
           	if(samount == ''){var inp_s_amount = '0';}
           	else{var inp_s_amount = $("#send_amount").val();}
           	//console.log(ex_send+" "+ex_receive);
           	$.ajax({
           		url:"test.php",
           		type:"post",
           		dataType:"JSON",
           		data:{
           			ex_send:ex_send,
           			ex_receive:ex_receive,
           			inp_s_amount:inp_s_amount
           		},
           		success:function(data){
           			if(data.error){           				
           				$("#alrt").show(); 
           				$("#directionError").html(data.error);          			
           			}else{
                       if(data.amount_icon == 'en'){$("#send_amount_icon").html("Send Amount ( $ )")}
                       	else{
                       		$("#send_amount_icon").html("Send Amount ( ৳ )");
                       		$("#bangla_trx_id").show();
                       		$("#trs_id").html(data.mail+" ID");
                       	}
	           			$("#previewIcon").attr('src',data.src);
	           			if(data.mail){$("#mail").html(data.mail);}
	           			else{$("#mail").html(data.trs_number)}
	           			$("#owner_account").html(" Send your amount in this "+data.account_name+" account<br> ACCOUNT NO : "+data.owner_account);
	           			$("#receive_amount").attr('value',data.inp_amount);
	           			$("#min_transaction").html(data.min_transaction);
	           			$("#alrt").hide();
	           		}	
           			console.log(data);
                  }
           	});
           	
           });

        // receive method
           $("#receive_method").on('change',function(){
           	var ar = $(this).val();
           	var as = $("#send_method").val();
           	var rec =$("#receive_amount").val();
           	//console.log(receive_ex+' '+send_ex);
           	$.ajax({
           		url:"test.php",
           		type:"post",
           		dataType:"JSON",
           		data:{
           			ar:ar,
           			as:as          			
           		},
           		success:function(data){
           			if(data.error){           				
           				$("#alrt").show(); 
           				$("#directionError").html(data.error);          			
           			}else{
           				if(data.re_amount_icon == 'bn'){$("#receive_icon").html("Receive Amount ( ৳ )");}
           				else{$("#receive_icon").html("Receive Amount ( $ )");}
           				$("#previewImage").attr('src',data.src);
	           			if(data.mail){$("#trs_number").html(data.mail);}
	           			else{$("#trs_number").html(data.trs_number);}
	           			$("#balance").html(data.balance);
                        $("#alrt").hide(); 
           			}
           			console.log(data);
           		}
           	});
           });

        // send amount keyup
          $("#send_amount").on('keyup',function(){
          	var s_a_value = $(this).val();
          	var sm = $("#send_method").val();
          	var rm = $("#receive_method").val();
          	console.log(s_a_value+' '+rm);
          	$.ajax({
          		url:"test.php",
          		type:"post",
          		dataType:"JSON",
          		data:{
          			s_a_value:s_a_value,
          			sm:sm,
          			rm:rm
          		},
          		success:function(data){
          			$("#receive_amount").attr('value',data.received_amount);
          			if(s_a_value > data.min_transaction){
          				$("#submitButton").show();
          			}
          			console.log(data);
          			
          		}
          	});

          });
 
          
		});
			
		
		</script>
	</body>
</html>
