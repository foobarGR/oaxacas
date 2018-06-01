<?php 
require('config.php');
    

    
switch($_GET['table']){
    case 'users':
    $query=$cnx->prepare("SELECT max(idUser) as max FROM users");
    $query->execute();
    $id = json_encode($query->fetchColumn());
    $id++;

    $query=$cnx->prepare("INSERT INTO users VALUES($id,'".$_GET['user']."','".$_GET['pass']."')");
    $query->execute();
    
    break;
        
    case 't_inscripciones':
    $query=$cnx->prepare("SELECT max(idIns) as max FROM t_inscripciones");
    $query->execute();
    $id = json_encode($query->fetchColumn());
    $id++;
        
        $alumno=(int)$_GET['alumno'];
        $grupo=(int)$_GET['grupo'];
        $pago=(int)$_GET['pago'];
        $plan=(int)$_GET['plan'];
        $docente=(int)$_GET['docente'];
        $periodo=(int)$_GET['periodo'];
        
    $query=$cnx->prepare("INSERT INTO t_inscripciones VALUES($id,$alumno,$grupo,$pago,$plan,$docente,$periodo)");
    $query->execute();
    break;
        
    case 't_plan_estudios':
    $query=$cnx->prepare("SELECT max(idPlan) as max FROM t_plan_estudios");
    $query->execute();
    $id = json_encode($query->fetchColumn());
    $id++;
    $plan=(string)$_GET['nplan'];
        
    $query=$cnx->prepare("INSERT INTO t_plan_estudios VALUES($id,'$plan')");
    print_r($query);
    $query->execute();

        break;
    case 't_periodos':
    $query=$cnx->prepare("SELECT max(idPeriodo) as max FROM t_periodos");
    $query->execute();
    $id = json_encode($query->fetchColumn());
    $id++;
    $plan=(int)$_GET['plan'];
    $inicio=$_GET['finicio'];
    $fin=$_GET['ffin'];
        

        
    $query=$cnx->prepare("INSERT INTO t_periodos VALUES($id,'$inicio','$fin',$plan)");
    print_r($query);
    $query->execute();


        break;
        
}

date('Y-m-d',strtotime($fecha ));

?>