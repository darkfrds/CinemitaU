<?php

$usuario=$_POST['usuario'];
$contrasena=$_POST['password'];

session_start();
$_SESSION['usuario']=$usuario;

include('conectar.php');

$consulta="SELECT*FROM usuario WHERE U_Correo='$usuario' AND U_Password='$contrasena'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas==true){

    include("Index.html");

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetAlert2.js"></script>


    </body>
    </html>
<?php
} if($filas==false){

    ?>
    <?php

    include("login.html")

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetAlert.js"></script>


    </body>
    </html>

    <?php
    }

mysqli_free_result($resultado);
mysqli_close($conexion);

?>
