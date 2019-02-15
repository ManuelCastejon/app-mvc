
<?php include __DIR__ . '/../head.php';?>
<?php include __DIR__ . '/../menu.php';?>
 
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h1><?php echo $datos['titulo'] ?></h1>
    </div>
     
    <div class="col-sm">
    <p><?php echo $datos['texto'] ?></p>
  

<form action="http://localhost/app-minishop/index.php?controlador=categoria&accion=insertar" method="POST" role="form" class="form-horizontal">
<div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="Nombre">
  </div> 
   
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" name="Descripcion" id="exampleFormControlTextarea1" placeholder="Descripción.." rows="3"></textarea>
  </div> 

<button type="submit" class="btn btn-default">Enviar</button>
</form>



</div>
  </div>
</div>  
    
<?php include __DIR__ . '/../footer.php';?>