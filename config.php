<?php 
$host="localhost";
$user="root";
$pass="";
$bd="exaT5";


$cnx= new PDO("mysql:host=$host;dbname=$bd",$user,$pass);
$cnx->setAttribute(PDO::ATTR_EMULATE_PREPARES,false); 
$cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!$cnx){
    echo "Error al conectarse a la base de datos";
}



?>