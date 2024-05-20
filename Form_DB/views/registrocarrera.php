<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">

    <script src="../js/js/bootstrap.min.js"> </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="../funciones.js"></script>
    <title>Registro</title>
</head>
<body>
    <form action="" method="post"> 
        <h1>Agregar Carrera</h1>
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
                <label for="id">Duracion</label>
                <input type="number" name="duracion" id="apellido" class="form-control"  required>
            </div>
            <div class="col">
                <label for="nombre">Facultad</label>
                <input type="text" name="facultad" id="job" class="form-control" required>
            </div>
        </div>
       <div class="row">
            <di class="col">
                <label for="id">Costo</label>
                <input type="number" name="costo" id="apellido" class="form-control"  required>
            </di>
            <div class="col">
                <label for="nombre">Modalidad</label>
                <input type="text" name="modalidad" id="job" class="form-control" required>
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class="p-2">
                <button type="submit" class="btn btn-primary" >Agregar</button>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-secondary" onclick="redirectToPage3()">Cancelar</button>
            </div>
        </div>
        </form>
   <br>
    <?php
    if(isset($_POST["id"])&& isset($_POST["nombre"])&& isset($_POST["duracion"])&& isset($_POST["facultad"]) && isset($_POST["costo"]) && isset($_POST["modalidad"])  )
    {
        
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $duracion=$_POST["duracion"];
        $facultad=$_POST["facultad"];
        $costo=$_POST["costo"];
        $modalidad=$_POST["modalidad"];
 
        include '../db/db.php';

        $sql = "INSERT INTO carrera(id, name, duracion, facultad, costo, modalidad)
        VALUES ($id, '$nombre',$duracion,'$facultad',$costo,'$modalidad')";
        
       echo $sql;
        
        try{
            $execute=mysqli_query($db,$sql);
            if($execute){
                echo "<script>show('Carrera Registrado','success') </script>";
                echo "<script>
                        setTimeout(() => {
                            redirectToPage3();
                        },'3500');
                     </script>";
            }
        }catch(Exception $e){
            echo "<script>show('Error al Registrar','error')</script>";

        }
        $db->close();
    }
    
    ?>
</body>
</html>