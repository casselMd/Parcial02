<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 100vh;
            display: grid;
            place-items: center;
        }
        form{
            width: 500px;
            gap: 1rem;
            align-items: center;
        }
        label{
            padding: 1rem;
            margin-top: 1rem;        
        }
        input{
            padding: .1rem;
        }
    </style>
</head>

<body>

    <form action="./registrar.php" method="POST">
        <h1>Formulario Registro</h1>
        <label for="titulo">titulo:</label>
        <input type="text" name="titulo" required="required"><br><br>

        <label for="linea_investigacion">linea investigacion:</label>
        <input type="text" name="linea_investigacion" required="required"><br><br>

        <label for="resumen">Resumen:</label>
        <input type="text" name="resumen" required="required"><br><br>

        <label for="objetivos">Objetivos:</label>
        <input type="text" name="objetivos" required="required"><br><br>  

        <label for="fecha_incio">fecha inicio:</label>
        <input type="text" name="fecha_incio" required="required"><br><br>

        <label for="fecha_fin">fecha fin:</label>
        <input type="text" name="fecha_fin" required="required"><br><br>

        <button type="submit">Registrar</button>
        <button type="reset">Limpiar</button>
    </form>

    <a href="./tesis.php"><button > Ver Listado </button></a>

    
</body>
</html>