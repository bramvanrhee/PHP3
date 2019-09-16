<?php
  class Huis {

    public $kamers;
    public $toiletten;
    public $verwarming;
    public $soortverwarming;
    public $straat;
    public $huisnummer;
    public $plaats;
    public $vierkantemeter;
    public $woz;
    public $belasting;

    function __construct($straat, $huisnummer, $plaats) {
      $this->straat = $straat;
      $this->huisnummer = $huisnummer;
      $this->plaats = $plaats;
    }

//Set Functions
    public function setKamers($kamers) {
      $this->kamers = $kamers;
    }

    public function setToiletten($toiletten) {
      $this->toiletten = $toiletten;
    }

    public function setVerwarming($verwarming) {
      $this->verwarming = $verwarming;
    }

    public function setSoortVerwarming($soortverwarming) {
      $this->soortverwarming = $soortverwarming;
    }

    public function setVierkanteMeter($vierkantemeter) {
      $this->vierkantemeter = $vierkantemeter;
    }

    public function setWoz($woz) {
      $this->woz = $woz;
    }

    public function setBelasting($belasting) {
      $this->belasting = $belasting;
    }

//Get Functions
    public function getKamers() {
      return $this->kamers;
    }

    public function getToiletten() {
      return $this->toiletten;
    }

    public function getVerwarming() {
      return $this->verwarming;
    }

    public function getSoortVerwarming() {
      return $this->soortverwarming;
    }

    public function getStraat() {
      return $this->straat;
    }

    public function getHuisnummer() {
      return $this->huisnummer;
    }

    public function getPlaats() {
      return $this->plaats;
    }

    public function GetVierkanteMeter() {
      return $this->vierkantemeter;
    }

    public function getWoz() {
      return $this->woz;
    }

    public function getBelasting() {
      return $this->belasting;
    }

    public function bepaalBelasting($woz, $kamers, $plaats) {
        $this->belasting = 0;
        //Woz waarde
        if ($this->woz <= 100000) {
          $this->belasting += 600;
        }
        if ($this->woz > 100000 && $woz <= 200000) {
          $this->belasting += 2000;
        }
        if ($this->woz > 200000) {
          $this->belasting += 6000;
        }
        //Aantal kamers
        if ($this->kamers == 1) {
          $this->belasting += 100;
        }
        if ($this->kamers == 2) {
          $this->belasting += 300;
        }
        if ($this->kamers >= 3) {
          $this->belasting += 800;
        }
        //Plaats
        if ($this->plaats == "Amsterdam" || $this->plaats == "Groningen" || $this->plaats == "Rotterdam") {
          $this->belasting += 1000;
        }
        return $this->belasting;
    }
  }
?>
