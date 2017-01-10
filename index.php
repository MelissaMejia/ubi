<?php
 echo "ultimo";
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $image = $_POST['image'];
 $image_name = $_POST['image_name'];
 $decodificarimagen=base64_decode("$image");
 if(file_put_contents("gs://imagenes_ubigiis/hello.txt", "hola")){ 	
 echo "Imagen subida satisfactoriamente".$image_name;
 }else{
 echo "Error al subir la imagen";
 }}
  ?>
