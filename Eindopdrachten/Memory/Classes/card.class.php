<?php
  class Card {
    private $number;
    private $state = "closed";
    public function __construct($number) {
      $this->number = $number;
    }

    public function getHTML() {
      switch ($this->state) {
        case 'open':
          return "<img src=\"IMG/card" . $this->number . ".jpg" . "\" height=\"100px\">";
          break;
        case 'guessed':
          return "<img class=\"guessed\" src=\"IMG/card" . $this->number . ".jpg" . "\" height=\"100px\">";
          break;
        default:
          return "<img src=\"IMG/card_back.jpg" . "\" height=\"100px\">";
          break;
      }
    }

    public function turn() {
      if ($this->state == "closed") {
        $this->state = "open";
      }
      elseif ($this->state == "open") {
        $this->state = "closed";
      }
    }

    public function getState() {
      return $this->state;
    }

    public function setState($state) {
      $this->state = $state;
    }

    public function getNumber() {
      return $this->number;
    }

  }
 ?>
