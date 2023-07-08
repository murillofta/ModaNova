<?php

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];
$proveedor = $_POST['proveedor'];
$id_producto = $_POST["id_producto"];

$conexion = mysqli_connect('127.0.0.1','root','','modanova');
$consulta = "UPDATE inventario SET nombre_producto='$nombre', precio_producto='$precio', id_categoria='$categoria', id_proveedor='$proveedor' WHERE id_producto=$id_producto";

$resultado = mysqli_query($conexion, $consulta);

if($resultado) {
    echo "<script>alert('Producto actualizado exitosamente');
          location.href='inventario.php';
          </script>";
} else {
    echo "<script>alert('Error al actualizar el producto');
          location.href='modificar-inventario.php';
          </script>";
}

?>