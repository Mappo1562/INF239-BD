<?php
    include "funciones.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="../css/bar.css" type="text/css" media="all">
    <style>
.formulario{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #e4b17d;
padding: 90px 50px;
border-radius: 5px;
text-align: center;
border: 1px solid rgb(49, 49, 49);
}

input {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px;
    border: none;
}

input[type='submit']{
	background-color: #e06f72;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
    border: 1px solid rgb(49, 49, 49);
    cursor: pointer;
}
    </style>
</head>
<body>
    <ul id="barra">
        <div class="contenedor-botones">
            <li><a href="index.php" class="button">
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </div>
            <span>Menú</span></a>
            </li>
            <li><a href="reservas.php" class="button"><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>reservas</span></a></li>
            <li><a href="tour.php" class="button" ><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>tours</span></a></li>
            <li><a href="chekOut.php" class="button" ><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>Chek Out</span></a></li>
            <li><a href="calificaciones.php" class="button" ><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>calificaciones</span></a></li>
        </div>
    </ul>

    <div class="formulario">
        <form action="#" name="Tarea_2" method="post">
            <input type="number" name="rut" placeholder="rut" class="dato"><br>
            <input type="number" name="numero_habitacion" placeholder="numero habitacion" class="dato"><br>
            <input type="date" name="chek_in" placeholder="chek in" class="dato"><br>
            <input type="date" name="chek_out" placeholder="chek out" class="dato"><br>

            <input type="submit" name="aceptar" placeholder="aceptar">
        </form>
    </div>
    <?php
        if(isset($_POST["aceptar"])){
            $rut_huesped=$_POST["rut"];
            $numero_habitacion=$_POST["numero_habitacion"];
            $f1=$_POST["chek_in"];
            $f2=$_POST["chek_out"];

            $insert = "INSERT INTO reserva VALUES ('','$rut_huesped','$numero_habitacion','$f1','$f2','')";
            #$insert = "INSERT INTO **nombre tabla** VALUES (**valores de la tabla separados por , los vacios van '')";

            $ejecuteInsert = mysqli_query($enlace,$insert);
        }
    ?>
</body>
</html>