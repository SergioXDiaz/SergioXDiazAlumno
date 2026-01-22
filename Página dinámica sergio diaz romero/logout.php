<?php
session_start();        // Inicia la sesión
session_unset();        // Borra todas las variables de sesión
session_destroy();      // Destruye la sesión

header("Location: index.php");  // Redirige al login
exit;
?>