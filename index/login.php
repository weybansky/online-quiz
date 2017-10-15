<?php
  // Default variables
  require("../include/variables.php");
  // Declaring Custom Variable
  $pageName = "Login";

  // Other Includes
  include("../include/header.php");
  include("../include/menu.php");
  require("../include/mysqli_connect.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <?php
      if ($loggedin == true){
        // header('location:profile.php');
        echo '<p class="text-center alert alert-success">You are already logged in</p>';
        echo '<p class="text-center alert alert-danger">Please log out first to login a new user</p>';
        header('location:profile.php');
      }else {
        echo '<p class="text-center alert alert-info">Please log in</p>';
      }
       ?>
    </div>
  </div>
</div>

<!-- Content -->
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
        <!-- username -->
        <!-- password -->
        <div class="form-group">
          <label for="username">Username</label>
          <input required name="username" type="username" class="form-control" placeholder="Enter Username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input required name="password" type="password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
          <button class="form-control btn btn-primary" type="submit" name="login">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php

  if (isset($_POST['login'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    $_SESSION['loggedin'] = true;

    header('location:index.php');
  }

  // After Successful login proceed to index.php
  // header(location:index.php);

 ?>

 <!-- The Footer -->
 <?php include("../include/footer.php"); ?>
