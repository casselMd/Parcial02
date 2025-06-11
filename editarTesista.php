<?php

$id = $_GET["id"];

require_once("./Conexion.php");
$objConn = new Conexion();
$conn = $objConn->getConexion();

if (!isset($_GET['id'])) header("Location: ./tesis.php");
$id = intval($_GET['id']);
$resultado = $conn->query("SELECT * FROM tesista WHERE id = $id");

if ($resultado && $resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
} else {
    header("Location: ./tesista.php");
}



// Actualizar datos si se envía el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $dni = $_POST['dni'];
    $escuela = $_POST['escuela'];

    $sql = "UPDATE tesista 
            SET apellidos = '$apellidos', 
            nombres= '$nombres', 
            dni = '$dni'  
            escuela = '$escuela'  
            WHERE id=$id";

    if ($conn->query($sql)) {
        $mensaje = "Tesista actualizado correctamente.";
        header("Location: ./tesista.php");
    } else {
        $mensaje = "Error al actualizar: " ;
        header("Location: ./editarTesista.php?id=".$id);
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
        <h1>Editar tesista</h1>

        <label>Apellidos:</label>
        <input type="text" name="apellidos" value="<?= htmlspecialchars($tesista['apellidos']) ?>" required><br>

        <label>Nombres:</label>
        <input type="text" name="nombres" value="<?= htmlspecialchars($tesista['nombres']) ?>" required><br>

        <label>DNI:</label>
        <input type="text" name="dni" value="<?= htmlspecialchars($tesista['dni']) ?>" required><br>

        <label>Escuela:</label>
        <input type="text" name="escuela" value="<?= htmlspecialchars($tesista['escuela']) ?>" required><br>


        <button type="submit">Guardar Cambios</button>

</form>
    
</body>
</html>