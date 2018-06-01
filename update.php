<?php 
require('config.php');
    

    
switch($_GET['table']){
    case 'users':
    $id=(int)$_GET['id'];
    $name=$_GET['user'];
    $psw=$_GET['pass'];
    $query=$cnx->prepare("UPDATE users set name='$name', pass='$psw' WHERE idUser=$id");
    $query->execute();

    break;
        
    case 't_inscripciones':
    $id=(int)$_GET['id'];
    $alumno=(int)$_GET['alumno'];
    $grupo=(int)$_GET['grupo'];
    $pago=(int)$_GET['pago'];
    $plan=(int)$_GET['plan'];
    $docente=(int)$_GET['docente'];
    $periodo=(int)$_GET['periodo'];

    $query=$cnx->prepare("UPDATE t_inscripciones set idAlumno=$alumno, idGrupo=$grupo, tPago=$pago, idPlan=$plan, idDocente=$docente, idPeriodo=$periodo WHERE idIns=$id");
    $query->execute();
        
    break;
        
    case 't_plan_estudios':
    $id=(int)$_GET['id'];
    $name=$_GET['nplan'];
    $query=$cnx->prepare("UPDATE t_plan_estudios set nPlan='$name' WHERE idPlan=$id");
    $query->execute();

        
        break;
    case 't_periodos':

    $id=(int)$_GET['id'];
    $idPl=(int)$_GET['idPl'];
    $inicio=$_GET['inicio'];
    $fin=$_GET['fin'];
    $query=$cnx->prepare("UPDATE t_periodos set fInicio='$inicio', fFin='$fin', idPlan=$idPl WHERE idPeriodo=$id");
    $query->execute();
        
       break;
        
}



?>