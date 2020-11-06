<?php

require_once('conexionbd.php');
$sql = "select * from roles";
$result = $conn->query($sql);
$roles = array();
while ($fila = $result->fetch_array()){
 $roles[] = $fila;
}
require_once('cabe.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
         <h1>nuevo permisos</h1>
         <form action="perm-procesa.php" method="post">
  <div class="form-group">
    <label for="">id_usuario</label>
    <input type="text" name="id_usuario" class="form-control">

 
  
  </div>
  <div class="form-group">
    <label for="">roles</label>
    <select name="id_roles"  class="form-control" >
      <option value="">-- selecione --</option>
<?php foreach ($roles as $item): ?> 
  <option value="<?= $item['id'] ?>"><?= $item['descripcion'] ?> </option>
  
<?php endforeach ?>
</select>
?>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
      </div>
      </div>
 
  </div>
<?php
require_once('pie.php');
?>