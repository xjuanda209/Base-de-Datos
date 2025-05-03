<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Reserva</title>
    <style>/* Estilos */</style>
</head>
<body>
    <h1>Eliminar Reserva</h1>
    <form action="procesar_eliminar_reserva.php" method="POST">
        <label for="ID">ID de la Reserva a Eliminar:</label><br>
        <input type="number" id="ID" name="ID" required><br><br>
        <button type="submit">Eliminar Reserva</button>
    </form>
    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>