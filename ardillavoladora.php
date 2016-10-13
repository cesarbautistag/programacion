<?php
//actividad de César Bautista y Andreu García
	class  ardillavoladora
{

//clases
public $numPatas="";
public $Peso="";
public $Tamano="";
public $distVuelo="";


//metodo
		//numero de patas que tiene la ardilla voladora
public function setNumPatas ($numpatas){
$this->numPatas=$numpatas;
}
public function getNumPatas (){
return $this->numPatas;
}

		//peso de la ardilla voladora
public function setPeso ($peso){
$this->Peso=$peso;
}
public function getPeso (){
return $this->Peso;
}

		//tamaño de la ardilla voladora
public function setTamano ($tamano){
$this->Tamano=$tamano;
}
public function getTamano (){
return $this->Tamano;
}

		//distancia de vuelo de la ardilla voladora
public function setdistVuelo ($distVuelo){
$this->distVuelo=$distVuelo;
}
public function getdistVuelo (){
return $this->distVuelo;
}

}
?>
