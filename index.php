<?php
include_once'./ejercicios/ejercicio1a.php';
include_once'./ejercicios/ejercicio1b.php';
include_once'./ejercicios/ejercicio1c.php';
include_once'./ejercicios/ejercicio2a.php';
include_once'./ejercicios/ejercicio2b.php';
include_once'./ejercicios/ejercicio3.php';
include_once'./ejercicios/ejercicio4.php';

echo "<h1>Ejercicios Trabajo Prćtico</h1>";

$valorA = $_GET['a'];
$valorB = $_GET['b'];

echo "<h2>Ejercicio 4: Incrementar variable por referencia</h2>";
$variable = $valorA;
echo "<h3>Valor inicial: $variable</h3>";
incrementar($variable);
echo "<h3>Valor después de incrementar: $variable</h3>";

echo "<h2>Ejercicio 3: Concatener texto</h2>";
$textoConcatenado = concatenarTexto($valorA,$valorB);
echo "<h3>Texto resultado es: $textoConcatenado</h3>";

echo "<h2>Ejercicio 2: Binomio cuadrado perfecto</h2>";


$resultadoBinomioCuadradoPerfecto = binomioCuadradoPerfecto_a($valorA,$valorB);
echo "<h3> La calculadora A indica: $resultadoBinomioCuadradoPerfecto </h3>";
$resultadoBinomioCuadradoPerfecto = binomioCuadradoPerfecto_b($valorA,$valorB);
echo "<h3> La calculadora B indica: $resultadoBinomioCuadradoPerfecto </h3>";



echo "<h2>Ejercicio 1: Semaforo</h2>";

$colorDesdeGet = $_GET['color'];
$semaforoA = semaforo_a($colorDesdeGet);
echo "<h3> El semaforo A indica: $semaforoA </h3>";

$semaforoB = semaforo_b($colorDesdeGet);
echo "<h3> El semaforo B indica: $semaforoB </h3>";

$semaforoC = semaforo_c($colorDesdeGet);
echo "<h3> El semaforo C indica: $semaforoC </h3>";


?>
