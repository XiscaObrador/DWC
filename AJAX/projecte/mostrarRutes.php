<?php

$conn = new mysqli ("localhost","root","","excursions");
$select = $conn->prepare("SELECT nom from  ruta");
$select -> execute(); // executa una consulta preparada (es select) // 
$resultat = $select -> get_result(); // mostra es resultat des select //

$mostra = array();

while($row = mysqli_fetch_array($resultat)){
    array_push($mostra,$row['nom']);
}

$c = $_REQUEST["c"];
$mostrar = "";

if($c !== ""){
    $c = strtolower($c); //converitim lo pasat de dins es select amb minuscula // 
    $length = strlen($c); // torna sa llongitud de String pasada per html // 
    foreach($mostra as $nomRuta){
        if(stristr($c,substr($nomRuta,0,$length))){ // stric .. mostra sa primera aparicio de $c i retorna tota sa cadena que ho te
            if($mostrar == ""){
                $mostrar = $nomRuta;
            }else{
                $mostrar = ", $nomRuta";  //si no està en blnac es select posam dins sa variable mostrar es nom de sa ruta
            }
        }
    }
}

echo $mostrar === ""? "no suggestion" : $mostrar;
?>