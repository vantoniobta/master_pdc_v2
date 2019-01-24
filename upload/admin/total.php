<?php
$msj = $_POST['config_json_canvas'];
$output = $msj;
$name='new_2018'.date('Y-m-d-H-s').rand(1500,1000000);
$archivo=fopen($name.".txt", 'w+');
fwrite($archivo, $output);
fclose($archivo);
?>