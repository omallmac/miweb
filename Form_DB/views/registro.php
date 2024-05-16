<!DOCTYPE html>
<head>
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
        <div class="d-flex flex-row">
            <div class="p-2">
                <button type="submit" class="btn btn-primary" >Agregar</button>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-secondary" onclick="redirectToPage()">Cancelar</button>
            </div>
        </div>
        </form>
   
   <br>

    
    <a href="../index.php" class="btn btn-primary" style="display: block; margin: 0 auto; width: fit-content;">Registros</a>

 
    
    <?php
    if(isset($_POST["id"])&& isset($_POST["nombre"])&& isset($_POST["apellido"])&& isset($_POST["job"]) ){
        
        

        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $job=$_POST["job"];

        if (isset($_REQUEST['enable'])) {
            $enable = true;
        } else {
            $enable = false;
        }
        
        

        include '../db/db.php';

        $sql = "INSERT INTO profesor (id, name, lastname, job, enable)
        VALUES ($id, '$nombre', '$apellido', '$job', '$enable')";
        
        
        try{
            $execute=mysqli_query($db,$sql);
            if($execute){
                echo "<script>show('New Record creaed','success') </script>";
                echo "<script>
                        setTimeout(() => {
                            redirectToPage();
                        },'3500');
                     </script>";
            }
        }catch(Exception $e){
            echo "<script>show('Error','error');</>";

        }
        $db->close();
    }

    ?>
</body>
</html>