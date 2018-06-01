<?php 
session_start();
$val=0;
if(isset($_SESSION['user'])){
    $val=1;
}

if($val=="0"){
   header('Location:../'); 
}

?>