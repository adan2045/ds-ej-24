<?php


class Auto {


private $Marca;
private $Modelo;
private $Version;
private $Anio;


public function getMarca()
{
    return $this->Marca;
}

public function setMarca($ma)
{
    $this->Marca = $ma;
}

public function getModelo()
{
    return $this->Modelo;
}

public function setModelo($m)
{
    $this->Modelo = $m;
}

public function getVersion()
{
    return $this->Version;
}

public function setVersion($v)
{
    $this->Version = $v;
}

public function getAnio()
{
    return $this->Anio;
}

public function setAnio($Anio)
{
    $this->Anio = $Anio;
}


public function MostrarDatos(){ 
    
    echo 'marca: '. $this->getMarca() . '<br>';
    echo 'modelo: '. $this->getModelo() . '<br>';
    echo 'version: '. $this->getVersion() . '<br>';
    echo 'año : '. $this->getAnio() . '<br>';

}


}

