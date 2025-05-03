<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['ID'];
    $query = "DELETE FROM reservas WHERE ID = :id";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Reserva con ID " . htmlspecialchars($id) . " eliminada exitosamente.";
    } else {
        echo "Error al eliminar la reserva.";
    }
} else {
    echo "Acceso no permitido.";
}
echo "<br><br>";
echo "<a href='eliminar_reserva.php'>Volver al formulario de Eliminar Reserva</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>