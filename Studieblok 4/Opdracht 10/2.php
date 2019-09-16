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

  class Customer extends User {
    private $_customerId;

    public function __construct($username, $customerId) {
        $this->_username = $username;
        $this->_customerId = $customerId;
    }
  }

  $customer = new Customer('jan', 1);
  echo $customer->getUsername();
?>
