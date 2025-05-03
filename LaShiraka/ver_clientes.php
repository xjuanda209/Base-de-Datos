<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Clientes</title>
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

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Lista de Clientes</h1>

    <?php
    include('conexion.php');

    $query = "SELECT ID, Nombre, Telefono, Metodo_Contacto FROM clientes";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($clientes) {
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Nombre</th><th>Teléfono</th><th>Método de Contacto</th></tr></thead>";
        echo "<tbody>";
        foreach ($clientes as $cliente) {
            echo "<tr>";
            echo "<td>" . $cliente['ID'] . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Telefono']) . "</td>";
            echo "<td>" . htmlspecialchars($cliente['Metodo_Contacto']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No hay clientes registrados.</p>";
    }
    ?>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>