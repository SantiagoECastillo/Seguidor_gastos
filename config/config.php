<?php

$host = "localhost";       
$port = "5432";            
$dbname = "Gestor_gastos"; 
$user = "postgres";        
$password = "admin";

try {
    // Conexion con la DB
    $servidor = "pgsql:host=$host;port=$port;dbname=$dbname;";
    $pdo = new PDO($servidor, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
    ]);
   
} catch (PDOException $e) { //Casos de error
    echo "Error al conectar!!! -> " . $e->getMessage();
    exit;
}

?>