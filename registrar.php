<?php

 include_once 'model/conexion.php';
 $nombre = $_POST["txtNombre"];
 $dueño = $_POST["txtDueño"];
 $edad = $_POST["txtEdad"];
 $fecha_nacimiento = $_POST["txtFechaNacimiento"];
 

 $sentencia = $bd->prepare("INSERT INTO mascotas3(nombre,dueño,edad,fecha_nacimiento) VALUES (?,?,?,?);");

 $resultado = $sentencia->execute([$nombre, $dueño, $edad, $fecha_nacimiento);

 if($resultado == TRUE) {
    header('Location: index.php');

 }else {
    echo('error');
 }
?>