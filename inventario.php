<?php

// Definir un array para almacenar los elementos del inventario
$inventario = [
    "Pizza" => [
        "cantidad" => 10,
        "precio" => 15.00
    ],
    "Hamburguesa" => [
        "cantidad" => 8,
        "precio" => 12.00
    ],
    "Papas Fritas" => [
        "cantidad" => 20,
        "precio" => 5.00
    ],
    "Refresco" => [
        "cantidad" => 15,
        "precio" => 2.50
    ]
];

// Función para mostrar el inventario
function mostrarInventario($inventario) {
    echo "**Inventario**\n";
    foreach ($inventario as $nombreItem => $datosItem) {
        echo "- $nombreItem: Cantidad: {$datosItem['cantidad']}, Precio: {$datosItem['precio']}\n";
    }
}

// Función para agregar un artículo al inventario
function agregarItem($inventario, $nombreItem, $cantidad, $precio) {
    if (isset($inventario[$nombreItem])) {
        echo "El artículo \"$nombreItem\" ya existe. Actualice la cantidad en su lugar.\n";
    } else {
        $inventario[$nombreItem] = ["cantidad" => $cantidad, "precio" => $precio];
        echo "Artículo \"$nombreItem\" agregado exitosamente.\n";
    }
}

// Función para actualizar la cantidad de un artículo en el inventario
function actualizarCantidad($inventario, $nombreItem, $nuevaCantidad) {
    if (isset($inventario[$nombreItem])) {
        $inventario[$nombreItem]["cantidad"] = $nuevaCantidad;
        echo "Cantidad de \"$nombreItem\" actualizada a $nuevaCantidad.\n";
    } else {
        echo "Artículo \"$nombreItem\" no encontrado en el inventario.\n";
    }
}

// Función para eliminar un artículo del inventario
function eliminarItem($inventario, $nombreItem) {
    if (isset($inventario[$nombreItem])) {
        unset($inventario[$nombreItem]);
        echo "Artículo \"$nombreItem\" eliminado del inventario.\n";
    } else {
        echo "Artículo \"$nombreItem\" no encontrado en el inventario.\n";
    }
}

// Ejemplo de uso
mostrarInventario($inventario);

agregarItem($inventario, "Sándwich", 5, 10.00);
actualizarCantidad($inventario, "Pizza", 7);
eliminarItem($inventario, "Refresco");

mostrarInventario($inventario);
