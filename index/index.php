<?php
  session_start();

?>
<!-- Default variables -->
<?php require("../include/variables.php"); ?>
<?php
  // Declaring Custom Variable
  $pageName = "Welcome";

  // Setting other values
?>
<!-- The Header -->
<?php include("../include/header.php"); ?>
<?php include("../include/menu.php"); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>This is the Index Page</h1>
      </div>
    </div>
  </div>
</section>

<!-- The Footer -->
<?php include("../include/footer.php"); ?>
