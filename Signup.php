<?php
include ('includes/header.php');
include ('classes/Accounts.php');
$Account = new Accounts();
if (isset($_POST['btn'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  $Account->addUsers($_REQUEST);
}
?>
<div class="login-container">
  <div class="login-wrapper">
    <form method="POST" class="form-group">
      <div class="login-logo">
        <img src='./img/HB 1.png' id="logo" alt=''>
      </div>
      <h2>Create Your Account</h2>
      <div class="form-flex">
        <div class="form-input">
          <label class="form-label" for="first_name">Username</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" />
        </div>
        <div class="form-input">
          <label class="form-label" for="password">Password</label>
          <input type="text" id="password" name="password" class="form-control" placeholder="Password" />
        </div>
      </div>
      <div class="form-flex">
        <div class="form-input">
          <label class="form-label" for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name" />
        </div>
        <div class="form-input">
          <label class="form-label" for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name" />
        </div>
      </div>
      <div class="form-flex">
        <div class="form-input">
          <label class="form-label" for="role">Account Type</label>
          <select name="role" id="role">
            <option value=0>Administrator</option>
            <option value=1>Staff</option>
          </select>
        </div>
      </div>
      <input type="submit" value="Login" name="btn" id="btn" class="button-primary">
      <p>Already have an Account? <a href="Login.php">Login here</a></p>
    </form>
  </div>
  <div class="login-wrapper"></div>

  <?php
  include ('includes/footer.php');
  ?>