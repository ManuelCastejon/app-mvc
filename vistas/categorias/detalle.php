
<?php include __DIR__ . '/../head.php';?>
<?php include __DIR__ . '/../menu.php';?>

<div class="container">
  <div class="row">
  <div class="col-sm">
    <h1><?php echo $datos['titulo'] ?></h1>
  </div>
    
     
    <div class="col-sm">
    <p><?php echo $datos['texto'] ?></p>
    </div>
    <table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Autor</th>
        <th>Estado</th>
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
    $categoria = $detalle_categoria->fetch();   
    ?>
    <tr>
    <td><a href=index.php?controlador=categoria&accion=detalle&id=<?php echo $categoria['idCategoria']?>><?php echo $categoria['idCategoria']?></a></td>
        <td><?php echo $categoria['Nombre']?></td>
        <td><?php echo $categoria['Fecha']?></td>
        <td><?php echo $categoria['Autor']?></td>
        <td><?php echo $categoria['Estado']?></td>
    </tr>
    
</table>
  </div>
</div>    
 
<?php include __DIR__ . '/../footer.php';?>