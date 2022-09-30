<?php


//EJERCICIO 3
/* Cuando entro a esta url http://localhost/pruebaian/datos.php me marca un error
Notice: Undefined index: numero1 in /Applications/MAMP/htdocs/pruebaian/datos.php on line 13

Notice: Undefined index: numero2 in /Applications/MAMP/htdocs/pruebaian/datos.php on line 14

Notice: Undefined index: numero1 in /Applications/MAMP/htdocs/pruebaian/datos.php on line 19

validar que si no hay nada por post regrese un mensaje de 

"Este archivo no puede ser visitado mediante una url"


//EJERCICIO 4

Agregar otro input en index.html que sea Número 3

si el campo #3 es diferente de vacío la suma es numero1+numero3

si el campo #3 es igual a vacío la suma es numero1 + numero2

imprimir la suma


EJERCICIO 5

HAZ dos archivos index-usuario.html y datos-usuario.php
en el index-usuario.html vas a poner 3 campos 

1) "escribe tu nombre"
2) "escribe tu edad"
3) "escribe tu teléfono"

al darle enviar al botón deberá ir al archivo datos-usuario.php y deberás imprimir

"Hola $nombre tu edad es:  $edad, y tu teléfono es: $telefono "





*/


//Con el print_r($_POST); muestras todo lo que te llega por post del formulario
print_r($_POST);

echo '<br>';

/* en este caso llegaría así Array ( [numero1] => 1 [numero2] => 1 )
numero1 y numero2 es el name que le pusiste al input ej.
    <input type="number" name="numero1" placeholder="Ingresa el #1"> <br>
*/

$numero1 = ['numero1'];
$numero2 = ['numero2'];
$numero3 = ['numero3'];
if (!$_POST) {
    print("Este archivo no puede ser visitado mediante una url");
}else{
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];
    #$resultado1 = $numero1+$numero2;
    #echo "mi primer numero es: ". $_POST['numero1'] .'<br>';
    #echo "mi segundo número es: $numero2";
    
    #echo "mi primer numero es: ". $_POST['numero1'] .'<br>';
    #echo "mi segundo número es: $numero2" .'<br>';
    #echo "el resultado de la suma es: $resultado1" .'<br>';
    
    if(isset($_POST['numero3']) && $_POST['numero3']==''){
        $resultado1 = $numero1+$numero2;
        echo "mi primer numero es: ". $_POST['numero1'] .'<br>';
        echo "mi segundo número es: $numero2" .'<br>';
        echo "el resultado de la suma es: $resultado1" .'<br>';
        if($numero2==0) {
            echo "El segundo numero no puede ser 0 para ejecutar la division" ;
        }else{
            $resultado2 = $numero1/$numero2;
            echo "el resultado de la division es: $resultado2";
        }
    }else{
        $resultado3 = $numero1+$numero3;
        echo "mi primer numero es: ". $_POST['numero1'] .'<br>';
        echo "mi segundo número es: $numero3" .'<br>';
        echo "el resultado de la suma es: $resultado3" .'<br>';
        if($numero3==0) {
            echo "El segundo numero no puede ser 0 para ejecutar la division" ;
        }else{
            $resultado4 = $numero1/$numero3;
            echo "el resultado de la division es: $resultado4";
        }
    }
    
}

//Ejercicio 1 haz la suma de los dos numeros aquí ... e imprimelos


//Ejercicio 2 mostrar el resultado de la división de numero1 entre numero 2
// OJO SI EL NUMERO2 ES 0 Mostrar una validación que el numero2 no puede ser 0
