<?php
include ('includes/header.php');
include ('classes/Reservations.php');

$Reservation = new Reservations();
$reservations = $Reservation->getReservations();

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>

<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="list-container">
        <h1>Customer Reservations</h1>
        <div class="table-wrapper">
            <table class="reservation-table">
                <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Reservation Time</th>
                        <th>Reservation Date</th>
                        <th>Phone Number</th>
                        <th>Guests</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($reservations)) { ?>
                        <?php foreach ($reservations as $reservation) { ?>
                            <tr>
                                <td><?php echo $reservation['customer_name']; ?></td>
                                <td><?php echo $reservation['time']; ?></td>
                                <td><?php echo $reservation['date']; ?></td>
                                <td><?php echo $reservation['phone_number']; ?></td>
                                <td><?php echo $reservation['guest']; ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="5">No reservations found.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
?>
