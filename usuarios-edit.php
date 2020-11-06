
<?php
require_once('cabe.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
         <h1>nuevo usuario</h1>
         <form action="usu-procesa.php" method="post">
  <div class="form-group">
    <label for="">usuario</label>
    <input type="text" name="usuario" class="form-control">

 
  
  </div>
  <div class="form-group">
    <label for="">clave</label>
    <input type="password" name="password" class="form-control" >

  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
      </div>
      </div>
 
  </div>
<?php
require_once('pie.php');
?>
