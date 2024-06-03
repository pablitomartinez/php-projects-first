<?php include 'includes/header.php';

$carrito = ['tablet','computadora','television'];

// como buscar elementos en un arreglo 
var_dump(in_array('tablet', $carrito));

// ordenar elementos de un arreglo 
$numeros = array(1,2,3,4,1,3);
sort($numeros); //de menor a mayor
rsort($numeros); //de mayor a menor

echo '<pre>'; 
var_dump($numeros);
echo '</pre>'; 


//ordenar arreglos asociativos
$clientes = array(
    'tipo' => 'premium',
    'nombre' => 'juan',
    'saldo' => 200
);

asort($clientes); //primero muestra los numeros y luego los valores por orden alfabetico
arsort($clientes); //primero muestra las letras y despues los numeros por orden alfabetico
ksort($clientes); //ordena las propiedades por orden alfabetico
krsort($clientes); //ordena las propiedades por orden alfabetico pero al reves


echo '<pre>'; 
var_dump($clientes);
echo '</pre>'; 




include 'includes/footer.php';