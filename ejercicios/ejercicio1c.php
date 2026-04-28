<?php

function semaforo_c($color){
    switch ($color) {
        case 'rojo':
            return "PARE!!"; 
        case 'amarillo':
            return "CUIDADO!!"; 
        case 'verde':
            return "AVANCEE!!" ;
        default:
            return "ESTADO DESCONOCIDO!!!";
    }
}

?>