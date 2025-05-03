<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['ID'];

    $query = "DELETE FROM clientes WHERE ID = :id";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Cliente con ID " . htmlspecialchars($id) . " eliminado exitosamente.";
    } else {
        echo "Error al eliminar el cliente.";
    }
} else {
    echo "Acceso no permitido.";
}

echo "<br><br>";
echo "<a href='eliminar_cliente.php'>Volver al formulario de Eliminar Cliente</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>