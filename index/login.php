<?php session_start();
  // $_SESSION['loggedin'] = false;
?>

<!-- Default variables -->
<?php require("../include/variables.php"); ?>
<?php
  // Declaring Custom Variable
  $pageName = "Login";
?>
<!-- The Header -->
<?php include("../include/header.php"); ?>
<?php include("../include/menu.php"); ?>

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
          <button class="btn btn-primary" type="submit" name="login">Login</button>
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
