<?php include ('head.php') ?>
<table>
    <tr>
        <th>ID</th>
        <th> -- </th>
        <th>ID_Student</th>
        <th> -- </th>
        <th>Nombre</th>
        <th> -- </th>
        <th>Father-Name</th>
        <th> -- </th>
        <th>Age</th>
        <th> -- </th>
        <th>Semester</th>
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
   
    while($item = $listado->fetch())
    {
    ?>
    <tr>
        <td><?php echo $item['id']?></td>
        <th> -- </th>
        <td><?php echo $item['idStudentInfo']?></td>
        <th> -- </th>
        <td><?php echo $item['Name']?></td>
        <th> -- </th>
        <td><?php echo $item['Father_Name']?></td>
        <th> -- </th>
        <td><?php echo $item['Age']?></td>
        <th> -- </th>
        <td><?php echo $item['Semester']?></td>
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>