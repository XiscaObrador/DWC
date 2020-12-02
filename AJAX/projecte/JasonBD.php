<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost","root","","excursions");
$select = $conn -> prepare("SELECT * from ruta ");
$select -> execute();
$resultat = $select->get_result();
$mostrar = $resultat->fetch_all(MYSQLI_ASSOC);

echo json_encode($mostrar);
