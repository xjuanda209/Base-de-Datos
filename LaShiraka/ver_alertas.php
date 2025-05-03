<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Alertas de Stock</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #dc3545; /* Rojo para indicar alerta */
            margin-bottom: 30px;
            text-align: center;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #dc3545;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        p a {
            color: #007bff;
            text-decoration: none;
            margin-top: 20px;
            display: block;
            text-align: center;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Alertas de Stock Bajo</h1>

    <?php
    include('conexion.php');

    $query_alertas = "SELECT ID, InventarioID, NombreProducto, CantidadActual, FechaAlerta FROM alertas_stock ORDER BY FechaAlerta DESC";
    $stmt_alertas = $conexion->prepare($query_alertas);
    $stmt_alertas->execute();
    $alertas = $stmt_alertas->fetchAll(PDO::FETCH_ASSOC);

    if ($alertas) {
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Producto ID</th><th>Nombre del Producto</th><th>Cantidad Actual</th><th>Fecha de Alerta</th></tr></thead>";
        echo "<tbody>";
        foreach ($alertas as $alerta) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($alerta['ID'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($alerta['InventarioID'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($alerta['NombreProducto'] ?? '') . "</td>";
            echo "<td style='color: red; font-weight: bold;'>" . htmlspecialchars($alerta['CantidadActual'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($alerta['FechaAlerta'] ?? '') . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No hay alertas de stock en este momento.</p>";
    }
    ?>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>