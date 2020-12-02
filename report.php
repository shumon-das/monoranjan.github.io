<?php 
session_start(); 
if (!isset($_SESSION['user_id'])) {header('location:login.php');}
include("database_connection.php");

?>
<!DOCTYPE html>

<!--[if gt IE 9]><!-->	<html><!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Report | Exchange</title>
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

<body>
<br><br>
	<div class="panel panel-primary" style="width: 50%;box-sizing: border-box;margin: auto;">  
		<div class="panel-heading" style="text-align: center;">
			<h2>Report by admin</h2>
		</div>
		<div class="panel-body">
			<form action="" method="post">
                
                <div class="form-group">
                  <label for="subject">Subject:</label>
                  <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject">
                </div>
                 <div class="form-group">
                    <label for="Problem">Main Problem:</label>
                   <textarea name="main_problem" id="problem" cols="10" rows="10" class="form-control" placeholder="Enter main problem"></textarea>
                </div>
                <div class="form-group"> 
                   <input type="submit" name="submit" class="form-control btn btn-primary"> 

                </div>      
            </form>
<?php 
if(isset($_POST['submit'])){
    $subject = $_POST['subject'];
    $main_problem = $_POST['main_problem'];
    $user_id = $_SESSION['user_id'];
    $date = date("y-m-d");
    if(!empty($subject) && !empty($main_problem)){
        mysqli_query($conn,"INSERT INTO `report_table` VALUES(NULL,'$subject','$main_problem','$user_id','unseen',null,'$date')");
        echo "<script language='javascript'>document.location.href='user-profile.php'</script>";
    }else{
        $error = "<h6 class'alert alert-danger'>Please give subject and main problem</h6>";
    }
}

?>
		</div>
	</div>
	
</body>
</html>