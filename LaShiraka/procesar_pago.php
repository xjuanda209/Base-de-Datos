<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $FacturaID = $_POST['FacturaID'];
    $FechaPago = $_POST['FechaPago'];
    $Detalles = $_POST['Detalles'];
    $CantidadPagada = $_POST['CantidadPagada'];

    // Insertar el pago en la tabla registropagos
    $query_insert_pago = "INSERT INTO registropagos (FacturaID, FechaPago, Detalles, CantidadPagada)
                          VALUES (:FacturaID, :FechaPago, :Detalles, :CantidadPagada)";
    $stmt_insert_pago = $conexion->prepare($query_insert_pago);
    $stmt_insert_pago->bindParam(':FacturaID', $FacturaID);
    $stmt_insert_pago->bindParam(':FechaPago', $FechaPago);
    $stmt_insert_pago->bindParam(':Detalles', $Detalles);
    $stmt_insert_pago->bindParam(':CantidadPagada', $CantidadPagada);

    if ($stmt_insert_pago->execute()) {
        // Pago registrado exitosamente, ahora verificar si el pago iguala el monto de la factura
        $query_factura = "SELECT Monto, Estado FROM facturas WHERE ID = :FacturaID";
        $stmt_factura = $conexion->prepare($query_factura);
        $stmt_factura->bindParam(':FacturaID', $FacturaID);
        $stmt_factura->execute();
        $factura = $stmt_factura->fetch(PDO::FETCH_ASSOC);

        if ($factura) {
            if ($CantidadPagada == $factura['Monto']) {
                // Si la cantidad pagada es igual al monto de la factura, actualizar el estado de la factura
                $query_update_factura = "UPDATE facturas SET Estado = 'Pagada' WHERE ID = :FacturaID";
                $stmt_update_factura = $conexion->prepare($query_update_factura);
                $stmt_update_factura->bindParam(':FacturaID', $FacturaID);
                $stmt_update_factura->execute();

                echo "Pago registrado exitosamente. La factura #" . $FacturaID . " ha sido marcada como Pagada.";
            } else {
                echo "Pago registrado exitosamente. La factura #" . $FacturaID . " aún no está totalmente pagada.";
            }
            echo "<p><a href='ver_pagos.php'>Ver Pagos</a></p>";
            echo "<p><a href='ver_facturas.php'>Ver Facturas</a></p>";
            echo "<p><a href='index.php'>Volver al Menú Principal</a></p>";
        } else {
            echo "Error: No se encontró la factura con ID #" . $FacturaID . ".";
            echo "<p><a href='registrar_pago.php'>Volver a Registrar Pago</a></p>";
            echo "<p><a href='index.php'>Volver al Menú Principal</a></p>";
        }
    } else {
        echo "Error al registrar el pago.";
        echo "<p><a href='registrar_pago.php'>Volver a Registrar Pago</a></p>";
        echo "<p><a href='index.php'>Volver al Menú Principal</a></p>";
    }
} else {
    echo "Acceso no permitido.";
    // ... (Código para insertar el pago) ...

if ($stmt_pago->execute()) {
    // Marcar la intención de disminuir el stock para esta factura
    $query_marcar_stock = "UPDATE registropagos SET StockDisminuido = TRUE WHERE ID = :pagoID";
    $stmt_marcar_stock = $conexion->prepare($query_marcar_stock);
    $stmt_marcar_stock->bindParam(':pagoID', $conexion->lastInsertId()); // ID del pago recién registrado
    $stmt_marcar_stock->execute();

    echo "Pago registrado exitosamente. La disminución de stock se realizará posteriormente.<br>";
    // ...
}
}
?>
