<?php
$host     = "localhost"; // El host que te da InfinityFree
$username = "root";        // Tu usuario de la BD
$password = "";        // Tu contraseña
$dbname   = "banco_ideas"; // El nombre completo de tu BD

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
// if ($conn->connect_error) {
//     die("Conexión fallida: " . $conn->connect_error);
// }
// echo "Conectado exitosamente";
?>