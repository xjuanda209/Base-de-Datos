<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Pago</title>
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

        input[type="date"],
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #1e7e34;
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
    <h1>Registrar Nuevo Pago</h1>

    <form action="procesar_pago.php" method="POST">
        <label for="FacturaID">ID de Factura:</label>
        <input type="number" id="FacturaID" name="FacturaID" required>

        <label for="FechaPago">Fecha de Pago:</label>
        <input type="date" id="FechaPago" name="FechaPago" required>

        <label for="Detalles">Detalles del Pago:</label>
        <input type="text" id="Detalles" name="Detalles" maxlength="255">

        <label for="CantidadPagada">Cantidad Pagada:</label>
        <input type="number" step="0.01" id="CantidadPagada" name="CantidadPagada" required>

        <button type="submit">Registrar Pago</button>
    </form>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>
