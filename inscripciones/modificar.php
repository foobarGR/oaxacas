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
	
    <!--	  Importando hojas de estilo  -->
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/val.js"></script>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../icons/style.css">


    
    
    <!--  Importando hojas js  -->
    
	<title>MODIFICAR</title>
</head>
<body>
   
   <div class="wraper">
    <!-- INCLUIR EL ARCHIVO DEL MENU   -->
     <?php require('../menu.php');?>
       <section>
           
           <?php 
               $query=$cnx->prepare("SELECT i.idIns,a.idAlumno,a.nAlumno,g.idGrupo,g.grupo,i.tpago,pl.idPlan,pl.nPlan,doc.idDocente,doc.nDocente,pe.idPeriodo,pe.fInicio,pe.fFin FROM t_inscripciones i INNER JOIN t_alumnos a ON a.idAlumno=i.idAlumno INNER JOIN t_docentes doc ON doc.idDocente=i.idDocente INNER JOIN t_grupos g ON g.idGrupo=i.idGrupo INNER JOIN t_periodos pe ON pe.idPeriodo=i.idPeriodo INNER JOIN t_plan_estudios pl ON  pl.idPlan=i.idPlan;");
                $query->execute();
                    
                        echo "<div class='section group'>";
                        echo "<div class='header col span_2_of_12'>
                                ALUMNO
                                </div>
                            <div class='header col span_1_of_12'>
                                GRUPO
                            </div>                      

                            <div class='header col span_1_of_12'>
                                PAGO
                            </div>                      

                            <div class='header col span_2_of_12'>
                                PLAN
                            </div>                      
                            <div class='header col span_2_of_12'>
                                DOCENTE
                            </div>                      
                            <div class='header col span_2_of_12'>
                                PERIODO
                            </div>                      
                            <div class='header col span_2_of_12'>
                                MODIFICAR
                            </div> 
                            
                         
";

                         echo "</div>";
                        
                    foreach($query as $key => $value){
                        
                        echo "<div class='section group' id='".$value['idIns']."'>";
                        echo "<div class='col span_2_of_12'>".
                                $value['nAlumno']
                                ."</div>
                            <div class='col span_1_of_12'>".
                                $value['grupo']
                            ."</div>

                            <div class='col span_1_of_12'>".
                                $value['tpago']
                            ."</div>
                            <div class='col span_2_of_12' style='overflow: auto'>".
                                $value['nPlan']
                                ."</div>
                                
                                <div class='col span_2_of_12'>".
                                $value['nDocente']
                                ."</div>
                                
                                <div class='col span_2_of_12' style='overflow:auto'>".
                                $value['fInicio']
                                ."/.".$value['fFin']."</div>";
                        echo "<div class='col span_2_of_12'>";?>
                            <form action="agregar.php" method="post">
                            <input type="text" name="id" id="modificar" value="<?php echo $value['idIns']; ?>">
                            <input type="text" name="alumno" id="modificar" value="<?php echo $value['idAlumno']; ?>">
                            <input type="text" name="grupo" id="modificar" value="<?php echo $value['idGrupo']; ?>">
                            <input type="text" name="pago" id="modificar" value="<?php echo $value['tpago']; ?>">
                            <input type="text" name="plan" id="modificar" value="<?php echo $value['idPlan']; ?>">
                            <input type="text" name="docente" id="modificar" value="<?php echo $value['idDocente']; ?>">
                            <input type="text" name="periodo" id="modificar" value="<?php echo $value['idPeriodo']; ?>">
                            <input type="submit"  name="modificar" value="Modificar">
                            </form>
                                
                                
                        <?php    echo "</div>";
                        
                        
                        echo "</div>";
                        
                    }
           ?>
            
       </section>

       <footer>


       </footer>
       
   </div>
    
</body>
</html>