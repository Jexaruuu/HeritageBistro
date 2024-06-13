<?php
include ('includes/header.php');
if (!isset($_SESSION['userid']) || !isset($_SESSION['username'])) {
  header("Location: Login.php");
  exit();
}
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>

<div class="main-container">
  <?php include ('./includes/sidebar.php'); ?>
  <div class="main-wrapper">
    <a href="OrderAdd.php">
      <div class="main-wrapper-card">Make Order</div>
    </a>
    <a href="ReservationAdd.php">
      <div class="main-wrapper-card">Make Reservation</div>
    </a>
    <a href="OrderDisplay.php">
      <div class="main-wrapper-card">View Orders</div>
    </a>
  </div>
</div>
<div class="index-parent">

  <div class="left-navigation">


  </div>

  <div class="right-content">

    <div class="reservation-makeorder-vieworder">


      <a href="CustomerReservation.php">
        <div class="reservation-button">


          <h class="res-title"> MAKE A RESERVATION</h>


        </div>
      </a>

      <a href="OrderAdd.php">
        <div class="reservation-button">


          <h class="res-title"> MAKE AN ORDER</h>


        </div>
      </a>
      <a href="OrderDisplay.php">
        <div class="reservation-button">


          <h class="res-title"> VIEW ORDERS</h>


        </div>
      </a>






    </div>

    <!-- <h2>Welcome, <?php echo $username; ?>!</h2>
        <h2>FOR ORDERS</h2>
        <a href="OrderAdd.php">Add New Order</a>
        <a href="OrderDisplay.php">View Orders</a>
        <a href="Logout.php">logout</a> -->

  </div>


</div>

<?php
include ('includes/footer.php');
?>