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
        <h1>Agregar Alumno</h1>
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
                <label for="nombre">Edad</label>
                <input type="number" name="edad" id="job" class="form-control" required>
            </div>
        </div>
       <div class="row">
            <di class="col">
                <label for="id">Semestre</label>
                <input type="number" name="semestre" id="apellido" class="form-control"  required>
            </di>
            <div class="col">
                <label for="nombre">Turno</label>
                <input type="text" name="turno" id="job" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <di class="col">
                <label for="id">Carrera</label>
                <input type="text" name="carrera" id="apellido" class="form-control"  required>
            </di>
            <div class="col">
                <label for="nombre">Dni</label>
                <input type="number" name="dni" id="job" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <di class="col">
                <label for="id">Telefono</label>
                <input type="number" name="telefono" id="apellido" class="form-control"  required>
            </di>
            <di class="col">
            </di>
        </div>
        <div class="d-flex flex-row">
            <div class="p-2">
                <button type="submit" class="btn btn-primary" >Agregar</button>
            </div>
            <div class="p-2">
                <button type="button" class="btn btn-secondary" onclick="redirectToPage2()">Cancelar</button>
            </div>
        </div>
        </form>
   <br>
    <a href="../alumno.php" class="btn btn-primary" style="display: block; margin: 0 auto; width: fit-content;">Registros</a>
    <?php
    if(isset($_POST["id"])&& isset($_POST["nombre"])&& isset($_POST["apellido"])&& isset($_POST["edad"]) && isset($_POST["semestre"]) && isset($_POST["turno"]) && isset($_POST["carrera"]) && isset($_POST["dni"]) && isset($_POST["telefono"]  ) )
    {
        
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $edad=$_POST["edad"];
        $semestre=$_POST["semestre"];
        $turno=$_POST["turno"];
        $carrera=$_POST["carrera"];
        $dni=$_POST["dni"];
        $telefono=$_POST["telefono"];
        
        

        include '../db/db.php';

        $sql = "INSERT INTO Alumno(id, name, lastname, edad,semestre,turno,carrera,dni,telefono)
        VALUES ($id, '$nombre', '$apellido',$edad,$semestre,'$turno','$carrera',$dni,$telefono)";
        
       
        
        try{
            $execute=mysqli_query($db,$sql);
            if($execute){
                echo "<script>show('Alumno Registrado','success') </script>";
                echo "<script>
                        setTimeout(() => {
                            redirectToPage2();
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