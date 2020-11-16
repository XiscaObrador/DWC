<?php

$num_1 = intval($_REQUEST['num_1']);
$num_2 = intval($_REQUEST['num_2']);
$op = $_REQUEST['op'];

$suma = $num_1+$num_2;
$resta = $num_1-$num_2;
$mul = $num_1*$num_2;
$div = $num_1/$num_2;

if($op == "Suma"){
    echo $suma;
}
if($op == 'Resta'){
    echo $resta;
}
if($op == 'Divisio'){
    echo $div;
}
if($op == 'Multiplicacio'){
    echo $mul;
}