<?php
  // Default variables
  require("../include/variables.php");
  // Declaring Custom Variable
  $pageName = "$username's Profile";

  // Other Includes
  include("../include/header.php");
  include("../include/menu.php");
  require("../include/mysqli_connect.php");
?>

<!-- Displaying Profile details -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <ul class="list-group">
        <li class="list-group-item">Profile text</li>
        <li class="list-group-item">Profile text</li>
        <li class="list-group-item">Profile text</li>
        <li class="list-group-item">Profile text</li>
        <li class="list-group-item">Profile text</li>
        <li class="list-group-item">Profile text</li>
      </ul>
    </div>
  </div>
</div>

 <!-- The Footer -->
 <?php include("../include/footer.php"); ?>
