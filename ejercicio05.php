<?php 

//Funciones ordenar

function ordenar($array){
	sort($array);
	return $array;

	/*
	$arrAux = array();

	foreach ($array as $element => $val1){ 
		foreach ($array as $element2 => $val2){ 
			if($val1 < $val2){
				$valAux = $val1;
			}
		}
		echo $valAux . "<br>";
		array_push($arrAux,$valAux);
	}
	echo "<pre>";
	var_dump ($arrAux);
	echo "</pre>";
	return $arrAux;
	*/
    
    }

$array = array(1,20,3,245,333,22,132,1000,45);


$arrayOrd =  ordenar($array);

foreach ($arrayOrd as $element => $val){ 
	echo $val . "<br>";
}