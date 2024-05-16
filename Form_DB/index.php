<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css"> <!-- Aquí se carga Bootstrap primero -->
    <link rel="stylesheet" href="css/estilos.css"> <!-- Luego se cargan tus estilos personalizados -->
    <script src="js/js/bootstrap.min.js"></script>
</head>

<body>
    <h1>Listado de profesores</h1>
    
    <a href="views/registro.php" class="btn btn-primary"> Agregar otro</a>

    <?php
        include 'db/db.php';
        
        $sql = "SELECT * FROM profesor";

        $result = mysqli_query($db,$sql);

    ?>

    <table border="1" >
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>LastName</td>
            <td>Job</td>
            <td>Enable</td>
            <td colspan="2">Action</td>
        </tr>
        
        <?php 
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                    <tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['job']."</td>
                        <td>".$row['enable']."</td>
                        <td>".$row['enable']."</td>
                        <td><a href='views/editar.php?id=$row[id]'><img src='icons/pencil-solid.svg' class='icono'> |</td>
                        <td><a href='views/eliminar.php'><img src='icons/trash-solid.svg' class='icono'>|</td>
                    <tr>

                
                ";               


            }
        ?>

    </table>


</body>
</html>