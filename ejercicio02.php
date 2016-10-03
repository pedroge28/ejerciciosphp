<?php 

//Array asociativo

$array = array("uno"=>"1","dos"=>"2","tres"=>"3","cuatro"=>"4","cinco"=>"5");

foreach ($array as $position => $element){ 
    echo $position. ": ". $element . '<br>'; 
}

/*
echo "<pre>";
var_dump ($array);
echo "</pre>";
*/