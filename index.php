<?php
echo "<h1>¡Hola Dario, Apache está leyendo mi carpeta correctamente!</h1>";

function semaforo_a($color){
    if ($color = "rojo") {
        "Frene";
    }elseif ($color = "amarillo") {
        "Precaución";
    }elseif ($color = "verde") {
        "Avance";
    }else {
        "estado desconocido";
    }
}
$colorDesdeGet = $_GET['color'];
$semaforo = semaforo_a($colorDesdeGet);

echo "<h2> El semaforo indica que $semaforo </h2>";

?>
