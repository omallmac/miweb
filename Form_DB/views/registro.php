<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <script src="../js/js/bootstrap.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../fundiones.js"></script>
    <title>Registro</title>
</head>
<body>
    <form action="" method="post">
        <h1>Agregar nuevo</h1>
        <div class="row">
            <div class="col">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" class="form-control" required>
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
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary" >Agregar</button>
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

        $sql= "insert into profesor (id,name,lastname,job,enable)
         values ($id,'$nombre','$apellido','$job',$enable)";
        echo "sql: $sql";

        try{
            $execute=mysqli_query($db,$sql);
            if($execute){
                echo "<script>show('New Record creaed') </script>";
            }
        }catch(Exception $e){
            echo "<script>show('New Record creaed',Error) </script>";
        }
        $db->close();
    }

    ?>
</body>
</html>