<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <script src="js/bootstrap.min.js" ></script>
    <title>Cuenta</title>
</head>
<body>

    <h1>Cuentas Creadas</h1>

    <table class="table" >
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Opcion1</th>
        <th scope="col">Opcion2</th>
       
        </tr>
    </thead>
    <tbody>
        <?php

            if (isset($_REQUEST['op1'])) {
                $op1= "True";
                
            }else{
                $op1= "False";
            }
            if (isset($_REQUEST['op2'])) {
                $op2= "True";
            }else{
                $op2= "False";
            }
            

        
            if(isset($_GET["firtsname"])){
                echo "
                <tr>
                    <th scope=row>1</th>
                    <td>$_GET[firtsname]</td>
                    <td>$_GET[email]</td>
                    <td>$_GET[pasword]</td>
                    <td>$_GET[phone]</td>
                    <td>$op1</td>
                    <td>$op2</td>
                </tr>
                ";
            }
        ?>
    </tbody>
    </table>
    
</body>
</html>