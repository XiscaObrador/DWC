<?php
$conn = new mysqli ("localhost","root","","excursions");
$select = $conn->prepare("SELECT nom from  ruta");
$select -> execute(); // executa una consulta preparada (es select) // 
$resultat = $select -> get_result(); // mostra es resultat des select //

while($row = mysqli_fetch_array($resultat)){
    echo "<option value='".$row['nom']."'>".$row['nom']."</option>";
}

?>