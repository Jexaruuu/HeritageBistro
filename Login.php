<?php
include ('includes/header.php');
include ('classes/Accounts.php');
$Account = new Accounts();
if (isset($_REQUEST['btn'])) {
  $Account->checkUser($_REQUEST);
}
?>

<div class="login-container">
  <div class="login-wrapper">
    <form method="POST" class="form-group">
      <div class="login-logo">
        <img src='./img/HB 1.png' id="logo" alt=''>
      </div>
      <h2>Welcome to Heritage Bistro - Where Tradition Meets Taste. </h2>
      <div class="form-input">
        <label class="form-label" for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" />
      </div>
      <div class="form-input">
        <label class="form-label" for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" />
      </div>
      <input type="submit" value="Login" name="btn" id="btn" class="button-primary">
      <p>Don't have an Account? <a href="Signup.php">Create Account</a></p>
    </form>
    
  </div>
  <div class="login-wrapper"></div>
</div>

<?php
include ('includes/footer.php');
?>