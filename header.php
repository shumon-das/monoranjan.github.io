<?php

include("info.php");
include("ago.php");
if (!isset($_SESSION['user_id'])) {header('location:login.php');}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Exchange</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Custom Product Form - Responsive Admin HTML Template">
    <meta name="author" content="Exchange">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    
      
    <!-- Responsive CSS -->
        	<link href="css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

    <!-- Custom CSS -->
    <link href="custom/custom.css" rel="stylesheet" type="text/css">
    <style>
      #show_rate_input{
        width: 98%;
        text-align: center;
        display: block;
        font-family: sans-serif;
        opacity: 0.9;
        font-weight: 700;
      }
      .vd_chat-menu {
        position: fixed;
        bottom: 0;
        right: 5%;
        z-index: 9;
        background-color: #39515F;
        border-top: 3px solid #333333;
      }
      .msg1{width: 96%;display: none;}
      .msgall{display: none;}
      #user_image{cursor:pointer;}
    </style>


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

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->
  <header class="header-1" id="header">
      <div class="vd_top-menu-wrapper">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
            <div class="vd_panel-header">
            	<div class="logo">
              	<a href="index.php"><img alt="logo" src="img/logo.png"></a>
              </div>

            </div>
          </div>    
          <div class="vd_container">
          	<div class="row">
            	<div class="col-sm-5 col-xs-12">
            		

                </div>
                <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    	<div class="vd_mega-menu pull-right">
            				<ul class="mega-ul">
    
   
    <li id="top-menu-3"  class="one-icon mega-li"> 
      <a href="index.html" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-globe"></i></span> 
		<span class="badge vd_bg-red">51</span>        
      </a>
      <div class="vd_mega-menu-content  width-xs-3 width-sm-4  center-xs-3 left-sm" data-action="click-target">
        <div class="child-menu">  
           <div class="title"> 
           		Notifications 
               <div class="vd_panel-menu">
                     <span data-original-title="Notification Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                   
<!--                     <span class="text-menu" data-original-title="Settings" data-toggle="tooltip" data-placement="bottom">
                        Settings
                    </span> -->                                                              
                </div>
           </div>                 
		   <div class="content-list">	
           	   <div  data-rel="scroll">	
               <ul  class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                            <div class="menu-text"> Someone has give you a surprise 
                            	<div class="menu-info"><span class="menu-date">12 Minutes Ago</span></div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                            <div class="menu-text">  Change your user profile details
                            	<div class="menu-info"><span class="menu-date">1 Hour 20 Minutes Ago</span></div>
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>                                                                                
                    
               </ul>
               </div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>  
     
    <li id="top-menu-profile" class="profile mega-li"> 
        <a href="#" class="mega-link"  data-action="click-trigger"> 
            <span  class="mega-image">
                <img src="img/<?php echo $profile_photo; ?>" alt="example image" />               
            </span>
            <span class="mega-name">
                <?php echo $username;?> <i class="fa fa-caret-down fa-fw"></i> 
            </span>
        </a> 
      <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target">
        <div class="child-menu"> 
        	<div class="content-list content-menu">
                <ul class="list-wrapper pd-lr-10">
                    <li> <a href="user-profile.php"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text"> Profile</div> </a> </li>
                    
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-cogs"></i></div> <div class="menu-text">Settings</div> </a> </li>
                    
                    <li> <a href="logout.php"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
                    <li class="line"></li>                
                    <li> <a href="help.php"> <div class="menu-icon"><i class=" fa fa-question-circle"></i></div> <div class="menu-text">Help</div> </a> </li>
                    <li> <a href="report.php"> <div class="menu-icon"><i class=" glyphicon glyphicon-bullhorn"></i></div> <div class="menu-text">Report a Problem</div> </a> </li>              
                </ul>
            </div> 
        </div> 
      </div>     
  
    </li>               
       
    
	</ul>
<!-- Head menu search form ends -->                         
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 

  </header>
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	
	<div class="navbar-menu clearfix">
        
      <h3 class="menu-title hide-nav-medium hide-nav-small">Menu</h3>
        <div class="vd_menu">
           <ul>
     <li>
      <a href="index.php" >
          <span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
            <span class="menu-text">Dashboard</span>  
            
        </a>
     
    </li>  
      
    <li>
      <a href="sell.php" >
          <span class="menu-icon"><i class="icon-palette"> </i></span> 
            <span class="menu-text">Sell</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"></span></span>
        </a>
    </li> 
    <li>
      <a href="buy.php" >
          <span class="menu-icon entypo-icon"><i class="icon-bookmark"> </i></span> 
            <span class="menu-text">BUY</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"></span></span>
        </a>
      
    </li>               
    <li>
      <a href="exchange.php" >
            <span class="menu-icon"><i class="fa fa-sitemap"> </i></span>
            <span class="menu-text">Exchange</span>
            <span class="menu-badge"><span class="badge vd_bg-black-30"></span></span>            
        </a>
        
    </li>  
                 
</ul>
 </div>             
    </div>
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="logout.php">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                
            </li>
        </ul>
    </div>     
</div>    