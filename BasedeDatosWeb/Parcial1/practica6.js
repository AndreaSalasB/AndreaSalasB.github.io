var ocultar = false;

function mostrar_texto(){
    if(!ocultar){
        document.getElementById("texto").innerHTML = "<p>lorem</p>"
        ocultar = true;
        document.getElementById("mostrar").innerHTML = "Ocultar"
    } else {
        document.getElementById("texto").innerHTML = ""
        ocultar = false;
        document.getElementById("mostrar").innerHTML = "Mostrar"
    }
}

function lanzar_dado(){
    var numero = Math.floor(Math.random() * 6) + 1;
    document.getElementById("imagen_dado").innerHTML = "<img src='dados/dado" + numero + ".png' width='100px'>"
}