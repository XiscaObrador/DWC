<?php

$ruta = $_REQUEST["ruta"];

$conn = new mysqli ("localhost","root","","excursions");
$select = $conn->prepare("SELECT * FROM ruta WHERE nom = '$ruta'");
$select -> execute(); // executa una consulta preparada (es select) // 
$resultat = $select -> get_result(); // mostra es resultat des select //

echo "<table border='1'>
<tr>
<th>NOM</th>
<th>INICI</th>
<th>FI</th>
<th>DIFICULTAT</th>
<th>TIPUS</th>
<th>KM</th>
</tr>";

while($row = mysqli_fetch_array($resultat)) {
    echo "<tr>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['inici'] . "</td>";
    echo "<td>" . $row['fi'] . "</td>";
    echo "<td>" . $row['dificultat'] . "</td>";
    echo "<td>" . $row['tipus'] . "</td>";
    echo "<td>" . $row['km'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>