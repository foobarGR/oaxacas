<?php 
require('../config.php');
require('../validaLogIn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	
	<!-- viewport meta to reset iPhone inital scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	    <title>Agregar usuario</title>
	    
   <!--	  Importando hojas de estilo  -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/val.js"></script>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../icons/style.css">

</head>
<body>
    
    <div class="wraperU">
       
       <?php require('../menu.php');
          if(isset($_POST['modificar'])){
            $name= $_POST['nplan'];
            $id= $_POST['id'];
            echo "<section class='login'>
               <p><label for='nplan'>Plan</label></p>
               <input type='text' name='nplan' id='nplan' value='$name'>
                <p><button name='modificar' onclick=\"modificarPl('$id','$name')\">Modificar</button></p>";
            
            
            
        }else{?>
                     
      
                   
              <section class='login'>
               <p><label for='nplan'>Plan</label></p>
               <input type='text' name='nplan' id='nplan'>
                <p><button name='guardar' onclick="agregar();">Guardar</button></p>
            
<?php } ?>
       </section>
        
    </div>
</body>
</html>