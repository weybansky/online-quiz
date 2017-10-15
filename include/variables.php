<?php
  session_start();

  // Default variables
  $pageName = "Home";
  $siteName = "Online Test";

  // session variables
  $loggedin = isset($_SESSION['loggedin'])? $_SESSION['loggedin'] : false;
  $username = isset($_SESSION['username'])? $_SESSION['username'] : "Guest";

?>
