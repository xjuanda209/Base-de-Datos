<?php
// Incluir la conexión a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $fecha = $_POST['Fecha'];
    $monto = $_POST['Monto'];
    $metodoPago = $_POST['MetodoPago'];
    $estado = $_POST['Estado'];
    $clienteID = $_POST['ClienteID'];

    // Insertar la factura en la base de datos
    $query = "INSERT INTO facturas (Fecha, Monto, MetodoPago, Estado, ClienteID) VALUES (:fecha, :monto, :metodoPago, :estado, :clienteID)";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':fecha', $fecha);
    $stmt->bindParam(':monto', $monto);
    $stmt->bindParam(':metodoPago', $metodoPago);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':clienteID', $clienteID);

    if ($stmt->execute()) {
        echo "Factura generada y guardada exitosamente.";
    } else {
        echo "Error al generar y guardar la factura.";
    }
} else {
    echo "Acceso no permitido.";
}

echo "<br><br>";
echo "<a href='generar_factura.php'>Volver al formulario de Generar Factura</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>