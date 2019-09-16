<?php
  class User {
    protected $achternaam;
    private $geboortedatum;

    public function __construct($achternaam, $geboortedatum) {
      $this->achternaam = $achternaam;
      $this->geboortedatum = $geboortedatum;
    }

    public function getAchternaam() {
      return $this->achternaam ;
    }

    public function getGeboortedatum() {
      return $this->geboortedatum;
    }
  }

  $person = new User("van Rhee", "21-12-2001");
  echo "Achternaam: " . $person->getAchternaam() . "<br>";
  echo "Geboortedatum: " . $person->getGeboortedatum() . "<br>";
?>
