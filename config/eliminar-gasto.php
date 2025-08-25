<?php
require_once('config.php');
$id = $_GET['id'];

$query = "DELETE FROM gastos WHERE id = '$id'";
$resultado = $pdo->query($query);

header("Location: ../index.php");
?>