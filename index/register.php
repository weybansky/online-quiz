<form action="" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" placeholder="Firstname Lastname">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label for="gender"></label>
    <select class="form-control" name="gender">
      <option selected value="default">Select Gender</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="not-specified">Others</option>
    </select>
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input name="username" type="username" class="form-control" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control">
  </div>
  <div class="form-group">
    <button type="submit" name="register">Register</button>
  </div>
</form>
