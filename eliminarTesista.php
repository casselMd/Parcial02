<?php

            // ELIMINAR

if(isset($_GET["id"])){
    $id = $_GET["id"];
    require_once("./Conexion.php");
    $objConn = new Conexion();

    $conn = $objConn->getConexion();

    $sql = "UPDATE tesista SET estado = 0 WHERE id = $id";

    if($conn->query($sql)){
    } 
    header("Location: ./tesista.php");


}
header("Location: ./tesista.php");