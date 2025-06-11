<?php 

$titulo = $_POST["titulo"]; 
$linea_investigacion = $_POST["linea_investigacion"]; 
$resumen = $_POST["resumen"]; 
$objetivos = $_POST["objetivos"]; 
$fecha_inicio = $_POST["fecha_inicio"]; 
$fecha_fin = $_POST["fecha_fin"]; 


require_once("./Conexion.php");
$objConn = new Conexion();

$conn = $objConn->getConexion();
$sql = "INSERT INTO tesis (titulo , linea_investigacion, resumen, objetivos , fecha_inicio, fecha_fin) 
values('$titulo', 
        '$linea_investigacion',
        '$resumen', 
        '$objetivos',
        '$fecha_inicio',
        '$fecha_fin') ";

if($conn->query($sql)){
    echo "Registro exitoso";
    header("Location: ./tesis.php?success=true");
}else{
    header("Location: ./tesis.php?success=false");
}