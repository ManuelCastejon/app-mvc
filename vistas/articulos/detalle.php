
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
 
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
    $articulo = $detalle_articulo->fetch();   
    ?>
    <tr>
    <td><a href=index.php?controlador=articulo&accion=detalle&id=<?php echo $articulo['idArticulo']?>><?php echo $articulo['idArticulo']?></a></td>
        <td><?php echo $articulo['Titulo']?></td>
        <td><?php echo $articulo['Fecha']?></td>
        <td><?php echo $articulo['Autor']?></td>
 
    </tr>
    
</table>
  </div>
</div>    
 
<?php include __DIR__ . '/../footer.php';?>