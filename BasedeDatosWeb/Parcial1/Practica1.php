<?php

    $nombre = $_GET["nombre"];
    $apellido = $_GET["apellido"];
    $edad = $_GET["edad"];
    $fecha_de_nacimiento = $_GET["fecha_de_nacimiento"];
    $escuela = $_GET["escuela"];
    
    //obtienen los valores

    if($edad > 18){
        echo "<h1>".$nombre." es mayor de edad</h1>";
    } else {
        echo "<h1>".$nombre." NO es mayor de edad</h1>";
    }
    
    echo "<h2>Nombre: ".$nombre."</h2>";

    echo "<h2> Apellido: ".$apellido."</h2>";

    echo "<h2>Edad: ".$edad."</h2>";

    echo "<h2>Fecha de nacimiento: ".$fecha_de_nacimiento."</h2>";

    echo "<h2>Escuela: ".$escuela."</h2>";

    //Imprimir el valor de esos campos

?>