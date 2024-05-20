<!DOCTYPE html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css"> <!-- Aquí se carga Bootstrap primero -->
    <link rel="stylesheet" href="css/estilos.css"> <!-- Luego se cargan tus estilos personalizados -->
    <script src="js/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-3.7.1.min.js"></script>
    <script src="funciones.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <img src="icons/bootstrap-logo.svg" alt="" width="30" height="24">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Profesor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="alumno.php">Alumno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrera.php">Carreras</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <h1>Listado de Carreras</h1>
    <a href="views/registrocarrera.php" class="btn btn-primary"> Agregar </a>
    <?php
        include 'db/db.php';
        $sql = "SELECT * FROM carrera";
        $result = mysqli_query($db,$sql);
    ?>
    <table border="1" >
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Duracion</td>
            <td>Facultad</td>
            <td>Costo</td>
            <td>Modalidad</td>
            <td colspan="2">Action</td>
        </tr>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                    <tr>    
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['duracion']."</td>
                        <td>".$row['facultad']."</td>
                        <td>".$row['costo']."</td>
                        <td>".$row['modalidad']."</td>
                        <td>
                            <a href='views/editarcarrera.php?id={$row['id']} &name=" . urlencode($row['name']) . "&duracion=" . urlencode($row['duracion']) . "&facultad=" . urlencode($row['facultad']) . "&costo=". urlencode($row['costo']) . "&modalidad=". urlencode($row['modalidad'])  ."' class='btn btn-warning'>
                                    <img src='icons/pencil-solid.svg'>
                            </a>
                        </td>
                        <td><button class='btn btn-danger open-modal' data-id=$row[id] data-bs-toggle='modal' 
                        data-bs-target='#exampleModal'><img src='icons/trash-solid.svg'></button></td>                    <tr>
                ";               
            }
        ?>
    </table>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <!-- <form method="post"> -->
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Desear eliminar?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" method="post">
                    <input type="text" class="form-control" name="deleteId" id="deleteId" disabled>
                    <button type="submit" class="btn btn-primary" name="save" onclick="deleteRecord3()">Si</button>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <!-- <button type="submit" class="btn btn-primary" name="save">Save changes</button> -->
            </div>
        <!-- </form> -->
    </div>
  </div>
</div>

<?php 
    if(isset($_POST["save"]) && isset($_POST["valId"])){
        $id = $_POST["valId"];

        echo '<script>alert("Registered successfully")</script>';
    }

?>

</body>
</html>