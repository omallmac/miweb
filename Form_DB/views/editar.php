<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <script src="../js/js/bootstrap.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../fundiones.js"></script>
    <title>Editar</title>
</head>
<body>
    <?php
    // Obtener el ID pasado por la URL
    $id = $_GET['id'];
    ?>
    <form action="" method="post">
        <h1>Editar Registro</h1>
        <div class="row">
            <div class="col">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" value="<?php echo $id; ?>" readonly required>
        </div>
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="id">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control"  required>
            </div>
            <div class="col">
                <label for="nombre">Job</label>
                <input type="text" name="job" id="job" class="form-control" required>
            </div>
        </div>
            <br>

        <div class="row">
            <div class="col">
                <label for="">Esta Habilitado?</label>
                <input type="checkbox" name="enable" id="enable">
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class="p-2">
                <button type="submit" class="btn btn-primary" >Actualizar</button>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-secondary" onclick="redirectToPage()">Cancelar</button>
            </div>
        </div>
    </form>
    <?php
    if(isset($_POST["id"])&& isset($_POST["nombre"])&& isset($_POST["apellido"])&& isset($_POST["job"]) ){
        
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $job=$_POST["job"];
        $enable=true;
        

        include '../db/db.php';

        $sql = "UPDATE profesor SET name='$nombre', lastname='$apellido', job='$job' WHERE id=$id";

        

        try{
            $execute=mysqli_query($db,$sql);
            if($execute){
                echo "<script>show('Form Update','success') </script>";
                echo "<script>
                        setTimeout(() => {
                            redirectToPage();
                        },'3500');
                     </script>";
            }
        }catch(Exception $e){
            echo "<script>show('Error Update','error');</>";

        }
        $db->close();
    }

    ?>
</body>
</html>