<?php

    session_start();
    session_destroy(); // Destruir la sesión para cerrar sesión
    header ("Location: ../index.php"); // Redirigir al usuario a la página de inicio

?>