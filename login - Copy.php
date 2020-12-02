
<?php  
	session_start();
	include("header.php");
  ?>
	
<h3 class="post-heading my-5"><?php if (isset($_GET['msg'])) {
	echo $_GET['msg'];
}else echo "Login Form"; ?></h3>
<form action="" method="post">
  <div class="row">

	<div class="col-md-4 offset-md-4">
	   	<input type="email" required name="email" placeholder="type email here" class="form-control">
	</div>
	<div class="col-md-4 offset-md-4 my-2">
	   	<input type="password" required name="password" placeholder="password" class="form-control">
	</div>

	<div class="col-md-4 offset-md-4 my-2">
	   	<input type="submit" name="submit" value="Log In" class="form-control btn btn-success">
	</div> 
      <br><br>
      
  </div>
</form>

<?php 
if(isset($_POST['submit'])){
$email    = $_POST['email'];
$password = md5($_POST['password']);

$conn = mysqli_connect('localhost','amarboibd','uddabpuruddabpur','amarboibd');
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' AND status='active' ";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount == 1){
	$_SESSION['login'] = true;
	$prorow = mysqli_fetch_assoc($result);
	  $_SESSION['loginid']=$prorow['id'];
	  $_SESSION['usermobile']=$prorow['mobile'];
	  $_SESSION['userfname']=$prorow['name'];
	  $_SESSION['userlname']=$prorow['lname'];
	  $_SESSION['useremail']=$prorow['email'];
	  $_SESSION['usergender']=$prorow['gender'];
	  $_SESSION['userreligion']=$prorow['religion'];
	  $_SESSION['userimage']=$prorow['profile_image'];

	echo "<script language='javascript'>document.location.href='admin.php'</script>";
  }else{
  	echo "<p class='col-md-4 offset-md-4'>email and password doesnot matched</p>";
  }
}
 ?>
 
  <a href="ragistration.php" class="offset-md-4 col-md-2  my-2 " >Ceate account</a>
  <a href="forgot-password.php" class="col-md-4 ">Forgot Password?</a>

 </body>
</html>