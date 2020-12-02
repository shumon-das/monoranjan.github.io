<?php 
include("database_connection.php");
session_start();

if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$pass = $_POST['password'];
    $password = md5($pass);
    $sql = mysqli_query($conn,"SELECT * FROM `admin_information` WHERE email='$email' AND password='$password' OR username='$email' AND password='$password'");
    $em = mysqli_fetch_assoc($sql);
    if(mysqli_num_rows($sql) == 1){
    	$_SESSION['admin'] = $em['email'];
    	echo "<script language='javascript'>document.location.href='admin.php'</script>";
    }else{
        $error = "email and password doesn't matched";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="row">
		<div class="col-md-4" style="margin:auto;">
			<h3 style="text-align: center;margin-top: 50px;">Admin login form</h3>
			<form action="" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			  	<?php if (isset($error)) {?>
			    <small id="error" class="form-text text-muted alert alert-danger"><?php echo $error; ?></small>
			  <?php } ?>
			  </div>
			 
			   <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
			</form>
		</div>
	</div>	

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#email").keyup(function(){
			$("#error").hide();
		});
		$("#password").keyup(function(){
			$("#error").hide();
		});
	})
</script>
</body>
</html>
