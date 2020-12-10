<?php
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "excursions");

$id = $_REQUEST['ruta'];
//$id = 1;
    $consulta = $conn->prepare("SELECT c.nom , c.cp , c.poblacio from ciutats c inner join ruta r on c.idRuta = $id and r.id = $id");
    $consulta -> execute();
    $resultat = $consulta->get_result();
    $outp = $resultat->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>