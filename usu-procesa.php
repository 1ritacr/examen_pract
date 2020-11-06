<?php 
require_once('conexionBD.php');

$usuario = $_POST['usuario'];

$clave = md5($_POST['clave']);
//var_dump($password);
//$password = sha1($_POST['password']);
//var_dump($password);

$sql = "insert into usuarios (usuario,clave) values ('$usuario','$clave')";
$result = $conn->query($sql);

if (!$result) die('Error al insertar');

header('Location: usuarios.php');
?>