<?php
  // Default variables
  $pageName = "Home";
  $siteName = "Online Test";
  $titleTag = $pageName. " | " .$siteName;


  // session variables
  $loggedin = isset($_SESSION['loggedin'])? $_SESSION['loggedin'] : false;
  $username = isset($_SESSION['username'])? $_SESSION['username'] : "Guest";

?>
