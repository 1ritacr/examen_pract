<?php
require_once('cabe.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
         <h1>nuevo roles</h1>
         <form action="roles-procesa.php" method="post">
  <div class="form-group">
    <label for="">id</label>
    <input type="int" name="int" class="form-control">

 
  
  </div>
  <div class="form-group">
    <label for="">descripcion</label>
    <input type="text" name="text" class="form-control" >

  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
      </div>
      </div>
 
  </div>
<?php
require_once('pie.php');
?>