<<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header ("location: Inicio.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-register MEGANIME</title>
    <link rel="stylesheet" href="CSS/Login-register.css">
    <link rel="shortcut icon" href="Images/Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="Images/">

    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body class="bodyloginregister">

    <main>

        <div class="contenedorloginregister">

            <div class="Caja_trasera">

                <div class="Caja_trasera-login">

                    <h3>¿Ya tienes una cuenta?</h3>

                    <p>Inicia sesión para entrar a la página</p>

                    <button id="bton_iniciar-sesión">Iniciar sesión</button>

                </div>

                <div class="Caja_trasera-register">

                    <h3>¿Aún no tienes una cuenta?</h3>

                    <p>Registrate y adentrate en este mundo.</p>

                    <button id="bton_registrarse">Registrarse</button>

                </div>

            </div>
            <!--Formulario de login y registro--> 
            <div class="Contenedor_login-register">
            <!--Formulario de login--> 
                <form action="php/login_usuario_be.php" method = "POST" class="Formulario_login">

                <h2>Iniciar sesión</h2>
                <input type="text" placeholder="Usuario" name = "usuario">
                <input type= "password" placeholder="Contraseña" name = "contrasena">
                <button>Ingresar</button>

                </form>
            <!--Formulario de registro--> 
                <form action="PHP/registro_usuario_be.php" method = "POST" class="Formulario_register">

                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre completo" name = "nombre_completo">
                <input type="text" placeholder="Correo electrónico" name = "correo">
                <input type="text" placeholder="Usuario" name = "usuario">
                <input type= "password" placeholder="Contraseña" name = "contrasena">
                <button>Registrarse</button>

                </form>

            </div>

        </div>

    </main>

    <script src="JS/Login.js"></script>
    
</body>
</html>