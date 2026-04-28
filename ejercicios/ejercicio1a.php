<?php

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

?>