<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Producto</title>
    <style>/* Estilos */</style>
</head>
<body>
    <h1>Eliminar Producto</h1>
    <form action="procesar_eliminar_producto.php" method="POST">
        <label for="ID">ID del Producto a Eliminar:</label><br>
        <input type="number" id="ID" name="ID" required><br><br>
        <button type="submit">Eliminar Producto</button>
    </form>
    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>