<?php

$jugador1 = $_POST["jugador1"];
$jugador2 = $_POST["jugador2"];

$gato = $_POST["gato"];

//Validar ¿Quién es el ganador?

if($gato[0] == "X" && $gato[1] == "X" && $gato[2] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[3] == "X" && $gato[4] == "X" && $gato[5] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[6] == "X" && $gato[7] == "X" && $gato[8] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[0] == "X" && $gato[3] == "X" && $gato[6] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[1] == "X" && $gato[4] == "X" && $gato[7] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[2] == "X" && $gato[5] == "X" && $gato[8] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[0] == "X" && $gato[4] == "X" && $gato[8] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

if($gato[2] == "X" && $gato[4] == "X" && $gato[6] == "X"){
    echo "<h1>Ganador ".$jugador1." X </h1>";
    return;
}

// Combinaciones ganadoras para "O"
if($gato[0] == "O" && $gato[1] == "O" && $gato[2] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[3] == "O" && $gato[4] == "O" && $gato[5] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[6] == "O" && $gato[7] == "O" && $gato[8] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[0] == "O" && $gato[3] == "O" && $gato[6] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[1] == "O" && $gato[4] == "O" && $gato[7] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[2] == "O" && $gato[5] == "O" && $gato[8] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[0] == "O" && $gato[4] == "O" && $gato[8] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}

if($gato[2] == "O" && $gato[4] == "O" && $gato[6] == "O"){
    echo "<h1>Ganador ".$jugador2." O </h1>";
    return;
}
//Validar todos los casos de las líneas
echo "<h1>El juego continúa</h1>";
?>