<?php
    function init(){
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $baseDeDatos="Tarea_2";
    $enlace= mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);
    return $enlace;
    }

    function consultar(){
        $enlace=init();
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

    function crear(){
        $enlace=init();
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
?>