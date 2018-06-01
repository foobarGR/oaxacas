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
    $query=$cnx->prepare("DELETE FROM t_inscripciones WHERE idIns=".$_GET['id']);
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