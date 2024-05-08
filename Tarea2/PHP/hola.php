<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo!</h1>
    <?php
    #comentario
    print("hola mundo pro\nbrijidooooooo"); #no sirve \n? lol
    $nombre=1;
    $edad="pepe";
    echo"<h1>Hola ".$nombre." tu edad es ".$edad."</h1>"; #si se mezcla con html recordar cerrar
    $nombre="pepe";
    $edad=1;
    echo"Hola ".$nombre." tu edad es ".$edad."";

    #get es una variable que ingresa por el url ej index.php?altura=5
    #if es como c++
    if (isset($_GET["altura"]))
        print ("tu altura es: ".$_GET["altura"]);
    else
        print("no ingresaste altura mamahuevo :v");

    print(calcularanionacimiento(5));
    #funcion
    function calcularanionacimiento($edad){
        return 2024- $edad;
    }
    ?>
</body>
</html>