<?php include 'includes/header.php';


$carrito = ['tablet','television', 'pc'];
// //util para ver contenidos de un array
// $carrito = ['tablet','television', 'pc'];
// echo "<pre>";
// var_dump($carrito);
// "</pre>";

//acceder a un elemento del array
// echo $carrito[0];

echo $carrito[2];

//a;adir un elemendo en la posicion 3
$carrito[3] = 'Nuevo producto';

//util para ver contenidos de un array
echo "<pre>";
var_dump($carrito);
"</pre>";


//a;adir elemento nuevo al final'
array_push($carrito, 'audifonos');

echo "<pre>";
var_dump($carrito);
"</pre>";

//a;adir elemento nuevo al inicio'
array_unshift($carrito, 'notebook');
echo "<pre>";
var_dump($carrito);
"</pre>";

//otra forma de crear arreglos
$clientes = array('cliente 1','cliente 0','cliente 4', 'cliente 2' );
echo "<pre>";
var_dump($clientes);
"</pre>";

include 'includes/footer.php';


