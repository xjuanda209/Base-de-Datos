<?php
// Incluir la conexión a la base de datos
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['Nombre'];
    $telefono = $_POST['Telefono'];
    $metodo_contacto = $_POST['Metodo_Contacto'];

    // Insertar el cliente en la base de datos
    $query = "INSERT INTO clientes (Nombre, Telefono, Metodo_Contacto) VALUES (:nombre, :telefono, :metodo_contacto)";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':metodo_contacto', $metodo_contacto);

    if ($stmt->execute()) {
        echo "Cliente creado exitosamente.";
    } else {
        echo "Error al crear el cliente.";
    }
} else {
    echo "Acceso no permitido.";
}

echo "<br><br>";
echo "<a href='crear_cliente.php'>Volver al formulario de Crear Cliente</a>";
echo "<br>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
?>