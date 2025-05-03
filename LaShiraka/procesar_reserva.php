<?php
// Incluir la conexión a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $clienteID = $_POST['ClienteID'];
    $fecha = $_POST['Fecha'];
    $hora = $_POST['Hora'];
    $estado = $_POST['Estado'];
    $metodo_solicitud = $_POST['Metodo_Solicitud'];

    // Insertar la reserva en la base de datos
    $query = "INSERT INTO reservas (ClienteID, Fecha, Hora, Estado, Metodo_Solicitud) VALUES (:clienteID, :fecha, :hora, :estado, :metodo_solicitud)";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':clienteID', $clienteID);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':hora', $hora);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':metodo_solicitud', $metodo_solicitud);

    if ($stmt->execute()) {
        echo "Reserva generada exitosamente.";
    } else {
        echo "Error al generar la reserva.";
    }
} else {
    echo "Acceso no permitido.";
}

echo "<br><br>";
echo "<a href='generar_reserva.php'>Volver al formulario de Generar Reserva</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>