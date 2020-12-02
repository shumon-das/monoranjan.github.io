<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Register Pages HTML Template - Responsive Multipurpose Admin Templates </title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Register Pages - Responsive Admin HTML Template">
    <meta name="author" content="Exchange">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="js/modernizr.js"></script> 
    <script type="text/javascript" src="js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper" >
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_register-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"><img src="img/logo.png" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">USER REGISTRATION</h4>
              </div>
              <div class="panel widget">
                <div class="panel-body">
<!--                  <div id="register-success" class="alert alert-success" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Registration confirmation has been sent to your email </div>
                  <div id="register-passerror" class="alert alert-danger" style="display:none;"><i class="fa fa-exclamation-circle fa-fw"></i> Your password and Confirm password are not same </div>-->
                  <form class="form-horizontal" method="post" action="functions.php" role="form" id="register-form">
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                  <div class="alert alert-warning vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span>Your password and Confirm password are not same </div>                    
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span>Registration confirmation has been sent to your email. </div>                  
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">First Name <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="first-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="John" class="required" required name="firstname" id="firstname">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Last Name <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="last-name-input-wrapper"> <span class="menu-icon"> <i class="fa fa-user"></i> </span>
                          <input type="text" placeholder="Doe" class="required" required name="lastname" id="lastname">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Username <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id=""> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="text" placeholder="Username" class="required" required  name="username" id="username">
                        </div>
                        <div class="alert alert-danger" id="error_username" name="error_username" style="display: none;"></div>
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Phone <span class="vd_red">*</span></label>
                          <label class="control-label">&nbsp;</label>
                        </div>
                        <div class="vd_input-wrapper no-icon" id="phone-input-wrapper">
                          <input type="number" placeholder="Phone Number" class="required" required  name="phone" id="phone">
                        </div>
                        <div class="alert alert-danger" id="error_phone" name="error_phone" style="display: none;"></div>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Email <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="email" placeholder="Email" class="required" required  name="email" id="email">
                        </div>
                        <div class="alert alert-danger" id="error_email" name="error_email" style="display: none;"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div class="label-wrapper">
                          <label class="control-label">Gender <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <select name="gender" id="" style="margin-left: 30px;background: transparent;width: 95%;">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Password <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Password" class="required" required  name="password" id="password">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="label-wrapper">
                          <label class="control-label">Confirm Password <span class="vd_red">*</span></label>
                        </div>
                        <div class="vd_input-wrapper" id="confirm-password-input-wrapper"> <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="Password" class="required" required  name="confirmpass" id="confirmpass">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12">
                        <div id="error_message" class=" alert alert-danger" style="display: none;">sorry,but password and confirm password does't matched</div>
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                    <div class="form-group">
                      <div class="col-md-12 mgbt-xs-10 mgtp-20">

                        <div class="vd_checkbox">
                          <input type="checkbox" id="checkbox-2" value="1" required name="checkbox-2">
                          <label for="checkbox-2"> I agree with <a href="#">terms of service</a></label>
                        </div>
                      </div>
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <input type="submit" class="btn vd_bg-green vd_white width-100"  name="register_submit" value="Register" id="register_submit">
                        <input type="submit" class="btn vd_bg-green vd_white width-100" onclick="return false;"  value="Register" id="false_submit" style="display: none;">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> Already Have an Account? <br/>
                <a href="login.php">SIGN IN<span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 
            
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
  <footer class="footer-2"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright text-center">
                  	Copyright &copy;<?php echo date("y m d");?> Exchange Inc. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src='plugins/jquery-ui/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="js/caroufredsel.js"></script> 
<script type="text/javascript" src="js/plugins.js"></script>

<script type="text/javascript" src="plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script type="text/javascript" src="plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript" src="custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript">
$(document).ready(function() {
	
	"use strict";
	
	var form_register_2 = $('#register-form');
	var error_register_2 = $('.alert-danger', form_register_2);
	var success_register_2 = $('.alert-success', form_register_2);
	var warning_register_2 = $('.alert-warning', form_register_2);
		
			
	 


        form_register_2.validate({
            errorElement: 'div', //default input error message container
            errorClass: 'vd_red', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                firstname: {
                    minlength: 3,
                    required: true
                },
                lastname: {
                    minlength: 3,
                    required: true
                },				
                email: {
                    required: true,
                    email: true
                },
                website: {
                    required: true,
                    url: true
                },
                company: {
                    minlength: 3,					
                    required: true
                },
                country: {					
                    required: true
                },				
                phone: {					
                    required: true
                },					
                password: {
                    required: true
                },
                confirmpass: {
                    required: true
                },				
            },
			
			errorPlacement: function(error, element) {
				if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
					element.parent().append(error);
				} else if (element.parent().hasClass("vd_input-wrapper")){
					error.insertAfter(element.parent());
				}else {
					error.insertAfter(element);
				}
			}, 
			
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success_register_2.hide();
                error_register_2.show();
				scrollTo(form_register_2,-100);

            },

            highlight: function (element) { // hightlight error inputs
		
				$(element).addClass('vd_bd-red');
				$(element).parent().siblings('.help-inline').removeClass('help-inline hidden');
				if ($(element).parent().hasClass("vd_checkbox") || $(element).parent().hasClass("vd_radio")) {
					$(element).siblings('.help-inline').removeClass('help-inline hidden');
				}

            },

            unhighlight: function (element) { // revert the change dony by hightlight
                $(element)
                    .closest('.control-group').removeClass('error'); // set error class to the control group
            },

            success: function (label, element) {
                label
                    .addClass('valid').addClass('help-inline hidden') // mark the current input as valid and display OK icon
                	.closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
				$(element).removeClass('vd_bd-red');
            },

            submitHandler: function (form) {
				$(form).find('#submit-register').addClass('disabled').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>')/*.addClass('disabled').attr('disabled')*/;					
				$(form).ajaxSubmit(options);
            }
        });		

	
	
});
</script>
<!-- Specific Page Scripts END -->


<script>
  $(document).ready(function(){
    
// username validation
    $("#username").keyup(function(){
      var username = $(this).val();
      $.ajax({
        url:"functions.php",
        type:"post",
        data:{username:username},
        success:function(data){
          if(data == 'sorry'){
            $("#error_username").html(data+',but this username allready exists in our database').show();
            $("#register_submit").hide();
            $("#false_submit").show();
          }else{
            $("#error_username").hide();
            $("#register_submit").show();
            $("#false_submit").hide();
          }
        }
      });
    });

 // email validation
    $("#email").keyup(function(){
      var email = $(this).val();
      $.ajax({
        url:"functions.php",
        type:"post",
        data:{email:email},
        success:function(data){
          if(data == 'sorry'){
            $("#error_email").html(data+',but this email allready exists in our database').show();
            $("#register_submit").hide();
            $("#false_submit").show();
          }else{
            $("#error_email").hide();
            $("#register_submit").show();
            $("#false_submit").hide();
          }
        }
      });
    });

// phone number validation
   $("#phone").keyup(function(){
        var p = $(this).val();
        var phone = p.length;
          if(phone >= 12){
            $("#error_phone").html('please give a valid phone number').show();
            $("#register_submit").hide();
            $("#false_submit").show();
          }else{
            $("#error_phone").hide();
            $("#register_submit").show();
            $("#false_submit").hide();
          }
        });

  });

  $("#confirmpass").keyup(function(){
    var con_pass = $(this).val();
    var password = $("#password").val();
    if(con_pass != password){
       $("#error_message").show();
    }else if(con_pass == password){
      $("#error_message").hide();
    }
  })
</script> 


</body>

</html>