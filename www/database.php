<?php
$host = "localhost";
$user = "root";
$password = "";
$databaseName = "";
$conn = mysqli_connect($host, $user, $password, $databaseName);
if (mysqli_connect_error()) {
    echo "Er is een error. Probeer opnieuw.";
} else {
    echo "De connectie is gelukt.";
}