<?php

$response = array(); // array for JSON response
require_once '../config.php';// include db connect class

    $result = $pdo->query("SELECT * FROM cliente");

    $response["clientes"] = array();
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $client = array();
        $client["idcli"]    = $row["idcli"];
        $client["nombre"]   = $row["nombre"];
        $client["apellido"] = $row["apellido"];
        $client["correo"]   = $row["apellido"];
        $client["telefono"] = $row["telefono"];
        $client["estado"]   = $row["estado"];

        array_push($response["clientes"], $client);
    }

    echo json_encode($response);

?>