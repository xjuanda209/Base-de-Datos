<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['ID'];
    $query = "DELETE FROM registropagos WHERE ID = :id";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Pago con ID " . htmlspecialchars($id) . " eliminado exitosamente.";
    } else {
        echo "Error al eliminar el pago.";
    }
} else {
    echo "Acceso no permitido.";
}
echo "<br><br>";
echo "<a href='eliminar_pago.php'>Volver al formulario de Eliminar Pago</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>