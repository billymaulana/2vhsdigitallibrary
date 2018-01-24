<?php 
session_start();
session_destroy();
$_SESSION['user']= null;
header("location: ../index.php?notif=logout Succes");

?>