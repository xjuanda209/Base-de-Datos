<?php
session_start(); // Iniciar la sesión

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('conexion.php');

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT id, usuario, contrasena, rol FROM usuarios WHERE usuario = :usuario";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();
    $usuario_encontrado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario_encontrado && password_verify($contrasena, $usuario_encontrado['contrasena'])) {
        // Autenticación exitosa
        $_SESSION['usuario_id'] = $usuario_encontrado['id'];
        $_SESSION['usuario_rol'] = $usuario_encontrado['rol'];
        header('Location: index.php'); // Redirigir al índice después del inicio de sesión
        exit();
    } else {
        // Autenticación fallida
        header('Location: login.php?error=1'); // Redirigir de vuelta al formulario con un mensaje de error
        exit();
    }
} else {
    // Si se intenta acceder a este script por GET
    header('Location: login.php');
    exit();
}
?>