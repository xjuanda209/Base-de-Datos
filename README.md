# Proyecto de Gestión de Restaurante

Este proyecto es un sistema web desarrollado en PHP para la gestión de un restaurante. Permite la administración de inventario, registro de pagos, visualización de facturas y generación de alertas de stock bajo.

## Estructura del Proyecto

La estructura de archivos y carpetas del proyecto es la siguiente (ejemplo):

## Logins

Este proyecto, en su estado actual, **no incluye un sistema de autenticación o logins de usuario** de forma explícita. El acceso a las diferentes páginas se realiza directamente a través de enlaces.

Si en el futuro se implementa un sistema de usuarios y roles (por ejemplo, para administradores, cajeros, etc.), esta sección se actualizará con los detalles de los usuarios por defecto o el proceso de registro/login.

## Estructura de la Base de Datos

El proyecto utiliza una base de datos (MySQL u otra compatible con PDO) con las siguientes tablas principales:

* **`facturas`**: Almacena la información general de las facturas (ID, Fecha, Monto, Método de Pago, Estado, ClienteID).
* **`registropagos`**: Registra los pagos realizados para las facturas (ID, FacturaID, FechaPago, Detalles, CantidadPagada, `StockDisminuido` (booleano para marcar si se debe disminuir el stock), `StockProcesado` (booleano para marcar si el stock ya se disminuyó)).
* **`inventario`**: Contiene la información de los productos en el inventario (ID, Nombre, Categoría, Cantidad, FechaUltimaRenovacion).
* **`detalles_factura`**: (Tabla intermedia) Relaciona las facturas con los productos vendidos (ID, FacturaID, InventarioID, CantidadVendida).
* **`alertas_stock`**: Almacena las alertas de bajo stock generadas (ID, InventarioID, NombreProducto, CantidadActual, FechaAlerta).

El archivo `conexion.php` contiene los datos de conexión a esta base de datos.

## Cambios y Correcciones Realizadas

Durante el desarrollo y la resolución de problemas, se realizaron las siguientes correcciones y se implementaron los siguientes cambios:

* **Estabilidad de la visualización de pagos**: Se corrigieron errores que interrumpían la correcta visualización de la página de pagos.
* **Robustez en el manejo de datos**: Se mejoró el manejo de datos para prevenir errores relacionados con valores faltantes o nulos al mostrar información en las páginas.
* **Mejora de la interfaz visual**: Se aplicaron estilos CSS para una presentación más clara y agradable de la información en las tablas de datos.
* **Implementación de la lógica de disminución de stock(No funciono)**: Se integró un sistema para reducir la cantidad de productos en el inventario tras el registro de un pago, utilizando un proceso en segundo plano para la actualización.
* **Sistema de alertas de bajo stock**: Se añadió una funcionalidad para generar notificaciones automáticas cuando el nivel de inventario de un producto es bajo, almacenándose estas alertas para su revisión.
* **Interfaz para ver alertas**: Se creó una sección para visualizar las alertas de stock bajo generadas por el sistema.
* **Seguridad en el almacenamiento de contraseñas**: Se implementó el almacenamiento seguro de contraseñas de usuario utilizando funciones hash para proteger la información sensible.
* **Ajustes en el cálculo de facturas y pagos**: Se realizaron correcciones para asegurar una mayor precisión en la información mostrada sobre facturas y pagos registrados.
* **Mejoras en el sistema de alertas (en progreso, no realizado)**: Se realizaron ajustes en la lógica de las alertas de stock bajo, aunque se reconoce que esta funcionalidad aún podría requerir mejoras adicionales para una precisión del 100%.

## Próximos Pasos (Sugerencias)

* Crear formularios para la creación y edición de facturas y productos.
* Implementar informes y estadísticas sobre ventas, inventario, etc.

Gracias por su atencion
