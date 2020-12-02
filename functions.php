<?php 
include("database_connection.php");
session_start();
// sell page
if(isset($_POST['send_method'])){
	$send_method = $_POST['send_method'];
	$receive = $_POST['test'];

	$send_method_query = mysqli_query($conn,"SELECT * FROM wa WHERE wa_name='$send_method'");
	while ($sm_rows  = mysqli_fetch_assoc($send_method_query)) {
		$data['wa_name'] = $sm_rows['wa_name'];
		$data['wa_logo'] = $sm_rows['wa_logo'];

		$s_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE send_name = '$send_method' AND receive_name='$receive'");
		$s_fetch = mysqli_fetch_assoc($s_query);
		if(mysqli_num_rows($s_query) == 1){
		$data['send_rate'] = $s_fetch['send_rate'];
		$data['receive_rate'] = $s_fetch['receive_rate'];
		$data['receive_name'] = $s_fetch['receive_name'];
		$data['reserve'] = $s_fetch['reserve'];
		$data['send_account'] = $s_fetch['send_account'];
		$data['re_account'] = $s_fetch['re_account'];
		}
	};
	echo json_encode($data);
}


if(isset($_POST['receive_method'])){
	$receive_method = $_POST['receive_method'];
	$send = $_POST['check'];
	$receive_method_query = mysqli_query($conn,"SELECT * FROM ba WHERE account_name = '$receive_method'");
	
	while ($sm_rows  = mysqli_fetch_assoc($receive_method_query)) {
			$data['account_logo'] = $sm_rows['account_logo'];
			$data['account_name'] = $sm_rows['account_name'];
			$r_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE send_name = '$send' AND receive_name='$receive_method'");
			$r_fetch = mysqli_fetch_assoc($r_query);
			  if(mysqli_num_rows($r_query)==1){	
					$data['send_rate'] = $r_fetch['send_rate'];
					$data['send_name'] = $r_fetch['send_name'];
					$data['receive_rate'] = $r_fetch['receive_rate'];
					$data['reserve'] = $r_fetch['reserve'];
					$data['send_account'] = $r_fetch['send_account'];
					$data['re_account'] = $r_fetch['re_account'];
					$data['inquery_error'] = "Sorry this rows allready reserved in database";
			    }else{
			    	$reserve_subquery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE receive_name='$receive_method' ");
					$subquery = mysqli_fetch_assoc($reserve_subquery);
					$data['reserve'] = $subquery['reserve'];
					$data['inquery_error'] = 'blank';
					$data['account_logo'] = $sm_rows['account_logo'];
			$data['account_name'] = $sm_rows['account_name'];
			    }
	};
	echo json_encode($data);
}

if(isset($_POST['gi'])){
	$sm = $_POST['sm'];
	$rm = $_POST['rm'];
	$given_input = $_POST['gi'];
	$g_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE send_name = '$sm' AND receive_name='$rm'");
	$g_fetch = mysqli_fetch_assoc($g_query);
	$data['send_name'] = $g_fetch['send_name'];
	$data['receive_name'] = $g_fetch['receive_name'];
	$data['send_account'] = $g_fetch['send_account'];
	$data['send_account'] = $g_fetch['send_account'];
	$data['re_account'] = $g_fetch['re_account'];
	$data['g_input'] = $given_input;
	$data['result'] =  $given_input * $g_fetch['receive_rate'];
	$data['bd_result'] =  $given_input / 100 * $g_fetch['receive_rate'];
	$data['send_rate'] = $g_fetch['send_rate'];
	$data['receive_rate'] = $g_fetch['receive_rate'];
	$data['reserve'] = $g_fetch['reserve'];
	$equal = $given_input / 100 * $g_fetch['receive_rate'];
	$equal2 = $given_input * $g_fetch['receive_rate'];;
	if($g_fetch['reserve'] > $equal2 ){

    $data['reserve_error'] = "reserved";
	}elseif($g_fetch['reserve'] < $equal2 ){
		$data['reserve_error'] = " The amount of exchange exceed our reserve. <br>Please contact the administrator. ";
	}

	echo json_encode($data);
}

// sell page end

// by page
if(isset($_POST['bsm'])){
	$bsm = $_POST['bsm'];
	$brm = $_POST['brm'];
	$trsquery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE send_name='$bsm' AND receive_name='$brm'");
	$bysrate = mysqli_fetch_assoc($trsquery);
	$by_sql = mysqli_query($conn,"SELECT * FROM `ba` WHERE account_name='$bsm'");
	while($by_rows = mysqli_fetch_assoc($by_sql)){		
	$data['blogo'] = $by_rows['account_logo'];
	$data['send_rate'] = $bysrate['send_rate'];
	$data['send_name'] = $bysrate['send_name'];
	$data['receive_rate'] = $bysrate['receive_rate'];
	$data['reserve'] = $bysrate['reserve'];
	$data['send_account'] = $bysrate['send_account'];
	$data['re_account'] = $bysrate['re_account'];
	}
	echo json_encode($data);
}

if(isset($_POST['brrm'])){
	$brrm = $_POST['brrm'];
	$bssm = $_POST['bssm'];

	$rsql = mysqli_query($conn,"SELECT * FROM wa WHERE wa_name='$brrm'");
	while ($receive_rows = mysqli_fetch_assoc($rsql)) {
		$data['wa_logo'] = $receive_rows['wa_logo'];
		$brrquery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE send_name='$bssm' AND receive_name='$brrm'");
		$byrrate = mysqli_fetch_assoc($brrquery);
		if(mysqli_num_rows($brrquery)==1){	
			$data['send_rate'] = $byrrate['send_rate'];
			$data['send_name'] = $byrrate['send_name'];
			$data['receive_rate'] = $byrrate['receive_rate'];
			$data['reserve'] = $byrrate['reserve'];
			$data['send_account'] = $byrrate['send_account'];
			$data['re_account'] = $byrrate['re_account'];
			$data['inquery_error'] = "Sorry this rows allready reserved in database";
		}else{
		    $reserve_subquery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE receive_name='$brrm' ");
			$subquery = mysqli_fetch_assoc($reserve_subquery);
			$data['reserve'] = $subquery['reserve'];
			$data['inquery_error'] = 'blank';
		    }
	}
	echo json_encode($data);
}

if(isset($_POST['bgi'])){
	$bsend = $_POST['bsend'];
	$breceive = $_POST['breceive'];
	$bgiven_input = $_POST['bgi'];
	$bg_query = mysqli_query($conn,"SELECT * FROM trs_rate WHERE send_name = '$bsend' AND receive_name='$breceive'");
	$bg_fetch = mysqli_fetch_assoc($bg_query);
	$data['send_name'] = $bg_fetch['send_name'];
	$data['receive_name'] = $bg_fetch['receive_name'];
	$data['send_account'] = $bg_fetch['send_account'];
    $data['re_account'] = $bg_fetch['re_account'];
	$data['g_input'] = $bgiven_input;
	$data['result'] =  $bgiven_input * $bg_fetch['receive_rate'];
	$data['bd_result'] =  $bgiven_input / 100 * $bg_fetch['receive_rate'];
	$data['send_rate'] = $bg_fetch['send_rate'];
	$data['receive_rate'] = $bg_fetch['receive_rate'];
	$data['reserve'] = $bg_fetch['reserve'];
	$equal = $bgiven_input / 100 * $bg_fetch['receive_rate'];
	$equal2 = $bgiven_input * $bg_fetch['receive_rate'];;
	if($bg_fetch['reserve'] > $equal || $bg_fetch['reserve'] > $equal2){

    $data['reserve_error'] = "reserved";
	}elseif($bg_fetch['reserve'] < $equal || $bg_fetch['reserve'] < $equal2){
		$data['reserve_error'] = " The amount of exchange exceed our reserve. <br>Please contact the administrator. ";
	}
	echo json_encode($data);
}

// by page end


// exchange page

if(isset($_POST['esm'])){
	$esm = $_POST['esm'];
	$erm = $_POST['erm'];

	$e_sql = mysqli_query($conn,"SELECT * FROM `wa` WHERE wa_name='$esm'");
	while($e_rows = mysqli_fetch_assoc($e_sql)){		
		$data['blogo'] = $e_rows['wa_logo'];

		$equery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE send_name='$esm' AND receive_name='$erm'");
		$esrate = mysqli_fetch_assoc($equery);
		if(mysqli_num_rows($equery)==1){
		$data['send_rate'] = $esrate['send_rate'];
		$data['send_name'] = $esrate['send_name'];
		$data['receive_rate'] = $esrate['receive_rate'];
		$data['reserve'] = $esrate['reserve'];
		$data['send_account'] = $esrate['send_account'];
		$data['re_account'] = $esrate['re_account'];
		}
	}

	echo json_encode($data);
}


if(isset($_POST['errm'])){
	$errm = $_POST['errm'];
	$essm = $_POST['essm'];
	
		$er_sql = mysqli_query($conn,"SELECT * FROM `wa` WHERE wa_name='$errm'");
		while($er_rows = mysqli_fetch_assoc($er_sql)){		
		$data['blogo'] = $er_rows['wa_logo'];

		$equery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE send_name='$essm' AND receive_name='$errm'");
		$esrate = mysqli_fetch_assoc($equery);
	    if(mysqli_num_rows($equery) == 1){
			$data['send_rate'] = $esrate['send_rate'];
		    $data['send_name'] = $esrate['send_name'];
			$data['receive_rate'] = $esrate['receive_rate'];
			$data['reserve'] = $esrate['reserve'];
			$data['send_account'] = $esrate['send_account'];
			$data['re_account'] = $esrate['re_account'];
			$data['inquery_error'] = "Sorry this rows allready reserved in database";
		}else{
			     $reserve_subquery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE receive_name='$errm' ");
				 $subquery = mysqli_fetch_assoc($reserve_subquery);
				 $data['reserve'] = $subquery['reserve'];
				 $data['inquery_error'] = 'blank';
			}
	}
	echo json_encode($data);
}
// make transaction
if(isset($_POST['trs_submit'])){
	$send_from = $_POST['send_from'];
	$receive_with = $_POST['receive_with'];
	$send_amount = $_POST['send_amount'];
	$receive_amount = $_POST['receive_amount'];
	$trs_mail = $_POST['trs_mail'];
	$trs_id = $_POST['trs_id'];
	$trs_phone = $_POST['trs_phone'];
	$user_id = $_POST['user_id'];
	$status = 'waiting';
	$order_type = $_POST['order_type'];
	$lastid = mysqli_query($conn,"SELECT id FROM `transactions` ORDER BY id DESC LIMIT 1");
	$lid = mysqli_fetch_assoc($lastid);
	$c_id = $lid['id'];
	$current_id = $c_id + 1;
	$exchange_id = rand(000,999).$current_id.rand(000,999);
	$order_date = date("Y-m-d");

   // notification
    $date_time = date("Y-m-d h:i:s");
    mysqli_query($conn,"INSERT INTO `notifications` VALUES(NULL,'$user_id','transaction','$exchange_id','waiting','unseen','unseen','unseen','unseen','$date_time',null,'$order_date')");
   $ins_trs = mysqli_query($conn,"INSERT INTO `transactions` VALUES (NULL,'$send_from','$receive_with','$send_amount','$receive_amount','$trs_mail','$trs_id','$exchange_id','$trs_phone','$user_id','$status','$order_type',null,'$order_date')");
	header('location:user-profile.php');

}

// trs rate 

if(isset($_POST['trs_rate_save'])){
	$send_name = $_POST['send_name'];
	$send_rate = $_POST['send_rate'];
	$send_icon = 'send_icon';
	$receive_name = $_POST['receive_name'];
	$receive_rate = $_POST['receive_rate'];
	$receive_icon = 'receive_icon';
	$reserve = $_POST['reserve'];
	$sat = $_POST['sat'];
	$rat = $_POST['rat'];
	
	$inquery = mysqli_query($conn,"SELECT * FROM `trs_rate` WHERE send_name='$send_name' AND receive_name='$receive_name'");
	if(mysqli_num_rows($inquery) > 0){
		$data['inq_error'] = "sorry this rows allready have in database";
	}else{
		$sql = mysqli_query($conn,"INSERT INTO trs_rate VALUES(NULL,'$send_name','$send_rate','$send_icon','$receive_name','$receive_rate','$receive_icon','$reserve','$sat','$rat',null)");
		if($sql){
			header("location:admin.php");
		}else{
			echo "something is wrong";
		}
	}
}


// new account
if(isset($_POST['new_account'])){
    $account_name = $_POST['account_name'];
    $exp = explode(' ',$account_name);
    $implode_account_name = implode('-',$exp);

    $logo_name = $_FILES['account_logo']['name'];
    
    $logo_temp_loc = $_FILES['account_logo']['tmp_name'];
    $logo_store = 'img/'.$logo_name;

    $account_type = $_POST['account_type'];
    if($_POST['account_type']=='en'){
	    move_uploaded_file($logo_temp_loc,$logo_store);
		mysqli_query($conn,"INSERT INTO wa VALUES(NULL,'$implode_account_name','$logo_name',null)");
		header("location:admin.php");
    }elseif($_POST['account_type']=='bd'){
    	move_uploaded_file($logo_temp_loc,$logo_store);
		mysqli_query($conn,"INSERT INTO ba VALUES(NULL,'$implode_account_name','$logo_name',null)");
		header("location:admin.php");
    }
}



// register form

if(isset($_POST['register_submit'])){
    if($_POST['username'] != $_POST['error_username']){
	    $username = $_POST['username'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];		
		$error_username = $_POST['error_username'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		if(isset($_POST['gender'])){$gender = $_POST['gender'];}	
		$confirmpass = md5($_POST['confirmpass']);

	    $usersql =  mysqli_query($conn,"INSERT INTO `user_information` VALUES(NULL,'$firstname','$lastname','$username','$phone','$email','$gender','$confirmpass','user-icon.png','active',null,'00')");
	    $date_time = date("Y-m-d h:i:s");
	    $date = date("Y-m-d");
	    $rastid = mysqli_query($conn,"SELECT id FROM `user_information` ORDER BY id DESC LIMIT 1");
		$rid = mysqli_fetch_assoc($rastid);
		$r_id = $rid['id'];
		$currentt_id = $r_id + 1;
		$subject_id = rand(000,999).$currentt_id.rand(000,999);
        mysqli_query($conn,"INSERT INTO `notifications` VALUES(NULL,'$currentt_id','u_ragistration','$subject_id','active','unseen','unseen','unseen','unseen','$date_time',null,'$date')");
	    $lastid = mysqli_insert_id($conn);
	    $_SESSION['user_id'] = $lastid;
	    echo "<script language='javascript'>document.location.href='user-profile.php'</script>";
		if($usersql){
		   // echo "<script language='javascript'>document.location.href='user-profile.php'</script>";
		}else{
		    echo "<script language='javascript'>document.location.href='register.php'</script>";
		}
    }else{echo "<script language='javascript'>document.location.href='register.php'</script>";}
}


// register page username validation
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$usql = mysqli_query($conn,"SELECT username FROM `user_information` WHERE username='$username'");
	if(mysqli_num_rows($usql) > 0 ){
		echo "sorry";
	}
}

// register page email validation
if(isset($_POST['email'])){
	$email = $_POST['email'];
	$e_sql = mysqli_query($conn,"SELECT email_address FROM `user_information` WHERE email_address='$email'");
	if(mysqli_num_rows($e_sql) > 0 ){
		echo "sorry";
	}
}

// user photo upload

if(isset($_FILES['profile_photo']['name']) !=''){
	$user_id = $_POST['user_id'];
   $test = explode(".", $_FILES['profile_photo']['name']);
   $extension = end($test);
   $name = rand(1000,9999).'.'.$extension;
   $location = 'img/'.$name;
   move_uploaded_file($_FILES['profile_photo']['tmp_name'], $location);
   mysqli_query($conn,"UPDATE `user_information` SET profile_photo='$name' WHERE id='$user_id'");
   echo "photo uploaded";
}
?>
