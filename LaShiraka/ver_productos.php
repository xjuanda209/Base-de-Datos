<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Productos</title>
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
    <h1>Lista de Productos</h1>

    <?php
    include('conexion.php');

    $query = "SELECT ID, Nombre, Categoria, Cantidad, FechaUltimaRenovacion FROM inventario";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($productos) {
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Nombre</th><th>Categoría</th><th>Cantidad</th><th>Fecha Última Renovación</th></tr></thead>";
        echo "<tbody>";
        foreach ($productos as $producto) {
            echo "<tr>";
            echo "<td>" . $producto['ID'] . "</td>";
            echo "<td>" . htmlspecialchars($producto['Nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($producto['Categoria']) . "</td>";
            echo "<td>" . $producto['Cantidad'] . "</td>";
            echo "<td>" . htmlspecialchars($producto['FechaUltimaRenovacion']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No hay productos en el inventario.</p>";
    }
    ?>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>