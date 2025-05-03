<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php'); // Redirigir a la página de inicio de sesión si no hay sesión activa
    exit();
}

// Obtener el rol del usuario de la sesión
$usuario_rol = $_SESSION['usuario_rol'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>La Shiraka Restaurant - Base de Datos</title>
    <link rel="stylesheet" href="estilos_index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your_fontawesome_kit.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="site-header">
        <div class="header-content">
            <img src="images/images.jpg" alt="Logo La Shiraka" class="site-logo">
            <h1>La Shiraka Restaurant</h1>
            <p class="tagline">Gestiona tu restaurante con eficiencia y sabor.</p>
            <p style="text-align: right;"><a href="logout.php" style="color: white;">Cerrar Sesión</a></p>
        </div>
    </header>

    <main class="main-content">
        <section class="module agregar">
            <h2><i class="fas fa-plus-circle"></i> Agregar</h2>
            <nav class="module-nav">
                <ul>
                    <li><a href="crear_cliente.php"><i class="fas fa-user-plus"></i> Crear Cliente</a></li>
                    <li><a href="generar_factura.php"><i class="fas fa-file-invoice-dollar"></i> Generar Factura</a></li>
                    <li><a href="agregar_producto.php"><i class="fas fa-utensil-spoon"></i> Agregar Producto</a></li>
                    <li><a href="generar_reserva.php"><i class="fas fa-calendar-alt"></i> Generar Reserva</a></li>
                    <li><a href="registrar_pago.php"><i class="fas fa-money-bill-wave"></i> Registrar Pago</a></li>
                </ul>
            </nav>
        </section>

        <section class="module ver">
            <h2><i class="fas fa-eye"></i> Ver Datos</h2>
            <nav class="module-nav">
                <ul>
                    <li><a href="ver_alertas.php"><i class="fas fa-bell"></i> Ver Alertas</a></li>
                    <li><a href="ver_facturas.php"><i class="fas fa-file-invoice"></i> Ver Facturas</a></li>
                    <li><a href="ver_pagos.php"><i class="fas fa-coins"></i> Ver Pagos</a></li>
                    <li><a href="ver_productos.php"><i class="fas fa-hamburger"></i> Ver Productos</a></li>
                    <li><a href="ver_reservas.php"><i class="fas fa-table"></i> Ver Reservas</a></li>
                    <li><a href="ver_clientes.php"><i class="fas fa-users"></i> Ver Clientes</a></li>
                </ul>
            </nav>
        </section>

        <?php if ($usuario_rol === 'admin'): ?>
        <section class="module eliminar">
            <h2><i class="fas fa-trash-alt"></i> Eliminar Datos</h2>
            <nav class="module-nav">
                <ul>
                    <li><a href="eliminar_cliente.php"><i class="fas fa-user-slash"></i> Eliminar Cliente</a></li>
                    <li><a href="eliminar_factura.php"><i class="fas fa-file-excel"></i> Eliminar Factura</a></li>
                    <li><a href="eliminar_pago.php"><i class="fas fa-hand-holding-usd"></i> Eliminar Pago</a></li>
                    <li><a href="eliminar_producto.php"><i class="fas fa-carrot"></i> Eliminar Producto</a></li>
                    <li><a href="eliminar_reserva.php"><i class="fas fa-times-circle"></i> Eliminar Reserva</a></li>
                    <li><a href="eliminar_alerta.php"><i class="fas fa-radiation-alt"></i> Eliminar Alerta</a></li>
                </ul>
            </nav>
        </section>
        <?php endif; ?>

        
    </main>

    <footer class="site-footer">
        <p>&copy; 2025 La Shiraka Restaurant. Todos los derechos reservados.</p>
    </footer>
</body>
</html>