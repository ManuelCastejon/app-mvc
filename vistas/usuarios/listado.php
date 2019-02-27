
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
    
    <?php // Extraer TODAS las FILAS de la tabla USUARIO
    while($usuario = $listado_usuarios->fetch())
    {
    ?><table>
    <tr>  <?php //Imprime el valor de todas las COLUMNAS ?>
        <td><?php echo $usuario['idUsuario']?></td>
        <td><?php echo $usuario['Nombre']?></td>
        <td><?php echo $usuario['Password']?></td>
        <td><?php echo $usuario['Email']?></td>
        <td><?php echo $usuario['Estado']?></td>
    </tr>
    </table>
    <?php
    }
    ?>
    </div>
  </div>
</div>    

    
 
<?php include __DIR__ . '/../footer.php';?>  
   

 