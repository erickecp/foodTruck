<?php
// Inicializar una sesión para almacenar los productos en la sesión
session_start();

if (!isset($_SESSION['productos'])) {
    $_SESSION['productos'] = [];
}

// Agregar producto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $producto = [
        'nombre' => $nombre,
        'cantidad' => $cantidad,
        'precio' => $precio
    ];

    $_SESSION['productos'][] = $producto;
}

// Listar productos
$productos = $_SESSION['productos'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario Simple</title>
</head>
<body>
    <h1>Inventario de Productos</h1>

    <form method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label>Cantidad:</label>
        <input type="number" name="cantidad" required><br>
        <label>Precio:</label>
        <input type="text" name="precio" required><br>
        <input type="submit" value="Agregar Producto">
    </form>

    <h2>Lista de Productos</h2>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li><?php echo htmlspecialchars($producto['nombre']) . " - " . htmlspecialchars($producto['cantidad']) . " unidades - $" . htmlspecialchars($producto['precio']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
