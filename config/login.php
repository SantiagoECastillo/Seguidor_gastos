<?php 
    require_once('./config.php');
    $email = $_POST['email'];
    $pass = $_POST['contra'];
    //Consulta para saber si el usuario esta en la DB
    $query = "SELECT * FROM usuarios WHERE correo = '$email' AND password = '$pass' AND status = 1";
    $resultado = $pdo->query($query);

    if($resultado->rowCount() > 0){
        header("Location: ../bienvenida.php");
    }else{
        header("Location: ../index.php");
    }
?>