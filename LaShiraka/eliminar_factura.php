<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Factura</title>
    <style>/* Estilos */</style>
</head>
<body>
    <h1>Eliminar Factura</h1>
    <form action="procesar_eliminar_factura.php" method="POST">
        <label for="ID">ID de la Factura a Eliminar:</label><br>
        <input type="number" id="ID" name="ID" required><br><br>
        <button type="submit">Eliminar Factura</button>
    </form>
    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>