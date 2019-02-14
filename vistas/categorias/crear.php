
<?php include __DIR__ . '/../head.php';?>
<?php include __DIR__ . '/../menu.php';?>
 
<div class="container">
  <div class="row">
    <div class="col-sm">
    <h1><?php echo $datos['titulo'] ?></h1>
    </div>
     
    <div class="col-sm">
    <p><?php echo $datos['texto'] ?></p>
  

    <form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</div>
  </div>
</div>  
    
<?php include __DIR__ . '/../footer.php';?>