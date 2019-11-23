<?php  


require('db.php') ;  
 
$sql = "SELECT * FROM productos";
$resultado = $mysqli->query($sql);
   
  
   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lerr fotos</title>
</head>
<body>
      
    <h3>Mostrar fotos </h3>
   
    <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)): ?>

       <p><strong>Nombre del producto: </strong> <?= $row['name'] ?></p>
        <p><img src="/imagenes/uploads/<?= $row['file']?>" alt=""></p>

     <?php endwhile ?>

</body>
</html>