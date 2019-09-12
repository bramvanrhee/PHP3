<?php
  class User {
    protected $voornaam;
    protected $achternaam;
    private $geboortedatum;

    public function setVoornaam($voornaam) {
      $this->voornaam = $voornaam;
    }

    public function setAchternaam($achternaam) {
      $this->achternaam = $achternaam;
    }

    public function setGeboortedatum($geboortedatum) {
      $this->geboortedatum = $geboortedatum;
    }

    public function getVoornaam() {
      return $this->voornaam;
    }

    public function getAchternaam() {
      return $this->achternaam;
    }

    public function getGeboortedatum() {
      return $this->geboortedatum;
    }
  }

  $person = new User();
  $person->setVoornaam("Bram");
  $person->setAchternaam("van Rhee");
  $person->setGeboortedatum("21-12-2001");

  echo "Voornaam: " . $person->getVoornaam() . "<br>";
  echo "Achternaam: " . $person->getAchternaam() . "<br>";
  echo "Geboortedatum: " . $person->getgeboortedatum() . "<br>";
?>
