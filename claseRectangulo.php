<?php

class Rectangulo
{
    private $_base; 
    private $_altura;

    function __construct($base, $altura)
    {
        $this->_base = $base;
        $this->_altura = $altura;
    }

    function _perimetro()
    {
        return ($this->_base * 2) + ($this->_altura * 2);
    }

    function _superficie()
    {
        return ($this->_base * $this->_altura );
    }
    function _getBase()
    {
        return $this->_base;
    }
    function _getAltura()
    {
        return $this->_altura;
    }
    function _setBase($base)
    {
        $this->_base = $base;
    }
    function _setAltura($altura)
    {
        $this->_altura = $altura;
    }

}