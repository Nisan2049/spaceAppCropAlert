<?php

?>
  <h2>Wel-Come to Crop Alert</h2>

  <form role="form" class="col-sm-8" id="signup" action="index.php?page=signup_process.php" method="POST">
    <div class="form-group ">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group ">
      <label for="email">Email-Id:</label>
      <input type="emailid" class="form-control" id="email" name="email" placeholder="Enter Email">
    </div>
    <div class="form-group ">
      <label for="username">Username:</label>
      <input type="Username" class="form-control" id="username" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="password"placeholder="Enter password">
    </div>
    <div class="form-group ">
      <label for="countryname">Country-Name:</label>
      <input type="countryname" class="form-control" id="countryname" name="country" placeholder="Enter Country Name">
    </div>
    <div class="form-group">
      <label for="mobileno">Mobile-No:</label>
      <input type="mobileno" class="form-control" id="mobileno" name="phone" placeholder="Enter mobile-no">

    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>


