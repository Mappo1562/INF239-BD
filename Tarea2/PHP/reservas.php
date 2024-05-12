<?php
    include "funciones.php";
    $enlace=init();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="../css/bar.css" type="text/css" media="all">
    <style>

.respuesta{
    margin: 30px; 
}

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

.f{
    width: 400px;
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
    

    <div class='f'>
        <form>
            <h3 style="margin:50px 20px 30px ;">Por favor seleccione una opcion:</h3>
            <input type="submit" name="consultar" placeholder="consultar" value="consultar habitacion">
            <input type="submit" name="crear" placeholder="crear" value="crear reserva">
            <input type="submit" name="modificar" placeholder="modificar" value="modificar reserva">
            <input type="submit" name="eliminar" placeholder="eliminar" value="eliminar reserva">
        </form>
    </div>



    <?php
        if(isset($_GET["consultar"])){
            echo"
            <div class='formulario'>
                <form action='#' name='Tarea_2' method='post'>
                    <input type='number' name='numero_habitacion' placeholder='numero habitacion' class='dato'><br>
                    <input type='submit' name='buscar' placeholder='buscar' value='buscar'>
                </form>
            </div>";
            consultar();
        }


        if(isset($_GET["crear"])){
            echo"
            <div class='formulario'>
                <form action='#' name='Tarea_2' method='post'>
                    <input type='number' name='rut' placeholder='rut' class='dato'><br>
                    <input type='number' name='numero_habitacion' placeholder='numero habitacion' class='dato'><br>
                    <input type='date' name='chek_in' placeholder='chek in' class='dato'><br>
                    <input type='date' name='chek_out' placeholder='chek out' class='dato'><br>
        
                    <input type='submit' name='aceptar' placeholder='aceptar'>
                </form>
            </div>";
            crear();
        }
        


        if(isset($_GET["modificar"])){
            echo"
            <div class='formulario'>
                <form action='#' name='Tarea_2' method='post'>
                    <input type='number' name='id' placeholder='id' class='dato'><br>
                    <input type='submit' name='buscar' placeholder='buscar' value='buscar'>
                </form>
            </div>";
            if(isset($_POST["buscar"])){
                $id=$_POST["id"];
                print($id);
                $consulta="SELECT rut_huesped, numero_habitacion, f_chek_in, f_chek_out FROM reserva WHERE ID_Reserva = '$id'";
                $resultado=mysqli_query($enlace,$consulta);
        
                // Verificar si se encontró el registro
                if(mysqli_num_rows($resultado) > 0){

                    // Mostrar el formulario de edición con los datos del registro
                    echo "
                    <div class='formulario'>
                    <form action='#' name='Tarea_2' method='post'>
                        <input type='number' name='rut' placeholder='rut' class='dato'><br>
                        <input type='number' name='numero_habitacion' placeholder='numero habitacion' class='dato'><br>
                        <input type='date' name='chek_in' placeholder='chek in' class='dato'><br>
                        <input type='date' name='chek_out' placeholder='chek out' class='dato'><br>
            
                        <input type='submit' name='modificar_registro' value='Modificar'>
                    </form>
                    </div>";
                
                    if(isset($_POST["modificar_registro"])){
                        print($id);
                        $rut_huesped = $_POST["rut"];
                        $numero_habitacion = $_POST["numero_habitacion"];
                        $check_in = $_POST["chek_in"];
                        $check_out = $_POST["chek_out"];
                    
                    
                        // Consulta SQL para actualizar el registro
                        $actualizar = "UPDATE reserva SET rut_huesped='$rut_huesped', numero_habitacion='$numero_habitacion', f_chek_in='$check_in', f_chek_out='$check_out' WHERE ID_Reserva='$id'";
                    
                        if(mysqli_query($enlace, $actualizar)){
                            echo "<div class='respuesta'><h3>Registro modificado exitosamente.</h3></div>";
                        } 
                        else {
                            echo "<div class='respuesta'><h3>Error al modificar el registro.</h3></div>";
                        }
                    }
                    else{print(":(");}
                }
                else {
                    echo "No se encontró ningún registro con el ID proporcionado.";
                }
            }
        
        }
    ?>
</body>
</html>