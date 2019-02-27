<?php include ('head.php');?>
<?php include ('menu.php');?>

<table>    
     
    <tr>
        <h1><?php echo $datos['titulo'] ?></h1>
        <p><?php echo $datos['texto'] ?></p>
    </tr>  

     
<?php
    while($usuario = $listado_usuarios->fetch())
    {
    ?>
    <tr>
        <td><?php echo $usuario['idUsuario']?></td>
        <td><?php echo $usuario['Nombre']?></td>
    </tr>
    <?php
    }
    ?>
    
</table>

<?php include ('footer.php');?>
