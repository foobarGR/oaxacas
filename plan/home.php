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
    
	<title>Inscripciones</title>
</head>
<body>
   
   <div class="wraper">
    <!-- INCLUIR EL ARCHIVO DEL MENU   -->
     <?php require('../menu.php');?>
       <section>
           
           <?php 
               $query=$cnx->prepare("SELECT p.idPeriodo,p.fInicio,p.fFin,pl.nPlan,p.idPlan FROM t_periodos p JOIN t_plan_estudios pl ON p.idPlan=pl.idPlan;");
                $query->execute();
                    
                        echo "<div class='header section group'>";
                        echo "<div class='col span_3_of_12'>
                                FECHA DE INICIO
                                </div>
                            <div class='col span_3_of_12'>
                                FECHA DE FIN
                            </div>                      

                            <div class='col span_6_of_12'>
                                PLAN DE ESTUDIOS
                            </div>                      
";

                         echo "</div>";
                        
                    foreach($query as $key => $value){
                        
                        echo "<div class='header section group' id='".$value['idPeriodo']."'>";
                        echo "<div class='col span_3_of_12'>".
                                $value['fInicio']
                                ."</div>
                            <div class='col span_3_of_12'>".
                                $value['fFin']
                            ."</div>

                            <div class='col span_6_of_12'>".
                                $value['nPlan']
                            ."</div>";
                        
                        
                        echo "</div>";
                        
                    }
           ?>
            
       </section>

       <footer>


       </footer>
       
   </div>
    
</body>
</html><?php 
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
    
	<title>Inscripciones</title>
</head>
<body>
   
   <div class="wraper">
    <!-- INCLUIR EL ARCHIVO DEL MENU   -->
     <?php require('../menu.php');?>
       <section>
           
           <?php 
               $query=$cnx->prepare("SELECT p.idPeriodo,p.fInicio,p.fFin,pl.nPlan,p.idPlan FROM t_periodos p JOIN t_plan_estudios pl ON p.idPlan=pl.idPlan;");
                $query->execute();
                    
                        echo "<div class='header section group'>";
                        echo "<div class='col span_3_of_12'>
                                FECHA DE INICIO
                                </div>
                            <div class='col span_3_of_12'>
                                FECHA DE FIN
                            </div>                      

                            <div class='col span_6_of_12'>
                                PLAN DE ESTUDIOS
                            </div>                      
";

                         echo "</div>";
                        
                    foreach($query as $key => $value){
                        
                        echo "<div class='header section group' id='".$value['idPeriodo']."'>";
                        echo "<div class='col span_3_of_12'>".
                                $value['fInicio']
                                ."</div>
                            <div class='col span_3_of_12'>".
                                $value['fFin']
                            ."</div>

                            <div class='col span_6_of_12'>".
                                $value['nPlan']
                            ."</div>";
                        
                        
                        echo "</div>";
                        
                    }
           ?>
            
       </section>

       <footer>


       </footer>
       
   </div>
    
</body>
</html>