<?php
$host = "localhost";
$user = "root";
$pass = "root";  // Tente com senha vazia primeiro
$dbname = "cadastro";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

