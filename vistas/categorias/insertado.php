
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
    Insertado la categoría con ID = <?php echo $datos['resultado_insert_categoria'] ?> Correctamente!!! 
    </div>
  </div>
</div>    
 
<?php include __DIR__ . '/../footer.php';?>