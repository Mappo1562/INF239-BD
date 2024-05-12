<?php
    function init(){
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="Tarea_2";
    $enlace= mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
    return $enlace;
    }

    function consultar($enlace){
        $dia = date("d");
        $mes = date("m");
        $anio = date("20y");
        if(isset($_POST["buscar"])){
            $flag=true;
            $f=true;
            $numero=$_POST["numero_habitacion"];
            $consulta="SELECT numero_habitacion, f_chek_in, f_chek_out FROM reserva";
            $resultado=mysqli_query($enlace,$consulta);
            if ($resultado){
                while ($fila = mysqli_fetch_array($resultado)){
                    $numero_habitacion=$fila['numero_habitacion'];
                    if ($numero_habitacion== $numero){
                        $flag=false;
                        $in=$fila['f_chek_in'];
                        $out=$fila['f_chek_out'];
                        $partes_fecha_in = explode("-", $in);
                        $partes_fecha_out = explode("-", $out);
                        if ($anio>=$partes_fecha_in[0] and $anio<=$partes_fecha_out[0]){
                            if ($mes>=($partes_fecha_in[1]%12) and ($mes<=$partes_fecha_out[1]%12)){
                                if ($dia>=($partes_fecha_in[2]%31) and $dia<=($partes_fecha_out[2]%31)){
                                    echo"<div class='respuesta'><h3><br>habitacion numero ".$numero." ya esta utilizada</h3></div>";
                                    $f=false;
                                }
                            }
                        }
                    }
                }
                if ($flag or $f){
                    echo"<div class='respuesta'><h3><br>habitacion numero ".$numero." esta actualmente disponible</h3></div>";
                }
            }
        }
    }

    function crear($enlace){
        if(isset($_POST["aceptar"])){
            $rut_huesped=$_POST["rut"];
            $numero_habitacion=$_POST["numero_habitacion"];
            $f1=$_POST["chek_in"];
            $f2=$_POST["chek_out"];

            $insert = "INSERT INTO reserva VALUES ('','$rut_huesped','$numero_habitacion','$f1','$f2','')";
            #$insert = "INSERT INTO **nombre tabla** VALUES (**valores de la tabla separados por , los vacios van '')";

            if(mysqli_query($enlace,$insert)){
                $id_insertado = mysqli_insert_id($enlace);
                echo"<div class='respuesta'><h3><br>Agregado exitosamente. ID: $id_insertado</h3></div>";
            } 
            else {
                echo "<div class='respuesta'><h3><br>Error al agregar el registro</h3></div>";
            }
        }
    }

    function buscar($id,$enlace){
        if(isset($_POST["buscar"])){
            $consulta="SELECT rut_huesped, numero_habitacion, f_chek_in, f_chek_out FROM reserva WHERE ID_Reserva = '$id'";
            $resultado=mysqli_query($enlace,$consulta);
            if(mysqli_num_rows($resultado) > 0){
                return true;
            }
            else {
                echo "<div class='respuesta'><h3><br>No se encontró ningún registro con el ID proporcionado.</h3></div>";
                return false;
            }
        }
    }
    function modificar($id,$enlace){
        if(isset($_POST["modificar_registro"])){
            $rut_huesped = $_POST["rut"];
            $numero_habitacion = $_POST["numero_habitacion"];
            $check_in = $_POST["chek_in"];
            $check_out = $_POST["chek_out"];
            $calificacion = $_POST["calificacion"];
            $actualizar = "UPDATE reserva SET rut_huesped='$rut_huesped', numero_habitacion='$numero_habitacion', f_chek_in='$check_in', f_chek_out='$check_out', calificacion='$calificacion' WHERE ID_Reserva='$id'";
            if(mysqli_query($enlace, $actualizar)){
                echo "<div class='respuesta'><h3>Registro modificado exitosamente.</h3></div>";
            } 
            else {
                echo "<div class='respuesta'><h3>Error al modificar el registro.</h3></div>";
            }
        }
    }


    function calificar($enlace){
        if(isset($_POST["calificar"])){
            $id = $_POST["id_a_modificar"];
            $calificacion = $_POST["calificacion"];
            $actualizar = "UPDATE reserva SET calificacion='$calificacion' WHERE ID_Reserva='$id'";
            if(mysqli_query($enlace, $actualizar)){
                echo "<div class='respuesta'><h3>calificacion ingresada exitosamente.</h3></div>";
            } 
            else {
                echo "<div class='respuesta'><h3>Error al ingresar calificacion.</h3></div>";
            } 
        }

    }

    function eliminar($enlace){
        if(isset($_POST["borrar"])){
            $id = $_POST["id_a_borrar"];
            $sql = "DELETE FROM reserva WHERE ID_Reserva = $id";
            if(mysqli_query($enlace, $sql)){
                echo "<div class='respuesta'><h3>reserva eliminada exitosamente.</h3></div>";
            } 
            else {
                echo "<div class='respuesta'><h3>Error al eliminar la reserva.</h3></div>";
            } 
        }
    }

    function ver_tours($enlace){
        $consulta="SELECT * FROM tour";
        $resultado=mysqli_query($enlace,$consulta);
        if ($resultado){
            while($fila = mysqli_fetch_array($resultado)){
                $lugar=$fila['lugar'];
                $transporte=$fila['medio_transporte'];
                $fecha=$fila['fecha'];
                $precio=$fila['precio_tour'];
                echo'<div class="tour"><h2 class="title">'.$lugar.'</h2><div class="valores">';
                if ($lugar=="Demacia")
                    echo '<img src="../static/Demacia.png" class="img-normalizada">';
                if ($lugar=="Dust_II")
                    echo '<img src="../static/Dust_II.png" class="img-normalizada">';
                if ($lugar=="Namek")
                    echo '<img src="../static/Namek.png" class="img-normalizada">';
                echo '<p class="info">opcion: '.$fila["ID_tour"].'<br><br>fecha: '.$fecha.'<br><br>medio de transporte: '.$transporte.'<br><br>precio: '.$precio.'</p></div></div>';
            }
        }
    }

    function reservar_tour($enlace){
        if(isset($_POST["reservar"])){
            $f1=$_POST["numero_reserva"];
            $f2=$_POST["opcion"];
            $consulta="SELECT precio_tour FROM tour WHERE ID_tour = '$f2'";
            $resultado=mysqli_query($enlace,$consulta);
            if ($resultado){
                while ($fila = mysqli_fetch_array($resultado)){
                    $precio=$fila['precio_tour'];
                }
            }

            $insert = "INSERT INTO reserva_tour VALUES ('$f1','$f2','$precio')";
            #$insert = "INSERT INTO **nombre tabla** VALUES (**valores de la tabla separados por , los vacios van '')";

            if(mysqli_query($enlace,$insert)){
                echo"<div class='respuesta'><h3><br>Reservado exitosamente.</h3></div>";
            }
            else {
                echo "<div class='respuesta'><h3><br>Error al reservar</h3></div>";
            }
        }
    }

    function eliminar_tour($enlace){
        if(isset($_POST["eliminar"])){
            $f1=$_POST["numero_reserva"];
            $f2=$_POST["opcion"];
            $sql = "DELETE FROM reserva_tour WHERE (ID_reserva = $f1 AND ID_tour = $f2)";
            if(mysqli_query($enlace, $sql)){
                echo "<div class='respuesta'><h3>reserva eliminada exitosamente.</h3></div>";
            } 
            else {
                echo "<div class='respuesta'><h3>Error al eliminar la reserva.</h3></div>";
            } 
        }
    }
?>
