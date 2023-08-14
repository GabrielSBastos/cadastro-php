<?php

include_once("index.php");


$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_STRING);
$pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING);

$result = "INSERT INTO users (name, email, city, country) VALUES ('$nome', '$email','$cidade', '$pais')";
$resultado = mysqli_query($conn, $result);

?>