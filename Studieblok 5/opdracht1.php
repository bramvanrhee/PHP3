<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      include 'Includes/autoloader.inc.php';

      $person = new user();

      $person->setVoornaam("Bram ");
      $person->setAchternaam("van Rhee");
      $person->setGeboortedatum("21-12-2001");

      echo $person->getVoornaam();
      echo $person->getAchternaam();
      echo $person->getGeboortedatum();
    ?>

  </body>
</html>
