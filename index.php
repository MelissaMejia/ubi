<?php
 echo "hola";
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $image = $_POST['image'];
 $image_name = $_POST['image_name'];
 $decodificarimagen=base64_decode("$image");
 if(file_put_contents("imagenes/".$image_name.".JPG",$decodificarimagen)){ 	
 echo "Imagen subida satisfactoriamente";
 }else{
 echo "Error al subir la imagen";
 }}

  ?>