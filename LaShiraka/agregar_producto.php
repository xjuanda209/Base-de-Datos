<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #17a2b8; /* Un color diferente para productos */
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #138496;
        }

        .error-message {
            color: #dc3545;
            margin-top: 5px;
        }

        .success-message {
            color: #198754;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <h1>Agregar Nuevo Producto</h1>

    <form action="procesar_producto.php" method="POST">
        <label for="Nombre">Nombre del Producto:</label>
        <input type="text" id="Nombre" name="Nombre" required>

        <label for="Categoria">Categoría:</label>
        <input type="text" id="Categoria" name="Categoria" required>

        <label for="Cantidad">Cantidad:</label>
        <input type="number" id="Cantidad" name="Cantidad" required>

        <label for="FechaUltimaRenovacion">Fecha de Última Renovación:</label>
        <input type="date" id="FechaUltimaRenovacion" name="FechaUltimaRenovacion" required>

        <button type="submit">Agregar Producto</button>
    </form>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>