<?php
require_once('config.php');
$cantidad = $_POST['cantidad'];
$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$query = "INSERT INTO gastos (cantidad, categoria, descripcion) VALUES ('$cantidad', '$categoria', '$descripcion')";
$resultado = $pdo->query($query);

header("Location: ../modulos/gastos/index.php");
?>