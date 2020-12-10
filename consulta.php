<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intelcost_bienes";


$conn = new mysqli($servername, $username, $password, $dbname);




if ($resultado = $conn->query("SELECT * FROM bienes")) {
 
    while ($row = $resultado->fetch_array(MYSQLI_ASSOC)){
 
	 
	  echo '<div class="clearfix"></div><div class="card horizontal col 16"><div class="card-image"><img src="img/home.jpg"></div><div class="card-stacked"><div class="card-content"></p><p>Direccion:'.$row['direccion'].'</p><p>Ciudad:'.$row['ciudad'].'</p><p>Telefono:'.$row['telefono'].'</p><p>Codigo Postal:'.$row['codigo_postal'].'</p><p>Tipo:'.$row['tipo'].'</p><p>Precio:'.$row['precio'].'</p></div><div class="card-action"></div></div></div> </div>';
	 
	}
}

?>