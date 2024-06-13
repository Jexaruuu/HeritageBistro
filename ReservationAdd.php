<?php
include ('includes/header.php');
include ('classes/Reservations.php');
$Reservation = new Reservations();

if (isset($_POST['btn'])) {
    $reservationData = [
        'customer_name' => $_POST['customer_name'],
        'time' => $_POST['time'],
        'date' => $_POST['date'],
        'phone_number' => $_POST['phone_number'],
        'guest' => $_POST['guest']
    ];
    $Reservation->CustomerReservationInsert($reservationData);
}

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>

<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="order-wrapper">
        <form action="ReservationDisplay.php" method="POST" id="myForm" class="form-group">
            <h1>Add Reservation</h1>
            <div class="form-flex">
                <div class="form-input">
                    <label>Customer Name</label>
                    <input type="text" id="customer_name" name="customer_name" placeholder="Customer Name" required>
                </div>
                <div class="form-input">
                    <label>Time</label>
                    <input type="time" id="time" name="time" placeholder="Time" required>
                </div>
            </div>
            <div class="form-flex">
                <div class="form-input">
                    <label>Date</label>
                    <input type="date" id="date" name="date" placeholder="Date" required>
                </div>
                <div class="form-input">
                    <label>Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="form-flex">
                <div class="form-input">
                    <label>Number of Guests</label>
                    <input type="number" id="guest" name="guest" placeholder="Number of Guests" required>
                </div>
            </div>
            <button class="button-primary" name="btn" id="btn">Submit</button>
        </form>
    </div>
</div>

<?php
include ('includes/footer.php');
?>
