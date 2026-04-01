<?php
include ("conexion.php");
$sql = "SELECT * FROM alumno";
$resultado=mysqli_query($conexion,$sql);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <TITLE>Listado de alumnos</TITLE>
</head>