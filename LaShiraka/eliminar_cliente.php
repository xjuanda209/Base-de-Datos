<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Cliente</title>
    <style>
        /* Estilos similares a los formularios de agregar */
    </style>
</head>
<body>
    <h1>Eliminar Cliente</h1>

    <form action="procesar_eliminar_cliente.php" method="POST">
        <label for="ID">ID del Cliente a Eliminar:</label><br>
        <input type="number" id="ID" name="ID" required><br><br>

        <button type="submit">Eliminar Cliente</button>
    </form>

    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>