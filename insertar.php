<?php
include("conexion.php");

$post = $_POST;

$nombre_apellido = $post["Nombre_y_Apellido"];
$dni = $post["dni"];
$fecha_nac = $post["Fecha_De_Nacimiento"];
$direccion = $post["Direccion"];
$celular = $post["Celular"];
$email = $post["Email"];

$sql = "INSERT INTO alumnos (nombre_apellido, dni, direccion, fecha_de_nacimiento, celular, correo) VALUES ('$nombre_apellido', '$dni', '$direccion', '$fecha_nac','$celular', '$email')";

if (mysqli_query($conexion, $sql)) {
    echo '<h2>¡Registro Exitoso</h2>';
    echo '<a href="index.html">Volver Al Formulario</a>';
    header("location:lista_alu.php");
} else {
    echo 'Error Al Insertar Datos' . mysqli_error($conexion);
}
