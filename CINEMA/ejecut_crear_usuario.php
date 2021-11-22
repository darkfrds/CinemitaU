<?php

$JSONData = file_get_contents("php://input");
$dataObject = json_decode($JSONData);

echo $dataObject->nombre;
echo $dataObject->edad;

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Request-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

header('content-type: application/json; charset=utf-8');

   include("conectar.php");

   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $correo=$_POST['correo'];
   $contrasena=$_POST['password'];
   $celular=$_POST['celular'];
   $ciudad=$_POST['ciudad'];

$insertar="INSERT INTO usuario (U_Nombre, U_Apellido, U_Celular, U_Ciudad, U_Correo, U_Password) VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$celular', '$ciudad')";

$query = mysqli_query($conexion,$insertar);

if ($query==true) {

    include("usuario.html");

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetAlert4.js"></script>


    </body>
    </html>

    <?php
}else{

    include("usuario.html")

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetAlert3.js"></script>


    </body>
    </html>

    <?php


}

?>