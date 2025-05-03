<?php
// Incluir la conexión a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $categoria = $_POST['Categoria'];
    $cantidad = $_POST['Cantidad'];
    $fechaUltimaRenovacion = $_POST['FechaUltimaRenovacion'];

    // Insertar el producto en la base de datos
    $query = "INSERT INTO inventario (Nombre, Categoria, Cantidad, FechaUltimaRenovacion) VALUES (:nombre, :categoria, :cantidad, :fechaUltimaRenovacion)";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindParam(':cantidad', $cantidad);
    $stmt->bindParam(':fechaUltimaRenovacion', $fechaUltimaRenovacion);

    if ($stmt->execute()) {
        echo "Producto agregado al inventario exitosamente.";
    } else {
        echo "Error al agregar el producto al inventario.";
    }
} else {
    echo "Acceso no permitido.";
}

echo "<br><br>";
echo "<a href='agregar_producto.php'>Volver al formulario de Agregar Producto</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>