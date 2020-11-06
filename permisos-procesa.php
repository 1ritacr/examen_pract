<?php 
require_once('conexionBD.php');

$id_usuario = $_POST['id_usuario'];
$id_roles = $_POST['id_roles'];


$sql = "insert into estudiantes (id_usuario,id_rolesl) values ('$id_usuario',$id_roles)";

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: permisos.php');
?>