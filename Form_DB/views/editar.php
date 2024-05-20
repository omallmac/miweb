<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/css/bootstrap.min.css">
    <script src="../js/js/bootstrap.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../funciones.js"></script>
    <title>Editar</title>
</head>
<body>
    <?php
    $id = $_POST['id'] ?? $_GET['id'];
    $name = $_POST['nombre'] ?? $_GET['name'];
    $lastname = $_POST['apellido'] ?? $_GET['lastname'];
    $job = $_POST['job'] ?? $_GET['job'];
    $enable = $_POST['enable']?? $_GET['enable'];
    $checked = ($enable) ? 'checked' : '';
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
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $name; ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="id">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $lastname; ?>" required>
            </div>
            <div class="col">
                <label for="nombre">Job</label>
                <input type="text" name="job" id="job" class="form-control" value="<?php echo $job; ?>" required>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="">Esta Habilitado?</label>
                <input type="checkbox" name="enable" id="enable" <?php echo $checked; ?>>
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
    if (isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["job"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $job = $_POST["job"];
        if (isset($_POST['enable'])) {
            $enable = true;
        } else {
            $enable = false;
        }
        include '../db/db.php';
        $sql = "UPDATE profesor SET name='$nombre', lastname='$apellido', job='$job' ,enable='$enable'  WHERE id=$id";
        try {
            $execute = mysqli_query($db, $sql);
            if ($execute) {
                echo "<script>show('Registro Actualizado','success') </script>";
                echo "<script>
                        setTimeout(() => {
                            redirectToPage();
                        },'3500');
                     </script>";
            }
        } catch (Exception $e) {
            echo "<script>show('Error Update','error');</script>";
        }
        $db->close();
    }
    ?>
</body>
</html>
