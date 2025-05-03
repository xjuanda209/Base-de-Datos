<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Facturas</title>
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
    <h1>Lista de Facturas</h1>

    <?php
    include('conexion.php');

    $query = "SELECT ID, Fecha, Monto, MetodoPago, Estado, ClienteID FROM facturas";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $facturas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($facturas) {
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Fecha</th><th>Monto</th><th>Método de Pago</th><th>Estado</th><th>Cliente ID</th></tr></thead>";
        echo "<tbody>";
        foreach ($facturas as $factura) {
            echo "<tr>";
            echo "<td>" . $factura['ID'] . "</td>";
            echo "<td>" . htmlspecialchars($factura['Fecha']) . "</td>";
            echo "<td>" . htmlspecialchars($factura['Monto']) . "</td>";
            echo "<td>" . htmlspecialchars($factura['MetodoPago']) . "</td>";
            echo "<td>" . htmlspecialchars($factura['Estado']) . "</td>";
            echo "<td>" . $factura['ClienteID'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No hay facturas registradas.</p>";
    }
    ?>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>