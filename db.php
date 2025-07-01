<?php
$host = "localhost";
$user = "root";  //usuario
$pass = "root";   //senha 
$dbname = "cadastro";

$conn = mysql_connect($servername, $username, $password);
mysql_select_db($dbname, $conn);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

