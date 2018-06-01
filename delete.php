<?php 
require('config.php');

switch($_GET['table']){
    case 'users':
    $query=$cnx->prepare("DELETE FROM users WHERE idUser=".$_GET['id']);
$query->execute();
        break;
    case 't_inscripciones':
    $query=$cnx->prepare("DELETE FROM t_inscripciones WHERE idIns=".$_GET['id']);
        $query->execute();
        break;
    case 't_plan_estudios':
    $query=$cnx->prepare("DELETE FROM t_plan_estudios WHERE idPlan=".$_GET['id']);
    $query->execute();

        break;
    case 't_periodos':
    $query=$cnx->prepare("DELETE FROM t_periodos WHERE idPeriodo=".$_GET['id']);
    $query->execute();
       break;
        
}
echo json_encode($query->rowCount());

?>