<?php
/*
echo "<pre>";
//var_dump ($_SERVER);
echo "</pre>";

echo "El método de la petición es ". $_SERVER["REQUEST_METHOD"];
*/
$array = new Array();

array_push($array,"uno");
array_push($array,"dos");
array_push($array,"tres");
array_push($array,"cuatro");
array_push($array,"cinco");


foreach ($array as $element){ 
    echo $element . '<br>'; 
}