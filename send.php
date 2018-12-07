<?php 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


$destino = "diego.acuna@ufrontera.cl"
$copia = "pablo.acuna@ufrontera.cl"
$asunto = "LabQcaAR"


$cuerpo = "De: $nombre \n";
$cuerpo .= "Correo: $correo \n";
$cuerpo .= "Mensaje: $mensaje";



mail($destino,$asunto,$cuerpo);

?>