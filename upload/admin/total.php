<?php

$msj     = $_POST['config_json_canvas'];

$id      = $_POST['product_id_pdc'];
 echo $id;
$output  = $msj;
$name    = 'new_custom_'.date('Y-m-d-H-s').rand(1500,1000000);
$archivo = fopen($name.".txt", 'w+');
fwrite($archivo, $output);
fclose($archivo);




?>
