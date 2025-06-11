<?php

            // ELIMINAR

if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once("./Conexion.php");
    $objConn = new Conexion();

    $conn = $objConn->getConexion();

    $sql = "UPDATE tesis SET estado = 0 WHERE id = $id";

    if($conn->query($sql)){
    } 
    header("Location: ./tesis.php");


}
header("Location: ./tesis.php");