<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelcost_bienes";


$conn = new mysqli($servername, $username, $password, $dbname);




$ciudad = $_POST["ciudad"];
$tipo = $_POST["tipo"];
$telefono = $_POST["telefono"];
$direccion= $_POST["direccion"];
$postal= $_POST["codigo_postal"];
$precio= $_POST["precio"];
$id_inmueble= $_POST["id"];


$sql ="INSERT INTO bienes (id_inmueble,direccion, ciudad, tipo, codigo_postal, telefono ,precio) VALUES ('$id_inmueble','$direccion','$ciudad','$tipo','$postal','$telefono','$precio')";



if ($conn->query($sql) === TRUE) {
    echo "Se registro de manera satisfactoria";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>