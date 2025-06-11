<?php 

$apellidos = $_POST["apellidos"]; 
$nombres = $_POST["nombres"]; 
$dni = $_POST["dni"]; 
$escuela = $_POST["escuela"]; 


require_once("./Conexion.php");
$objConn = new Conexion();

$conn = $objConn->getConexion();
$sql = "INSERT INTO tesista (apellidos , nombres, dni, escuela) 
values('$apellidos', 
        '$nombres',
        '$dni', 
        '$escuela') ";

if($conn->query($sql)){
    echo "Registro exitoso";
    header("Location: ./tesista.php?success=true");
}else{
    header("Location: ./tesista.php?success=false");
}