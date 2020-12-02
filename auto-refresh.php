<?php
if(isset($_COOKIE['email']) && isset($_COOKIE['password'])){
  $c_email = $_COOKIE['email'];
  $c_password = $_COOKIE['password'];
  $login_sql = mysqli_query($conn,"SELECT * FROM `user_information` WHERE email_address='$c_email' AND password='$c_password'");
  $r = "registerd";
  //echo json_encode($r);
}
$r = "registerd";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<meta http-equiv="refresh" content="10">
	<script src="js/push.js"></script>
</head>
<body>

	<button type="button" id="notify">Click</button>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script>
		var reg = "<?php echo $r; ?>";
		if(reg){
		//alert(reg);
			Push.create("Hello world!",{
            body: "This is example of Push.js Tutorial",
            icon: '/Logo_small.png',
            timeout: 2000,
            onClick: function () {
                window.focus();
                this.close();
            }
        });

		}
		
	</script>
</body>
</html>