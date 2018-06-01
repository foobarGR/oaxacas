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
               $query=$cnx->prepare("SELECT * FROM t_plan_estudios");
                $query->execute();
                    
                        echo "<div class='section group'>";
                        echo "<div class='header col span_12_of_12'>
                                PLAN DE ESTUDIOS
                                </div>
                            
                        
                            ";

                         echo "</div>";                        
                    foreach($query as $key => $value){
                        
                        echo "<div class='section group' id='".$value['idPlan']."'>";
                        echo "<div class='col span_12_of_12'>".
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