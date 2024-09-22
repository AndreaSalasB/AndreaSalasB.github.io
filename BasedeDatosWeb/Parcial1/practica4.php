<?php

    $aciertos = 0;
    $pregunta1 = $_POST["pregunta1"];
    $pregunta2 = $_POST["pregunta2"];
    $pregunta3 = $_POST["pregunta3"];
    $pregunta4 = $_POST["pregunta4"];
    $pregunta5 = $_POST["pregunta5"];
    $pregunta6 = $_POST["pregunta6"];
    $pregunta7 = $_POST["pregunta7"];
    $pregunta8 = $_POST["pregunta8"];
    $pregunta9 = $_POST["pregunta9"];
    $pregunta10 = $_POST["pregunta10"];


    echo "<h3>1. ¿Qué animal es Cinnamoroll? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta1." ---- Correcta = Un perro</h5>";
    if($pregunta1 == "Un perro"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    //------FIN de la pregunta 1 ------------------


    echo "<h3>2. ¿Cuál de estos personajes NO es un perro? </h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta2." ---- Correcta = Badtz Maru</h5>";
    if($pregunta2 == "Badtz Maru"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    //Fin de la pregunta 2 -----------------------------

    echo "<h3>3. ¿Quiénes son parte de la pandilla de Cinnamoroll? (Selecciona 2)</h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta3)." ---- Correcta = Espresso, Mocha</h5>";
    $p3_respuestas_correctas = 0;

    if(count($pregunta3) == 2){
        for($i=0; $i<count($pregunta3); $i++){
            if($pregunta3[$i] == "Espresso" || $pregunta3[$i] == "Mocha"){
                $p3_respuestas_correctas ++;
            }
        }
        if($p3_respuestas_correctas == 2){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }
    } else {
        echo "<img src='incorrecta.png' width='50px'><hr>";
    }

    

        echo "<h3>4. ¿Qué figura lleva Kuromi en su gorro?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta4." ---- Correcta = Una calavera</h5>";
        if($pregunta4 =="Una calavera"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }
    //------FIN de la pregunta 4 ------------------



        echo "<h3>5. ¿De qué color es el gorro de Pompompurin?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta5." ---- Correcta = Café </h5>";
        if($pregunta5 == "Café"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";

        }



    
   
    echo "<h3>6. ¿Quién es el mejor amigo de My Melody?</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta6." ---- Correcta = My Sweet Piano</h5>";
    if($pregunta6 == "My Sweet Piano"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
   

   
    echo "<h3>7. “¡Hello, this is __________!”</h3>";
    echo "<h5>Repuesta seleccionada ".$pregunta7." ---- Correcta = kitty</h5>";
    if(strtoupper($pregunta7) == "KITTY"){
        $aciertos++;
        echo "<img src='correcta.jpg' width='50px'><hr>";
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
 

   
    echo "<h3>8. ¿Qué suele llevar My Melody en la cabeza? (Selecciona 2)</h3>";
    echo "<h5>Repuesta seleccionada ".implode(",", $pregunta8)." ---- Correcta = Un moño, Una flor</h5><br>";
    $p8 = 0;

    if(count($pregunta8) == 2){
        for($i=0; $i<count($pregunta8); $i++){
            if($pregunta8[$i] == "Un moño" || $pregunta8[$i] == "Una flor"){
                $p8 ++;
            }
        }
        if($p8 == 2){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }
    } else {
        echo "<img src='incorrecta.jpg' width='50px'><hr>";
    }
    



        echo "<h3>9. ¿Qué fruta es la favorita de Hello Kitty?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta9." ---- Correcta = Manzana</h5>";
        if($pregunta9 =="Manzana"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }




        echo "<h3>10. Badtz Maru es...?</h3>";
        echo "<h5>Repuesta seleccionada ".$pregunta10." ---- Correcta = Un pinguino</h5>";
        if($pregunta10 == "Un pinguino"){
            $aciertos++;
            echo "<img src='correcta.jpg' width='50px'><hr>";
        } else {
            echo "<img src='incorrecta.jpg' width='50px'><hr>";
        }


    echo "CALIFICACIÓN FINAl = " . ($aciertos*10) . "%";

?>