<?php include 'includes/header.php';

// while, como cuando recorres una los datos de una bd
$i = 0;
while($i < 10):
    echo $i . '<br>';
    $i++; //incrementar valor;
endwhile;

    echo '<br>';

// do while, ejecuta y luego evalua
$i = 0;

do{
    echo $i . '<br>';
    
    $i++; //incrementar valor;
} while($i < 10);
    echo '<br>';


//for loop
// 3 imprimir Fizz
// 5 imprimir Buzz
// 3 y 5 imprimir FizzBuzz

// for($i = 1; $i<100; $i++):
//     if($i % 3 === 0 && $i % 5 === 0  ){
//         echo $i . "- FizzBuzz <br/>";

//     } else if($i % 3 === 0){ //elseif sin llaves
//         echo $i . "- Fizz <br/>";
//     } else if($i % 5 === 0){
//         echo $i . "- Buzz <br/>";
//     } else {
//         echo $i . '<br/>';
//     }
//     //endif sin llaves
// endfor;

// for each loop 
// recorre arreglo
$clientes = array('pedro','juana','laura','agustina','luciana');
foreach ($clientes as $cliente) {

    echo $cliente . '<br/>' ;

}

$cliente = [
    'nombre' => 'pablo',
    'apellido' => 'martinez',
    'paquete' => 'basico',
    'saldo' => 200
];

foreach($cliente as $key => $valor):
    echo $key .' - ' . $valor . '<br/>';
endforeach;

// medir extension de un arreglo 
// echo count($clientes);  
// echo sizeof($clientes);
include 'includes/footer.php';



