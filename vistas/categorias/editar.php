
<?php include __DIR__ . '/../head.php';?>
<?php include __DIR__ . '/../menu.php';?>
 
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h1><?php echo $datos['titulo'] ?></h1>
    </div>
     
    <div class="col-sm">
    <p><?php echo $datos['texto'] ?></p>
  
    <?php
    // $listado es una variable asignada desde el controlador Categoría.
    $categoria = $detalle_categoria->fetch();   
    ?>

<form action="http://localhost/app-minishop/index.php?controlador=categoria&accion=actualizar" method="POST" role="form" class="form-horizontal">
  <div class="form-group">
    <label for="exampleFormControlInput1">idCategoria</label>
    <input type="text" name="idCategoria" class="form-control" readonly value="<?php echo $categoria['idCategoria']?>" id="idCategoria" placeholder="idCategoria">
  </div> 
<div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="Nombre" class="form-control" value="<?php echo $categoria['Nombre']?>" id="Nombre" placeholder="Nombre">
  </div> 

  <div class="form-group">
    <label for="exampleFormControlInput1">Fecha</label>
    <input type="text" name="Fecha" class="form-control"  value="<?php echo $categoria['Fecha']?>" id="Fecha" placeholder="Fecha">
  </div> 

  <div class="form-group">
    <label for="exampleFormControlInput1">Autor</label>
    <input type="text" name="Autor" class="form-control"  value="<?php echo $categoria['Autor']?>" id="Autor" placeholder="Autor">
  </div>   


<button type="submit" class="btn btn-default">Actualizar</button>
</form>



</div>
  </div>
</div>  
    
<?php include __DIR__ . '/../footer.php';?>