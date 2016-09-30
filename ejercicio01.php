<?php 

$array = array();

array_push($array,"uno");
array_push($array,"dos");
array_push($array,"tres");
array_push($array,"cuatro");
array_push($array,"cinco");


foreach ($array as $element){ 
    echo $element . '<br>'; 
}