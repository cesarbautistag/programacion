<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Setters y Getters</title>
  </head>
  <body>
    <?php
    //aquí voy a incluir las clases creadas por Andreu
    include "ardillavoladora.php";
    //generamos los objetos

    $ardilla1=new ardillavoladora();
    $ardilla1->setNumPatas("6");
    echo "Patas= ".$ardilla1->getNumPatas();

    $ardilla1->setPeso("300");
    echo "<br>Peso en gramos= ".$ardilla1->getPeso();

    $ardilla1->setTamano("40");
    echo "<br>Tamaño de la ardilla en cm= ".$ardilla1->getTamano();

    $ardilla1->setDistVuelo("4");
    echo "<br>Distancia de vuelo recorrida por la ardilla en metros= ".$ardilla1->getDistVuelo();


     ?>

  </body>
</html>
