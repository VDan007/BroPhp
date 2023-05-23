<?php
session_start();
 echo "home page";

 echo "session stuff: <br>";
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["password"] . "<br>";
?>