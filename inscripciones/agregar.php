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
            $alumno= $_POST['alumno'];
            $grupo= $_POST['grupo'];
            $pago= $_POST['pago'];
            $plan= $_POST['plan'];
            $docente= $_POST['docente'];
            $periodo= $_POST['periodo'];
 ?>
               <section class='login'>
               <p><label for='alumno'>Alumno</label></p>
               <select name='alumno' id='alumno'>"
                   <?php 
                        $query=$cnx->prepare('SELECT * FROM t_alumnos');
                        $query->execute();
                        foreach($query as $key => $value){
                            if($value['idAlumno']==$alumno){
                            echo "<option value='".$value['idAlumno']."' selected>".$value['nAlumno'];
                            echo '</option>';                                 
                            }else{
                            echo "<option value='".$value['idAlumno']."' >".$value['nAlumno'];
                            echo '</option>';                                 
                            }
                                                            

                        }
                   
                   ?>
               </select>               
               
               <p><label for='grupo'>Grupo</label></p>
               <select name='grupo' id='grupo'>
                   <?php 
                        $query=$cnx->prepare('SELECT * FROM t_grupos');
                        $query->execute();
                        foreach($query as $key => $value){

                            if($value['idGrupo']==$grupo){
                            echo "<option value='".$value['idGrupo']."' selected>".$value['grupo'];
                            echo '</option>';                                 
                            }else{
                            echo "<option value='".$value['idGrupo']."' >".$value['grupo'];
                            echo '</option>';                                 
                            }                            

                        }
                   
                   ?>
               </select>
               
               <p><label for='plan'>Plan de estudio</label></p>
               <select name='plan' id='plan2'>
                   <?php 
                        $query=$cnx->prepare('SELECT * FROM t_plan_estudios');
                        $query->execute();
                        foreach($query as $key => $value){                                                      
                            if($value['idPlan']==$plan){
                            echo "<option value='".$value['idPlan']."' selected>".$value['nPlan'];
                            echo '</option>';                                 
                            }else{
                            echo "<option value='".$value['idPlan']."' >".$value['nPlan'];
                            echo '</option>';                                 
                            }
                        }
                   
                   ?>
               </select>  
                <p><label for='docente'>Docente</label></p>
               <select name='docente' id='docente'>
                   <?php 
                        $query=$cnx->prepare('SELECT * FROM t_docentes');
                        $query->execute();
                        foreach($query as $key => $value){
                                                
                            if($value['idDocente']==$docente){
                            echo "<option value='".$value['idDocente']."' selected>".$value['nDocente'];
                            echo '</option>';                                 
                            }else{
                            echo "<option value='".$value['idDocente']."' >".$value['nDocente'];
                            echo '</option>';                                 
                            }
                        }
                   
                   ?>
               </select>     
               <p><label for='periodo'>Periodo</label></p>
               <select name='periodo' id='periodo'>
                   <?php 
                        $query=$cnx->prepare('SELECT * FROM t_periodos');
                        $query->execute();
                        foreach($query as $key => $value){                                                         
                            if($value['idPeriodo']==$periodo){
                            echo "<option value='".$value['idPeriodo']."' selected>".$value['fInicio'].'/'.$value['fFin'];
                            echo '</option>';                                 
                            }else{
                            echo "<option value='".$value['idPeriodo']."' >".$value['fInicio'].'/'.$value['fFin'];
                            echo '</option>';                                 
                            }
                        }
                   
                   ?>
               </select>
               <p><label for='pago'>Pago</label></p>
                <input type='number' name='pago' id='pagoA' value="<?php echo $pago;?>">
               <p><button class="btn-modificar" name='guardar' onclick='modificarIns(<?php echo $id;?>);'>Modificar</button></p>
            


       </section>                                 
             
<?php } else{ ?>
            
                  
                  
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
                <input type='number' name='pago' id='pagoA'>
               <p><button class="btn-guardar" name='guardar' onclick="agregarIns();">Guardar</button></p>
            

       </section>
            
            
            
            
            
            
            
            
            
          <?php }?>             
             
      
                   
                   

              
              
              
            
            
            
            

        
    </div>
</body>
</html>