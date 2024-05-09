<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="js/bootstrap.min.js" ></script>
    <title>SEND</title>
</head>
<body>  
    <h1>Formularios Alumnos</h1>

    <table class="table" >
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Fecha de Nacimiento</th>
        <th scope="col">Carrera</th>
        <th scope="col">Celular</th>
        <th scope="col">Email</th>
        <th scope="col">Direccion</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if(isset($_GET["firtsname"])){
                echo "
                <tr>
                    <th scope=row>1</th>
                    <td>$_GET[firtsname]</td>
                    <td>$_GET[lastname]</td>
                    <td>$_GET[dateborn]</td>
                    <td>$_GET[career]</td>
                    <td>$_GET[phone]</td>
                    <td>$_GET[email]</td>
                    <td>$_GET[address]</td>
                </tr>
                ";
            }
        ?>
    </tbody>
    </table>
    
</body>
</html>