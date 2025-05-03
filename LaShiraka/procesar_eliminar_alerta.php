<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['ID'];
    $query = "DELETE FROM alertasescasez WHERE ID = :id";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $id);
    if ($stmt->execute()) {
        echo "Alerta con ID " . htmlspecialchars($id) . " eliminada exitosamente.";
    } else {
        echo "Error al eliminar la alerta.";
    }
} else {
    echo "Acceso no permitido.";
}
echo "<br><br>";
echo "<a href='eliminar_alerta.php'>Volver al formulario de Eliminar Alerta</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>