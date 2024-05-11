<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/barra.css" type="text/css" media="all">
</head>
<body>
    <?php
        $servidor="localhost";
        $usuario="root";
        $clave="";
        $baseDeDatos="Tarea_2";
        $enlace= mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
    ?>
    <ul id="barra">
        <div class="contenedor-botones">
            <li><a href="index.php" class="button" id="menub">
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg>
                </div>
            <span>Menú</span></a>
            </li>
            <li><a href="html.html" class="button" id="htmlb"><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>nada</span></a></li>
            <li><a href="css.html" class="button" id="cssb"><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>nada</span></a></li>
            <li><a href="js.html" class="button" id="jsb"><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>nada</span></a></li>
            <li><a href="python.html" class="button" id="pyb"><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>nada</span></a></li>
            <li><a href="hola.php" class="button" id="cb"><div class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
            </svg></div><span>Hola.php</span></a></li>
        </div>
    </ul>

    <form action="#" name="Tarea_2" method="post">
        <input type="number" name="rut" placeholder="rut">
        <input type="number" name="numero_habitacion" placeholder="numero habitacion">
        <input type="date" name="chek_in" placeholder="chek in">
        <input type="date" name="chek_out" placeholder="chek out">

        <input type="submit" name="aceptar" placeholder="aceptar">

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