<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "excursions");

$id = (int)$_REQUEST['ruta'];
//$id = 1;
var_dump($id);
    $consulta = $conn->prepare("SELECT c.nom from ciutats c inner join ruta r on c.idRuta = $id and r.id = $id");
    $consulta -> execute();
    $resultat = $consulta->get_result();
    $outp = $resultat->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);

?>