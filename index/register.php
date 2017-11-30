<?php
  // Default variables
  require("../include/variables.php");
  // Declaring Custom Variable
  $pageName = "Register";

  // Other Includes
  include("../include/header.php");
  include("../include/menu.php");
  require("../include/mysqli_connect.php");
?>

<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
       <!-- Form Action -->
       <?php
       if (isset($_POST['registerNewUser'])){
         $newUserFName = $_POST['fname'];
         $newUserLName = $_POST['lname'];
         $newUserEmail = $_POST['email'];
         $newUserSex   = $_POST['sex'];
         $newUsername  = $_POST['username'];
         $newPassword  = $_POST['password'];
         //  Encrypting password
         $newPassword  = sha1($newPassword);

         // $sqlInsertNewUser = "INSERT INTO users(firstName, lastName, email, sex, username, passowrd) VALUES('$newUserFName', '$newUserLName', $newUserEmail, $newUserSex, $newUsername, $newPassword) ";
         $sqlInsertNewUser = "INSERT INTO users(id, firstName, lastName, email, sex, username, password) VALUES('', '$newUserFName', '$newUserLName', '$newUserEmail', '$newUserSex', '$newUsername', '$newPassword') ";
         if (mysqli_query($conn, $sqlInsertNewUser)){
           echo '<div class="text-center alert alert-success">
           <i style="color:green;" class="fa fa-check-circle fa-3x" aria-hidden="true"></i><br>
           <p>Registration Sucessful</p>
           </div>';
         }else{
           echo '<div class="text-center alert alert-danger">
           <i style="color:red;" class="fa fa-times fa-3x" aria-hidden="true"></i><br>
           <p>Something went wrong=> '. mysqli_error($conn).'</p>
           </div>';
         }
       }
       ?>

       <!-- Checling if user is already loggedin to display appropriate message -->
       <?php
       if ($loggedin == true){
         // header('location:profile.php');
         echo '<p class="text-center alert alert-success">You are logged in</p>';
         echo '<p class="text-center alert alert-danger">Please log out to register a new user</p>';
       }else {
         echo '<p class="text-center alert alert-info">Please fill the form below to register</p>';
       }
       ?>
    </div>
  </div>
</div>


<!-- Register Page Content -->
<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="form-horizontal">
        <div class="form-group">
          <label for="name">Name</label>
          <input required name="fname" type="text" class="form-control" placeholder="Firstname">
          <input required name="lname" type="text" class="form-control" placeholder="Lastname">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input required name="email" type="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label for="sex">Sex</label>
          <select required class="form-control" name="sex">
            <option selected value="default">Select Gender</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="OTHERS">Others</option>
          </select>
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input name="username" type="text" class="form-control" placeholder="Choose a Username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input required name="password" type="password" class="form-control">
        </div>
        <div class="form-group">
          <button class="form-control btn btn-primary" type="submit" name="registerNewUser">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>

 <!-- The Footer -->
<?php include("../include/footer.php"); ?>
