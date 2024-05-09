<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="js/bootstrap.min.js" ></script>
    <title>.: FORMS :.</title>
</head>
<body>
    <h1>Formulario Alumno</h1>

    <form action="send.php" method="get">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Ingrese su Nombre" aria-label="First name" name="firtsname" required autocomplete="off" >
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Ingrese su Apellido" aria-label="Last name" name="lastname" required utocomplete="off">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input type="date" class="form-control" placeholder="Ingrese su fecha de Nacimiento" aria-label="Date born" name="dateborn" required utocomplete="off">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Ingrese su Carrera" aria-label="" name="career" required utocomplete="off">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Ingrese su celular" aria-label="Date born" name="phone" required utocomplete="off">
        </div>
        <div class="col">
            <input type="email" class="form-control" placeholder="Imgrese su Email" aria-label="" name="email" required utocomplete="off">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <textarea  name="address" class="form-control" placeholder="Ingrese su direccion ....."  required utocomplete="off" ></textarea>
        </div>
        
    </div>

    <div class="row">
        <div class="col">
            <input type="submit" class="btn btn-success button">
        </div>
    </div>

    </form>

</body>
</html>