<!DOCTYPE html>
<html>
  <head>
    <title>Opdracht 1 (Huis)</title>
  </head>
  <body>

    <?php
      include 'Includes/autoloader.inc.php';

      $huis1 = new Huis("Anreperstraat", 167, "Assen");

      echo "<h1>Huis 1</h1>";
      echo "<h2>Info</h2>";

      $huis1->setKamers("7");
      $huis1->setToiletten("2");
      $huis1->setVerwarming("10");
      $huis1->setSoortVerwarming("Radiator");
      $huis1->setVierkanteMeter("232");
      $huis1->setWoz("450000");
      $huis1->bepaalBelasting($huis1->getWoz(), $huis1->getKamers(), $huis1->getPlaats());

      echo "Aantal kamers: " . $huis1->getKamers() . " kamers" . "<br>";
      echo "Aantal toiletten: " . $huis1->getToiletten() . " toiletten" . "<br>";
      echo "Aantal verwarmingen: " . $huis1->getVerwarming() . " verwarmingen" . "<br>", "Soort verwarming: " . $huis1->getSoortVerwarming() . "<br>";
      echo "Straatnaam: " . $huis1->getStraat() . "<br>", "Huisnummer: " . $huis1->getHuisnummer() . "<br>", "Plaats: " . $huis1->getPlaats() . "<br>";
      echo "Vierkante meter: " . $huis1->getVierkanteMeter() . "m² <br>";
      echo "Woz waarde: €" . $huis1->getWoz() . "<br>";
      echo "Belasting: €" . $huis1->getBelasting() . "<br>";
    ?>

  </body>
</html>
