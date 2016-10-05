<?php

include_once("claseRectangulo.php");

$prueba = new Rectangulo (10,20);

echo $prueba->_perimetro() . "<br>";

echo $prueba->_superficie() . "<br>";

$prueba->_setBase(11);

$prueba->_setAltura(22);

echo $prueba->_getBase() . "<br>";

echo $prueba->_getAltura() . "<br>";