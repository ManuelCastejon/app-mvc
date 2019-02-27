
<?php include __DIR__ . '/../head.php';?>


<table>    
     
    <tr>
        <h1><?php echo $datos['titulo'] ?></h1>
        <p><?php echo $datos['texto'] ?></p>
    </tr>    
   
    <?php // Extraer TODAS las FILAS de la tabla USUARIO
    while($usuario = $listado_usuarios->fetch())
    {
    ?>
    <tr>  <?php //Imprime el valor de todas las COLUMNAS ?>
        <td><?php echo $usuario['idUsuario']?></td>
        <td><?php echo $usuario['Nombre']?></td>
        <td><?php echo $usuario['Password']?></td>
        <td><?php echo $usuario['Email']?></td>
        <td><?php echo $usuario['Estado']?></td>
    </tr>
    <?php
    }
    ?>
    
</table>
</body>
</html>