<?php include 'includes/header.php';

//accedes a ellos por medio de una propiedad
$cliente = [
    'nombre'=> 'juan',
    'saldo'=> 200,
    'informacion'=>[
        'tipo'=> 'premiun',
        'disponible'=> '100',
    ],
];

// accediendo a la propiedad nombre 
echo "<pre>";
var_dump($clientes['nombre']);
"</pre>";

echo '<br>';
//accediendo al array dentro del array
echo "<pre>";
var_dump($clientes['informacion']['tipo']);
"</pre>";
echo '<br>';
// o 

echo $clientes['informacion']['tipo'];
echo '<br>';
echo $clientes['informacion']['disponible'];

//agregar mas propiedades al arreglo

$cliente['codigo'] = 123456789;

echo "<pre>";
var_dump($cliente);
"</pre>";

include 'includes/footer.php';