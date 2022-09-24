<?php

//Con el print_r($_POST); muestras todo lo que te llega por post del formulario
print_r($_POST);

echo '<br>';

/* en este caso llegaría así Array ( [numero1] => 1 [numero2] => 1 )
numero1 y numero2 es el name que le pusiste al input ej.
    <input type="number" name="numero1" placeholder="Ingresa el #1"> <br>
*/

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
echo "mi primer numero es: ". $_POST['numero1'] .'<br>';
echo "mi segundo número es: $numero2";


//Ejercicio 1 haz la suma de los dos numeros aquí ... e imprimelos


//Ejercicio 2 mostrar el resultado de la división de numero1 entre numero 2
// OJO SI EL NUMERO2 ES 0 Mostrar una validación que el numero2 no puede ser 0