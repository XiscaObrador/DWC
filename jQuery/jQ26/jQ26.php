<?php
$nom = "";
$edat = "";
$ciutat_ = $_REQUEST['ciutat'];

if($ciutat_ == 'Manacor'){
    
    $nom = "Joan";
    $edat= "51";
    $ciutat='Manacor';
    
    echo $nom . $edat .$ciutat;
}

?>