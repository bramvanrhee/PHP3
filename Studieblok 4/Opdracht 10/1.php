<?php
  class User {
    protected $_username;

    public function __construct($name) {
      $this->_username = $name;
    }

    public function getUsername() {
      return $this->_username;
    }
  }

  $person = new User('Bram');
  echo $person->getUsername();
?>
