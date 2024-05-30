<?php include 'includes/header.php';

$nombreCliente = 'pablo martinez';

//cantidad de caracteres, toma espacios en blanco
echo strlen($nombreCliente);
echo '<br>';
var_dump($nombreCliente);

//eliminar espacios blanco
$texto = trim($nombreCliente);
echo $texto;
echo '<br>';

echo strlen($texto);
echo '<br>';

//convertir a mayuscula
echo strtoupper($nombreCliente);

echo '<br>';

//CONVERTIR EN MINUSCULA
echo strtolower($nombreCliente);
echo '<br>';



// para comparar en base de datos conviene pasarlo a minus o mayus 
$email = 'pablo@gmail.com';
$email2 = 'Pablo@gmail.com';

var_dump(strtolower($email) === strtolower($email2));

echo '<br>';


//para remplzar un string
echo str_replace('pablo', 'P', $nombreCliente);
echo '<br>';


//si un string existe o no

echo strpos($nombreCliente, 'martinez');
echo '<br>';

//template string
$tipoCliente = 'premiun';

echo 'El cliente ' . $nombreCliente . ' es de tipo ' . $tipoCliente;
echo '<br>';

//otra forma de template string
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';