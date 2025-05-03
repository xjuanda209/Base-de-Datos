<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Reservas</title>
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
    <h1>Lista de Reservas</h1>

    <?php
    include('conexion.php');

    $query = "SELECT ID, ClienteID, Fecha, Hora, Estado, Metodo_Solicitud FROM reservas";
    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($reservas) {
        echo "<table>";
        echo "<thead><tr><th>ID</th><th>Cliente ID</th><th>Fecha</th><th>Hora</th><th>Estado</th><th>Método de Solicitud</th></tr></thead>";
        echo "<tbody>";
        foreach ($reservas as $reserva) {
            echo "<tr>";
            echo "<td>" . $reserva['ID'] . "</td>";
            echo "<td>" . $reserva['ClienteID'] . "</td>";
            echo "<td>" . htmlspecialchars($reserva['Fecha']) . "</td>";
            echo "<td>" . htmlspecialchars($reserva['Hora']) . "</td>";
            echo "<td>" . htmlspecialchars($reserva['Estado']) . "</td>";
            echo "<td>" . htmlspecialchars($reserva['Metodo_Solicitud']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No hay reservas registradas.</p>";
    }
    ?>

    <p><a href="index.php">Volver al Menú Principal</a></p>
</body>
</html>