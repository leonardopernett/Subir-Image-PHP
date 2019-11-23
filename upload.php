<?php
$nombre_imagen = $_FILES["file"]["name"];
$tipo_imagen   =  $_FILES["file"]["type"];
$tamano_imagen =  $_FILES["file"]["size"];
$name = $_POST['name'];

        // //ruta carpeta destino
        $carpeta_destino = $_SERVER["DOCUMENT_ROOT"]."/imagenes/uploads/";
        // //movemos la imagen del directoria temporal al escogido
        move_uploaded_file($_FILES["file"]["tmp_name"], $carpeta_destino.$nombre_imagen);

  
     require('db.php') ;  

     $sql = "INSERT INTO productos (name, file) VALUES ('$name', '$nombre_imagen')";
	 $resultado = $mysqli->query($sql);
?>