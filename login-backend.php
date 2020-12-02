

<?php 
include('database_connection.php');
if(isset($_POST['submit'])){
$email    = $_POST['email'];
//$password = md5($_POST['password']);
$password = $_POST['password'];

$query_one = mysqli_query($conn,"SELECT * FROM `user_information` WHERE email_address = '$email' AND password = '$password' ");
$rowcount = mysqli_num_rows($query_one);
if($rowcount == 1){
  $rows = mysqli_fetch_assoc($query_one);
  $_SESSION['user_id'] = $rows['id'];
  echo $_SESSION['user_id'];
  echo "<script language='javascript'>document.location.href='user-profile.php'</script>";

}else{
  echo "<script language='javascript'>document.location.href='index.php'</script>";
}



}
 ?>