
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
    <div class="col-sm">
    
    <table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Fecha</th>
        <th>Autor</th>
     
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
    while($articulos = $listado_articulos->fetch())
    {
    ?>
    <tr>
    <td><a href=index.php?controlador=articulo&accion=detalle&id=<?php echo $articulos['idArticulo']?>><?php echo $articulos['idArticulo']?></a></td>
        <td><?php echo $articulos['Titulo']?></td>
        <td><?php echo $articulos['Fecha']?></td>
        <td><?php echo $articulos['Autor']?></td>
 
    </tr>
    <?php
    }
    ?>
</table>