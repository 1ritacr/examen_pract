<?php 
require_once('conexionBD.php');

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
//var_dump($password);
//$password = sha1($_POST['password']);
//var_dump($password);

$sql = "insert into roles (id,descripcion) values ('$id','$descripcion')";
$result = $conn->query($sql);

if (!$result) die('Error al insertar');

header('Location: roles.php');
?>