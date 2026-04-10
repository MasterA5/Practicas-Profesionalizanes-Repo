<?php 
include("conexion.php");

$id = $_POST["id"];
$nombre_apellido = $_POST["nombre_apellido"];
$dni = $_POST["dni"];
$direccion = $_POST["direccion"];
$fecha_de_nacimiento = $_POST["fecha_de_nacimiento"];
$celular = $_POST["celular"];
$correo = $_POST["correo"];

$sql = "UPDATE alumnos SET nombre_apellido='$nombre_apellido', dni='$dni', direccion='$direccion', fecha_de_nacimiento='$fecha_de_nacimiento', celular='$celular', correo='$correo'
WHERE id=$id";

mysqli_query($conexion, $sql);

header("location:lista_alu.php");

?>