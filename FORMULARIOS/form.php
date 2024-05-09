<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="es.css">
    <script src="js/bootstrap.min.js" ></script>
    <title>Formularios</title>
</head>
<body > 
    <h1 style="color: white;">CREATE NEW ACCOUNT</h1>
    <div></div>
    <div id=""> </div>
    <form  action="mostra.php" method="get">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Full Name" aria-label="First name" name="firtsname" required autocomplete="off" >
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="email" class="form-control" placeholder="Email" aria-label="" name="email" required utocomplete="off">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" aria-label="" name="pasword" required utocomplete="off">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="password" class="form-control" placeholder="Confirm Password" aria-label="" name="pasword" required utocomplete="off">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Phone Number" aria-label="" name="phone" required utocomplete="off">
            </div>
        </div>
        <br>

        <input type="checkbox" name="op1"  >
        <label style="color: white;" for="">Opcion1</label>
        
        <input type="checkbox" name="op2" >
        <label style="color: white;" for="">Opcion2</label>
        <br>
            <center>
            <input   type="submit" class="btn btn-success button" value="REGISTER">
            </center>




    </form>
    
</body>
</html>