<?php 

//Funciones mayor menor

function mayor($array){
	return max($array);
    }

function menor($array){
	return min($array);
    }

$array = array(1,20,3,245,333,22,132,1000,45);

echo mayor($array) . "<br>";
echo menor($array) . "<br>";