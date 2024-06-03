<?php include 'includes/header.php';

$clientes = [];
$clientes1 = array();
$clientes2 = array('pablo', 'juan', 'pedro');
$cliente4 = [
    'nombre' => 'Juan',
    'saldo' => 200
];
//empty revisar si un arreglo esta vacio 
var_dump( empty($clientes) );
var_dump( empty($clientes1) );
var_dump( empty($clientes2) );

//isset - revisa si un arreglo esta creado o una propieda esta definida
echo '<br>';
var_dump( isset($clientes) );
var_dump( isset($clientes1) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) ); //false
// revisar si existe propiedad con Isset
echo '<br>';
var_dump(isset($cliente4['nombre']));
var_dump(isset($cliente4['codigo']));


include 'includes/footer.php';