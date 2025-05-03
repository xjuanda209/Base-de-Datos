<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Pagos</title>
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
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }

        table {
            width: 95%;
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
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        td a {
            color: #007bff;
            text-decoration: none;
        }

        td a:hover {
            text-decoration: underline;
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
    <h1>Lista de Pagos</h1>

    <?php
    include('conexion.php');

    $query = "SELECT
        rp.ID,
        rp.FacturaID,
        rp.FechaPago,
        rp.Detalles,
        rp.CantidadPagada,
        f.Monto AS MontoTotalFactura
    FROM registropagos rp
    INNER JOIN facturas f ON rp.FacturaID = f.ID";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $pagos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($pagos) {
        echo "<table>";
        echo "<thead><tr>
            <th>ID</th>
            <th>Factura ID</th>
            <th>Fecha de Pago</th>
            <th>Detalles</th>
            <th>Cantidad Pagada</th>
            <th>Monto Total Factura</th>
        </tr></thead>";
        echo "<tbody>";
        foreach ($pagos as $pago) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($pago['ID'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($pago['FacturaID'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($pago['FechaPago'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($pago['Detalles'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($pago['CantidadPagada'] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($pago['MontoTotalFactura'] ?? '') . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No hay registros de pagos.</p>";
    }
    ?>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>