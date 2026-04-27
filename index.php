<?php
echo "<h1>¡Hola Dario, Apache está leyendo mi carpeta correctamente!</h1>";

function semaforo_a($color){
    if ($color == "rojo") {
        return "frene";
    }elseif ($color == "amarillo") {
        return "precaución";
    }elseif ($color == "verde") {
        return "avance";
    }else {
        return "estado desconocido";
    }
}
$colorDesdeGet = $_GET['color'];
$semaforo = semaforo_a($colorDesdeGet);

echo "<h2> El semaforo indica que $semaforo </h2>";

?>
