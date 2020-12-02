  <?php 
 
  include("database_connection.php");
  include("ad-sidebar.php");
  $date_time = date("Y-m-d h:i:s");
  $date = date("Y-m-d");

  // action.php start
  $trs_sum = mysqli_query($conn,"SELECT * FROM `transactions`");
  if(isset($_GET['id'])){
    $trs_id = $_GET['id'];
  // find this trans user id 
    $q = mysqli_query($conn,"SELECT * FROM `transactions` WHERE id='$trs_id'");
    $f = mysqli_fetch_assoc($q);
    $user_id = $f['user_id'];


    if($_GET['ac']=='complete'){

      mysqli_query($conn,"UPDATE `transactions` SET status='completed' WHERE id='$trs_id'");
      mysqli_query($conn,"INSERT INTO `notifications` VALUES(NULL,'$user_id','trs_action','$trs_id','completed','unseen','unseen','unseen','unseen','$date_time',null,'$date')");
      echo "<script language='javascript'>document.location.href='transaction.php'</script>";
    }else{
      mysqli_query($conn,"UPDATE `transactions` SET status='rejected' WHERE id='$trs_id'");
      mysqli_query($conn,"INSERT INTO `notifications` VALUES(NULL,'$user_id','trs_action','$trs_id','rejected','unseen','unseen','unseen','unseen','$date_time',null,'$date')");
      echo "<script language='javascript'>document.location.href='transaction.php'</script>";
    }

  }


  ?>

