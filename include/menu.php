<?php
  // session_start();
  // if Logged in Display Full Menu
  // if not logged in display sign up menu;
  $welcomePageLink   = "../index/index.php";
  $profilePageLink   = "../index/profile.php";
  $resultPageLink    = "../index/result.php";
  $loginPageLink     = "../index/login.php";
  $registerPageLink  = "../index/register.php";
  $logoutPageLink    = "../index/logout.php";



  $navLoggedIn ='<nav id="loggedin">
                  <a href="'. $welcomePageLink .'">Home</a>
                  <a href="'. $profilePageLink .'">profile('.$username.')</a>
                  <a href="'. $resultPageLink .'">Check results</a>
                  <a href="'. $logoutPageLink .'">LogOut</a>
                </nav>';



  $navLoggedOut ='<nav id="loggedout">
                  <a href="'. $loginPageLink .'">profile('.$username.')</a>
                  <a href="'. $loginPageLink .'">Login</a>
                  <a href="'. $registerPageLink .'">Register</a>
                </nav>';


  if ($loggedin == true){
    echo $navLoggedIn;
  }elseif ($loggedin == false) {
    echo $navLoggedOut;
  }else {
    echo "Something went wrong";
  }

?>
