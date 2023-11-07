<?php

include_once 'conexion.php';

// Obtenemos los datos del formulario
$Nombre_P = $_POST["NOMBRE_PRODUC"];
$Descripcion_P = $_POST["DESCRIPCION_PRODUC"];
$Precio_P = $_POST["PRECIO_PRODUC"];
$Descuento_P = $_POST["DESC_PRODUC"];
$Disponibilidad = $_POST["DISPO_PRODUC"];

// Validamos que el usuario no exista
$validausuario = "SELECT * FROM `productos` WHERE `NOMBRE_PRODUC` = '$Nombre_P'";

$resultadousuario = mysqli_query($conectar, $validausuario);

$numerousuarios =mysqli_num_rows($resultadousuario);

if ($numerousuarios > 0) {

    echo '<script>alert("El producto ya esta registrado")</script>';

} else {


// Ejecutamos la consulta SQL
$insertarUsuario = "INSERT INTO `productos`(`NOMBRE_PRODUC`, `DESCRIPCION_PRODUC`, `PRECIO_PRODUC`, `DESC_PRODUC`, `DISPO_PRODUC`) VALUES('$Nombre_P', '$Descripcion_P', '$Precio_P', '$Descuento_P', '$Disponibilidad')";

$ejecutarsql = mysqli_query($conectar, $insertarUsuario);



if (!$ejecutarsql) {
    echo '<script>alert("Error al ejecutar la consulta: ")</script>'.mysqli_error($conectar);
} else {
    echo '<script>alert("Se ha insertado el producto a la BD Correctamente"); window.location= "../Tiendita.php";</script>';
    
}
}
mysqli_close($conectar);

?>
m