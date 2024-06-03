<?php include 'includes/header.php';


$autenticado = false;
$admin = false;

if($autenticado && $admin){
    echo "usuario autenticado correctamente";
} else {
    echo "usuario no autenticado. Inicia sesion";

}


// if anidados 
$cliente = [
    'nombre' => 'pablo',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'regular'
    ]

];
echo '<br>';
if( !empty ($cliente) ){
    echo 'el arreglo de cliente NO esta vacio';
    if($cliente['saldo'] > 0){
echo '<br>';
        
        echo 'el saldo del cliente esta disponible';
    }else{
        echo 'no tiene saldo';
    }
}else{
    echo 'el arreglo de cliente esta vacio';

}

echo '<br>';
echo '<br>';
if($cliente['saldo']> 0){
    echo 'el cliente tiene saldo';
} else if ($cliente['informacion']['tipo'] === 'premium'){
    echo 'el cliente es premium';
    // echo '<br>';
} else {
    echo 'no hay cliente definido o no tiene saldo o no es premium';
}

echo '<br>';
echo '<br>';

$tecnologia = 'javascript';
switch($tecnologia){
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;

    default:
        echo 'algun lenguaje que no se que es';
        break;
}

include 'includes/footer.php';