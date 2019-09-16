<?php
  class user {
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

?>
