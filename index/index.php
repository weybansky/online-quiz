<?php
  // Default variables
  require("../include/variables.php");
  // Declaring Custom Variable
  $pageName = "Welcome";

  // Other Includes
  include("../include/header.php");
  include("../include/menu.php");
  require("../include/mysqli_connect.php");
?>

<!-- Content -->
<section>
  <div class="container">
    <div class="row text-center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>This is the Index Page</h1>
      </div>
    </div>
  </div>
</section>

<!-- The Footer -->
<?php include("../include/footer.php"); ?>
