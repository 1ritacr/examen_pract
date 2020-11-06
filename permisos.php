<?php
require_once('conexionbd.php');
$sql = "select p.*,r.descripcion as roles from permisos p left join roles r on p.id_roles = r.id";
$result = $conn->query($sql);
$permisos = array();
//while ($fila =  $result->fetch_array()) {
    //$permisos[] = $fila;
//}

$sql = "select * from roles ";
$result = $conn->query($sql);
$rol = array();
//while ($fila = $result->fetch_array()){
 // $roles[] = $fila;
//}
require_once('cabe.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
         <h1>roles</h1>
           <p> 
         	<a href="permisos-edit.php" class="btn btn-success" >nuevo</a>
         </p>
          <table class="table table-striped">
           <tr>
           	
            <th>id</th>
           	<th>id_usuarios</th>
           	<th>id_rol</th>
           	<th></th>
           </tr>
           <?php foreach ($permisos as $item): ?>

   <tr>
       	<td><?= $item['id']?></td>
       <td><?= $item['id_usuarios']?></td>
       	 <td><?= $item['id_rol']?></td>
       	 <td>
       	 	<a href="#" class="btn btn-primary">Editar</a> 
       	 </td>
       	 <td>
       	 	<a href="#" class="btn btn-danger">Eliminar</a> 
       	 </td>
    </tr>
           <?php endforeach ?>
           	
      
         </table>
      </div>
      </div>
 
  </div>
<?php
require_once('pie.php');
?>