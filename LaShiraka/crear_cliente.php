<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
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

        input[type="text"] {
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
    <h1>Crear Cliente</h1>

    <form action="procesar_cliente.php" method="POST">
        <label for="Nombre">Nombre del Cliente:</label><br>
        <input type="text" id="Nombre" name="Nombre" required><br><br>

        <label for="Telefono">Teléfono:</label><br>
        <input type="text" id="Telefono" name="Telefono"><br><br>

        <label for="Metodo_Contacto">Método de Contacto:</label><br>
        <input type="text" id="Metodo_Contacto" name="Metodo_Contacto" value="WhatsApp"><br><br>

        <button type="submit">Crear Cliente</button>
    </form>

    <br><br>
    <a href="index.php">Volver al Menú Principal</a>
</body>
</html>