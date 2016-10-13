<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //clases de cesar
    include "claseCoche.php";
    //objetos
      $coche1=new claseCoche();
      $coche1->setGasolinaActual("20");
      echo "Gasolina actual en litros= ".$coche1->getGasolinaActual();

      $coche1->setPonerGasolina("25");
      echo "<br>La gasolina que vamos a poner en el vehiculo= ".$coche1->getPonerGasolina();

      $coche1->setDistanciaRecorrida("150");
      echo "<br>La distancia que el coche ha recorrido= ".$coche1->getDistanciaRecorrida();

      $coche1->setSubirVentanas("4");
      echo "<br>El porcentaje que deseamos subir las ventanas= ".$coche1->getSubirVentanas();
    ?>
  </body>
</html>
