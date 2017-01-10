<?php
 echo "ultima";
if($_SERVER['REQUEST_METHOD']=='POST'){

 $image = $_POST['image'];
 $image_name = $_POST['image_name'];
 $decodificarimagen=base64_decode("$image");

$options = ['gs' => ['acl' => 'public-read']];
$context = stream_context_create($options);
$fileName = "gs://imagenes_ubigiis/".$image_name.".JPG";
if(file_put_contents($fileName, $decodificarimagen, 0, $context)){
echo "Imagen subida satisfactoriamente".$image_name;
 }else{
 echo "Error al subir la imagen";
 }
}


  ?>
