<?php

function semaforo_b($color){

    return $color == "rojo" ? "FRENE" : ($color == "amarillo" ? "PRECAUCION" : ($color == "verde" ? "AVANCE": "ESTADO DESCONOCIDO"));
}
?>