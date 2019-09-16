<?php
  spl_autoload_register(function ($className) {
    $path = "Classes/";
    include_once $path . $className . ".class.php";
  });
?>
