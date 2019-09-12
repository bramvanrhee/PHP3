<?php
  class User {
    public $achternaam;
    public $geboortedatum;

    public function setAchternaam($achternaam) {
      $this->achternaam = $achternaam;
    }

    public function setGeboortedatum($geboortedatum) {
      $this->geboortedatum = $geboortedatum;
    }

    public function getAchternaam() {
      return $this->achternaam;
    }

    public function getGeboortedatum() {
      return $this->geboortedatum;
    }
  }

  $person = new User();
  $person->setAchternaam("van Rhee");
  $person->setGeboortedatum("21-12-2001");

  echo "Achternaam: " . $person->getAchternaam() . "<br>";
  echo "Geboortedatum: " . $person->getGeboortedatum() . "<br>";
?>
