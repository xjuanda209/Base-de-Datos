<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['ID'];
    $query = "DELETE FROM facturas WHERE ID = :id";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Factura con ID " . htmlspecialchars($id) . " eliminada exitosamente.";
    } else {
        echo "Error al eliminar la factura.";
    }
} else {
    echo "Acceso no permitido.";
}
echo "<br><br>";
echo "<a href='eliminar_factura.php'>Volver al formulario de Eliminar Factura</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>