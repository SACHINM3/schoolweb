<?php 
session_start();

if(isset($_POST['logout-btn'])){
session_start();
session_unset();
session_destroy();

$_SESSION['message'] = "logged out";
header('location:../index.php');
exit(0);
}
?>
