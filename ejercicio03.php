<?php 

//Array asociativo de arrays

$array = array(
	array("base1"=>"juan","base2"=>"pepe"),
	array("escolta1"=>"adri","escolta2"=>"alex"),
	array("alero1"=>"pedro","alero2"=>"jorge"),
	array("alapivot1"=>"dani","alapivot2"=>"sergio"),
	array("pivot1"=>"ruben","pivot2"=>"samuel"));

echo "<ul>";

foreach ($array as $element){ 
	foreach ($element as $nombre => $valor) {
		echo "<li>";
		echo $nombre. ": ". $valor . '<br>'; 
		echo "</li>";
	}
}

echo "</ul>";
/*
echo "<pre>";
var_dump ($array);
echo "</pre>";
*/