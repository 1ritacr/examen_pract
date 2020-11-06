<?php 
require_once('cabe.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-12">
         <h1>roles</h1>
         <p> 
         	<a href="roles-edit.php" class="btn btn-success" >nuevo</a>
         </p>
         <table class="table table-striped">
           <tr>
           	<th>id</th>
       
           	<th>descripcion</th>
           	
           	<th></th>
           </tr>
          
           <?php foreach ($roles as $item): ?>

   <tr>
       	<td><?= $item['id']?></td>
       <td><?= $item['descripcion']?></td>
       	 
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