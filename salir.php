<?php 
session_start();
$_SESSION['user']=null;
$_SESSION['pass']=null;
session_destroy();
header("Location:./");
?>