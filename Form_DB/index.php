<!DOCTYPE html>
<html lang="en">
<head>
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
                        <td><a href='views/editar.php?id=".$row['id']."'><img src='icons/pencil-solid.svg' class='icono'></td>
                        <td><a <button class='btn btn-primary open-modal' data-id=$row[id] data-bs-toggle='modal' data-bs-target='#exampleModal'><img src='icons/trash-solid.svg'></button></td>
                    <tr>
                ";               
            }
        ?>
    </table>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1></h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
        </div>

</body>
</html>