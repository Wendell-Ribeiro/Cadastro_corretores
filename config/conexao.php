<?php
$conn = new mysqli("localhost", "root", "", "corretores_db");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
