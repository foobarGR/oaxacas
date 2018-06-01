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
	    <title>Inscripcion</title>
	    
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
                <p><button name='guardar' onclick=\"modificarPe('$id','$inicio','$fin','$idPl');\">Modificar</button></p>";
                   
                   

              
              
              
            
            
            
            
        }else{?>
      
                  
                <section class='login'>
               <p><label for='alumno'>Alumno</label></p>
               <select name="alumno" id="alumno">
                   <?php 
                        $query=$cnx->prepare("SELECT * FROM t_alumnos");
                        $query->execute();
                        foreach($query as $key => $value){
                            echo "<option value='".$value[idAlumno]."'>".$value[nAlumno]."";
                            echo "</option>";                                                             

                        }
                   
                   ?>
               </select>               
               
               <p><label for='grupo'>Grupo</label></p>
               <select name="grupo" id="grupo">
                   <?php 
                        $query=$cnx->prepare("SELECT * FROM t_grupos");
                        $query->execute();
                        foreach($query as $key => $value){
                            echo "<option value='".$value[idGrupo]."'>".$value[grupo]."";
                            echo "</option>";                                                             

                        }
                   
                   ?>
               </select>
               
               <p><label for='plan'>Plan de estudio</label></p>
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
                <p><label for='docente'>Docente</label></p>
               <select name="docente" id="docente">
                   <?php 
                        $query=$cnx->prepare("SELECT * FROM t_docentes");
                        $query->execute();
                        foreach($query as $key => $value){
                            echo "<option value='".$value[idDocente]."'>".$value[nDocente]."";
                            echo "</option>";                                                             

                        }
                   
                   ?>
               </select>     
               <p><label for='periodo'>Periodo</label></p>
               <select name="periodo" id="periodo">
                   <?php 
                        $query=$cnx->prepare("SELECT * FROM t_periodos");
                        $query->execute();
                        foreach($query as $key => $value){
                            echo "<option value='".$value[idPeriodo]."'>".$value[fInicio]."/".$value['fFin'];
                            echo "</option>";                                                             

                        }
                   
                   ?>
               </select>
               <p><label for='pago'>Pago</label></p>
                <input type='number' name='pago' id='pago'>
               <p><button name='guardar' onclick="agregarIns();">Guardar</button></p>
            
<?php } ?>

       </section>
        
    </div>
</body>
</html>