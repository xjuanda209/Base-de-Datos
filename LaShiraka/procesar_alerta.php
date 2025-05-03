<?php
// Incluir la conexión a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $productoID = $_POST['ProductoID'];
    $fechaDeteccion = $_POST['FechaDeteccion'];
    $estado = $_POST['Estado'];

    // Insertar la alerta de escasez en la base de datos
    $query = "INSERT INTO alertasescasez (ProductoID, FechaDeteccion, Estado) VALUES (:productoID, :fechaDeteccion, :estado)";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':productoID', $productoID);
    $stmt->bindParam(':fechaDeteccion', $fechaDeteccion);
    $stmt->bindParam(':estado', $estado);

    if ($stmt->execute()) {
        echo "<div style='background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; padding: 15px; border-radius: 5px; margin-bottom: 10px;'>";
        echo "<strong>¡Éxito!</strong> Alerta de escasez generada y guardada exitosamente.";
        echo "</div>";
    } else {
        echo "<div style='background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 15px; border-radius: 5px; margin-bottom: 10px;'>";
        echo "<strong>¡Error!</strong> Error al generar y guardar la alerta de escasez.";
        echo "</div>";
    }
} else {
    echo "Acceso no permitido.";
}

echo "<br><br>";
echo "<a href='generar_alerta.php'>Volver al formulario de Generar Alerta</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>