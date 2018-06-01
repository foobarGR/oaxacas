<?php 
session_start();
require('config.php');


if(isset($_POST['user'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $query=$cnx->prepare("SELECT * FROM users WHERE name='$user' AND pass='$pass'");
    $query->execute();
    
    
    if ($query->rowCount()>0){
        $_SESSION['user']=$user;
        $_SESSION['pass']=$pass;
        header("Location:users/home.php");
    }else{

        session_destroy();
        echo "<script>";
        echo "alert('Usuario o contraseña incorrectos')";
        echo "</script>";
        
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	
	<!-- viewport meta to reset iPhone inital scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
    <!--	  Importando hojas de estilo  -->
    <link rel="stylesheet" href="css/style.css">
    
    <!--  Importando hojas js  -->
    
	<title>LogIn</title>
</head>
<body>
   
           <div class="flotante" id='names'>
            <div><img src="img/girl-1.png" alt="">
                <p>Verónica Martínez Durán</p>
            </div>
            <div><img src="img/mann.png" alt="">
                <p>Marco Antonio Garcia Ramos</p>
            </div>
            <div><img src="img/man-2.png" alt="">
                <p>Daniel Trejo Rebollo</p>
            </div>
            <div><img src="img/boy-1.png" alt="">
                <p>Uriel Cambron Hernandez</p>
            </div>
    </div>

   <div class="wraperL">


       <section class="login">
            <form action="" method="post">
               <p><label for="user">Usuario</label></p>
               <input type="text" name="user" id="log" >
               <p><label for="pass">Contraseña</label></p>
               <input type="password" name="pass" id="log" >
               <p><input type="submit" value="LogIn" name="login"></p>
                <span class="error" id="error" >Usuario o contraseña incorretos</span>
            </form>
            

       </section>


   </div>
    
</body>
</html>