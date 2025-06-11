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
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required="required"><br><br>

        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" required="required"><br><br>

        <label for="dni">DNI:</label>
        <input type="text" name="dno" required="required"><br><br>

        <label for="escuela">Escuela Profesional:</label>
        <input type="text" name="escuela" required="required"><br><br>  

        <button type="submit">Registrar</button>
        <button type="reset">Limpiar</button>
    </form>

    <a href="./tesista.php"><button > Ver Listado </button></a>

    
</body>
</html>