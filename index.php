<?php
 echo "hola";
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $image = $_POST['image'];
 $image_name = $_POST['image_name'];
 $decodificarimagen=base64_decode("$image");
 if(file_put_contents("gs://ubigiis_imagenes/hello.txt", "hola")){ 	
 echo "Imagen subida satisfactoriamente".$image_name;
 }else{
 echo "Error al subir la imagen";
 }}
  ?>
