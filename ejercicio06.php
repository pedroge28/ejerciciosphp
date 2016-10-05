<?php

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$codigo = $_POST["codigo"];
$genero = $_POST["genero"];
$paginas = $_POST["numpags"];
$leido = $_POST["leido"];

if ($leido) {
    $estaLeido = "está leido";
} else {
    $estaLeido = "no está leido";
}

echo "Titulo: " . $titulo . ", Autor: " . $autor . ", Codigo: " . $codigo . ", Genero: " . $genero . ", Número de páginas: " . $paginas . ", y " . $estaLeido . ".";
