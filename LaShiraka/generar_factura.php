<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Generar Factura</title>
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
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            appearance: none;
            background-image: url('data:image/svg+xml;charset=UTF-8,<svg fill="%23343a40" viewBox="0 0 4 5"><path d="M2 0L0 2h4L2 0z"/></svg>');
            background-repeat: no-repeat;
            background-position-x: 98%;
            background-position-y: 50%;
            padding-right: 25px;
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
    <h1>Generar Nueva Factura</h1>

    <form action="procesar_factura.php" method="POST">
        <label for="Fecha">Fecha:</label>
        <input type="date" id="Fecha" name="Fecha" required>

        <label for="Monto">Monto:</label>
        <input type="number" step="0.01" id="Monto" name="Monto" required>

        <label for="MetodoPago">Método de Pago:</label>
        <select id="MetodoPago" name="MetodoPago">
            <option value="Efectivo">Efectivo</option>
            <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
            <option value="Tarjeta de Débito">Tarjeta de Débito</option>
            <option value="Transferencia Bancaria">Transferencia Bancaria</option>
            <option value="Otro">Otro</option>
        </select>

        <label for="Estado">Estado:</label>
        <select id="Estado" name="Estado">
            <option value="Pendiente">Pendiente</option>
            <option value="Pagada">Pagada</option>
            <option value="Anulada">Anulada</option>
        </select>

        <label for="ClienteID">ID del Cliente:</label>
        <input type="number" id="ClienteID" name="ClienteID" required>

        <button type="submit">Guardar Factura</button>
    </form>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>