<?php
    session_start();
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    include('conexion.php');
    $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND password = " . $password;
    //echo $sql;
    $res = mysqli_query($conexion, $sql) or die('usuario o pasword incorrecto');
    $filas = mysqli_fetch_array($res);
    if (isset($filas)) {
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['password'] = $_POST['password'];
        
        header("Location: bloq.php", TRUE, 301);
        
    echo  $_SESSION['usuario' ];
        exit();
    } else {
        echo 'usuario o pasword incorrecto';
    }
?>