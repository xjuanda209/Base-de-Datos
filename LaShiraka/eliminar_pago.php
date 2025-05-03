<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Pago</title>
    <style>/* Estilos */</style>
</head>
<body>
    <h1>Eliminar Pago</h1>
    <form action="procesar_eliminar_pago.php" method="POST">
        <label for="ID">ID del Pago a Eliminar:</label><br>
        <input type="number" id="ID" name="ID" required><br><br>
        <button type="submit">Eliminar Pago</button>
    </form>
    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>