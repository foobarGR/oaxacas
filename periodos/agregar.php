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
            $id= $_POST['id'];
            $inicio= $_POST['inicio'];
            $fin= $_POST['fin'];
            $idPl= $_POST['idPl'];
 
              echo "
                                 
              <section class='login'>
               <p><label for='finicio'>Fecha de inicio</label></p>
               <input type='date' name='finicio' id='finicio' value='$inicio'>
               <p><label for='ffin'>Fecha de fin</label></p>
               <input type='date' name='ffin' id='ffin' value='$fin'>
               <p><label for='plan'>Plan de estudios</label></p>
               <select name='plan' id='plan'>";?>
                   <?php 
                        $query=$cnx->prepare("SELECT * FROM t_plan_estudios");
                        $query->execute();
                        foreach($query as $key => $value){
                            if($value[idPlan]==$idPl){
                            echo "<option value='".$value[idPlan]."' selected>".$value[nPlan];
                            echo "</option>";                                
                            }else{
                            echo "<option value='".$value[idPlan]."'>".$value[nPlan];
                            echo "</option>";
                            }
                        }
                     
                    echo "</select>
                <p><button class='btn-modificar' name='guardar' onclick=\"modificarPe('$id','$inicio','$fin','$idPl');\">Modificar</button></p>";
                   
                   

              
              
              
            
            
            
            
        }else{?>
      
                  
                <section class='login'>
               <p><label for='finicio'>Fecha de inicio</label></p>
               <input type='date' name='finicio' id='finicio'>
               <p><label for='ffin'>Fecha de fin</label></p>
               <input type='date' name='ffin' id='ffin'>
               <p><label for='plan'>Plan de estudios</label></p>
               <select name="plan" id="plan">
                   <?php 
                        $query=$cnx->prepare("SELECT * FROM t_plan_estudios");
                        $query->execute();
                        foreach($query as $key => $value){
                            echo "<option value='".$value[idPlan]."'>".$value[nPlan]."";
                            echo "</option>";                                                             

                        }
                   
                   ?>
               </select>
                <p><button class="btn-guardar" name='guardar' onclick="agregarPeriodo();">Guardar</button></p>
            
<?php } ?>

       </section>
        
    </div>
</body>
</html>