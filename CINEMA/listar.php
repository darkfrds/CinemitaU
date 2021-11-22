<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>PELICULAS</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

</head>

<body>

    <header>
    <div class="contenedor">
      <h2 class="logotipo">Cinemita</h2>
      <nav>
        <a href="Index.html" class="activo">Inicio</a>
        <a href="login.html">Iniciar Sesion</a>
        <a href="usuario.html">Registrarse</a>
        <a href="listar.php">Acerca de</a>
        <a href="acerca_de.html">Contacto</a>
      </nav>
    </div>
  </header>

    <div class="content">

        <style type="text/css">

        table, th, td{

            border: 1px solid black;
            border-color: #F31818 ;
            border-collapse: collapse;
            padding: 16px;
            font-size: 1.1em;

        }

        td, th, tr{

            color: #5D2E2E;
            font-family:'Bebas Neue', cursive;

        }

        th{

            font-size: 100%;

        } 

    </style>

    <?php

    
    require("conectar.php");

    $registros=mysqli_query($conexion, "SELECT P_ID,P_Nombre,P_Clasificacion,P_Sala,P_Hora,P_Lugar,P_Genero FROM pelicula") or die("Problemas en el select:".mysqli_error($conexion));
    
    $total=0;
    
    echo"<meta charset=UTF-8>";
    echo "<table bgcolor=#B9B2B1 style=width: 100%;>";
    echo "<thead><tr><th colspan=7>Peliculas registradas en cinemita...</th></tr>";
    echo "<tr>";
    echo "<th> Pelicula ID </th>";
    echo "<th> Nombre de la Pelicula</th>";
    echo "<th> Clasificacion de la Pelicula </th>";
    echo "<th> Pelicula Sala </th>";
    echo "<th> Pelicula Hora </th>";
    echo "<th> Pelicula Lugar </th>";
    echo "<th> Pelicula Genero </th>";
    echo "</tr></thead>";

    while ($arreglo = mysqli_fetch_array($registros)){

        echo "<tbody bgcolor=#B9B2B1 style=width: 100%><tr>";
        
        echo "<td>$arreglo[0]</td>";
        echo "<td>$arreglo[1]</td>";
        echo "<td>$arreglo[2]</td>";
        echo "<td>$arreglo[3]</td>";
        echo "<td>$arreglo[4]</td>";
        echo "<td>$arreglo[5]</td>";
        echo "<td>$arreglo[6]</td>";

        echo "<td><a href='elim_user.php?id=$arreglo[0]'>Reservar</td>";
        echo "<td><a href='act_user.php?id=$arreglo[0]'>Cancelar Reserva</td>";
        echo "</tr></tbody>";
        $total=$total+1;
    }

    echo"<tr>";
    echo"<th colspan=9 align=center>Total Registros: $total</th>";
    echo"</tr>";
    echo"<tr>";
    echo"<td colspan=9 align=center><a href=Index.html class=btn btn-primary role=button>Volver</a></td>";
    echo"</tr>";
    echo"</table>";
    echo"<center><br></center>";

    ?>

    <br><br><center>

    </center>  

    </div>

</body>

</html>