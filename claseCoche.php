<?php
//Ejercicio realizado por César Bautista y Andreu García

class ClaseCoche
{
  //Creación de las clases
  public $gasolinaActual=1;
  public $ponerGasolina=1;
  public $distanciaRecorrida=1;
  public $subirVentanas="";

//Declaración de un método

    //gasolina actual
  public function setGasolinaActual ($gasolinaActual){
    $this->gasolinaActual=$gasolinaActual;
  }
  public function getGasolinaActual (){
    return $this->gasolinaActual;
  }

    //poner gasolina
  public function setPonerGasolina ($ponerGasolina){
    $this->ponerGasolina=$ponerGasolina;
  }
  public function getPonerGasolina (){
    return $this->ponerGasolina;
  }

    //distancia recorrida
  public function setDistanciaRecorrida ($distanciaRecorrida){
    $this->distanciaRecorrida=$distanciaRecorrida;
  }
  public function getDistanciaRecorrida (){
    return $this->distanciaRecorrida;
  }

   //subir ventanas
  public function setSubirVentanas ($subirVentanas){
     $this->subirVentanas=$subirVentanas;
  }
  public function getSubirVentanas (){
    return $this->subirVentanas;
  }

}
 ?>
