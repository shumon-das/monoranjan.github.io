<?php 
session_start();
session_destroy();

setcookie('email','',time()-86400);
setcookie('password','',time()-86400);
header('location:login.php');
?>