<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Alerta</title>
    <style>/* Estilos */</style>
</head>
<body>
    <h1>Eliminar Alerta de Escasez</h1>
    <form action="procesar_eliminar_alerta.php" method="POST">
        <label for="ID">ID de la Alerta a Eliminar:</label><br>
        <input type="number" id="ID" name="ID" required><br><br>
        <button type="submit">Eliminar Alerta</button>
    </form>
    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>