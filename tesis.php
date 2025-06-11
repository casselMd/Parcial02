
</head>
    <style>
        body{   
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                height: 100vh;
                display: grid;
                place-items: center;

        }
        caption{
            font-size: 1.5rem;
            font-weight: bold;
        }
        table{
            width: 80%;
            border-collapse: collapse;
        }
        thead{
            background-color: gray;
            border-radius: 1rem;
        }
        tbody > tr{
            background-color: lightsteelblue;
            text-align: center;
            border-bottom: 1px solid  darkslategray;
            border-radius: 1rem;
        }
    </style>
<body>
    
    

    
    <?php 
        if(isset($_GET["success"]) && $_GET["success"]== "true") echo "<p>Registro con exito</p>";
        if(isset($_GET["success"]) && $_GET["success"]== "false") echo "<p>Error :No se registro</p>";

    ?>
    <table >
        <caption>Listado de Tesis</caption>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Linea investigación</th>
                <th>resumen</th>
                <th>objetivos</th>
                <th>fecha inicio</th>
                <th>fecha fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            require_once("./Conexion.php");
            $sql = "SELECT * FROM tesis where estado = 1 ";
            
            $objConn = new Conexion();

            $conn = $objConn->getConexion();

            

            $result = $conn->query($sql);

            if($result->num_rows > 0 ){

                while($fila= $result->fetch_assoc() ){
                    echo "<tr>"; 
                    echo "<td>".$fila["titulo"]."</td>";
                    echo "<td>".$fila["linea_investigacion"]."</td>";
                    echo "<td>".$fila["resumen"]."</td>";
                    echo "<td>".$fila["objetivos"]."</td>";
                    echo "<td>".$fila["fecha_inicio"]."</td>";
                    echo "<td>".$fila["fecha_fin"]."</td>";
                    echo "<td>
                            <a href='./editarTesis.php ?id=".$fila["id"]."'>Editar</a>
                            <a href='./eliminarTesis.php?id=".$fila["id"]."'>Eliminar</a>
                            </td>";
                    echo "</tr>";
                }
            }else{
                echo "<tr> <td colspan='4'> 0  resultados </td></tr>";
            }?>
        </tbody> 
    
    </table>
    <a href="./Formulario.php"><button>Formulario</button></a>
    <a href="./index.php"><button > Regresar </button></a>
