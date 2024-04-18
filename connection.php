<?php

$conn = new mysqli("localhost", "root", "", "chiriquiViajes");
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : " . mysqli_connect_error() . PHP_EOL;
    die;
}
