<?php

$id = $_GET["id"];

require_once("./Conexion.php");
$objConn = new Conexion();
$conn = $objConn->getConexion();

if (!isset($_GET['id'])) header("Location: ./tesis.php");
$id = intval($_GET['id']);
$resultado = $conn->query("SELECT * FROM tesis WHERE id = $id");

if ($resultado && $resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
} else {
    header("Location: ./tesis.php");
}



// Actualizar datos si se envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $linea_investigacion = $_POST['linea_investigacion'];
    $Resumen = $_POST['resumen'];
    $objetivos = $_POST['objetivos'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $sql = "UPDATE tesis 
            SET titulo = '$titulo', 
            linea_investigacion= '$linea_investigacion', 
            resumen = '$resumen'  
            objetivos = '$objetivos'  
            fecha_inicio = '$fecha_inicio'  
            fecha_fin = '$fecha_fin'  
            WHERE id=$id";

    if ($conn->query($sql)) {
        $mensaje = "Usuario actualizado correctamente.";
        header("Location: ./tesis.php");
    } else {
        $mensaje = "Error al actualizar: " ;
        header("Location: ./editarTesis.php?id=".$id);
    }

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" class="tabla">
        <h1>Editar tesis</h1>

        <label>titulo:</label>
        <input type="text" name="titulo" value="<?= htmlspecialchars($tesis['titulo']) ?>" required><br>

        <label>linea investigacion:</label>
        <input type="text" name="apellidos" value="<?= htmlspecialchars($tesis['linea_investigacion']) ?>" required><br>

        <label>resumen:</label>
        <input type="text" name="resumen" value="<?= htmlspecialchars($tesis['resumen']) ?>" required><br>

        <label>objetivos:</label>
        <input type="text" name="objetivos" value="<?= htmlspecialchars($tesis['objetivos']) ?>" required><br>

        <label>fecha inicio:</label>
        <input type="text" name="fecha_inicio" value="<?= htmlspecialchars($tesis['fecha_inicio']) ?>" required><br>

        <label>fecha fin:</label>
        <input type="text" name="fecha_fin" value="<?= htmlspecialchars($tesis['fecha_fin']) ?>" required><br>

        <button type="submit">Guardar Cambios</button>

</form>
    
</body>
</html>