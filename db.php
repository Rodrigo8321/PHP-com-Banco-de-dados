<?php
$host = "localhost";
$user = "root";  //usuario
$pass = "root";   //senha 
$dbname = "cadastro";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

