<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/mostrar.css">
<title>Deportes</title>
</head>
    <body>
<center>
    <tr>Deportes en la Comunidad</tr>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Deporte</th>
                <th>Rank</th>
                <th>Dificultad</th>
                <th>Edades</th>
            </tr>
        </thead>
    <!-- -------------------------------- Titulos -------------------------------------------- -->
    <tbody>
    <?php
        include("open.php");
        $consulta = "SELECT * FROM deportes";
        $resultado = $conexion->query($consulta);
        while($row = $resultado->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['deporte']; ?></td>
            <td><?php echo $row['rank']; ?></td>
            <td><?php echo $row['dificultad']; ?></td>
            <td><?php echo $row['edades']; ?></td>
            
            <td><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?> "></td>
        </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</center>
</body>
</html>