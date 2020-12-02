<?php 
$database_name = 'exchange';
$host = 'localhost';
$password = '';
$username = 'root';
$conn = mysqli_connect($host,$username,$password,$database_name);


$user_id = "1";
$user_info_query = mysqli_query($conn,"SELECT * FROM `user_information`");
while($user_rows = mysqli_fetch_assoc($user_info_query)) {
	$list[] = $user_rows;
};

echo json_encode($list);

?>