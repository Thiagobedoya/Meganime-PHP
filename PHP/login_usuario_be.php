<?php

    session_start(); // Iniciar sesión para poder usar $_SESSION

    include 'conexion_be.php';

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena); //encriptar la contraseña

    $validar_login = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'
    and contrasena = '$contrasena'");

    if (mysqli_num_rows($validar_login)> 0){
        $_SESSION['usuario'] = $usuario; //iniciar sesión
        header("Location:../Inicio.php");
        exit();
    }else{
        echo '
        <script>
            alert("Usuario no existe, por favor verifique los datos introducidos");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

?>