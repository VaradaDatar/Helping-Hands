<?php ob_start();?>
<?php session_start();?>
<?php
$_SESSION['V_id']=null;
$_SESSION['userName']=null;
$_SESSION['email']=null;
$_SESSION['contact']=null;
$_SESSION['password']=null;
$_SESSION['userRole']=null;

header("Location:../../V_log.php");
?>
