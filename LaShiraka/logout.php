<?php
session_start();
session_destroy();
header('Location: login.php'); // Redirigir a la página de inicio de sesión después de cerrar la sesión
exit();
?>