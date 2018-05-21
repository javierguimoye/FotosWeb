<?php

$response = array(); // array for JSON response
require_once '../config.php';// include db connect class

$result = $pdo->query("SELECT * FROM direccion");

$response["direccion"] = array();
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $client = array();
    $client["iddir"]        = $row["iddir"];
    $client["nombre"]       = $row["nombre"];
    $client["lat"]          = $row["lat"];
    $client["lon"]          = $row["lon"];
    $client["descripcion"]  = $row["descripcion"];
    $client["obs"]          = $row["obs"];
    array_push($response["direccion"], $client);
}

echo json_encode($response);

?>