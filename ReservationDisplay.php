<?php
// Start session (if not already started)


// Include necessary files
include('includes/header.php'); // Assuming this contains your HTML head and navigation
include('classes/Reservations.php');

// Initialize Reservations object
$Reservation = new Reservations();

// Handle form submission for inserting reservations
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming form data is POSTed
    $req = [
        'customer_name' => $_POST['customer_name'],
        'time' => $_POST['time'],
        'date' => $_POST['date'],
        'phone_number' => $_POST['phone_number'],
        'guest' => $_POST['guest']
    ];

    $Reservation->CustomerReservationInsert($req);

    // Redirect to prevent form resubmission on page refresh
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Retrieve reservations from database
$reservations = $Reservation->getReservations();

// Get username and userid from session (assuming they are set properly elsewhere)
$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>

<div class="main-container">
    <?php include('includes/sidebar.php'); ?> <!-- Assuming this contains your sidebar -->
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
                                <td><?php echo htmlspecialchars($reservation['customer_name']); ?></td>
                                <td><?php echo date('h:i A', strtotime($reservation['time'])); ?></td> <!-- Display as 12hrs with AM/PM -->
                                <td><?php echo date('m/d/Y', strtotime($reservation['date'])); ?></td> <!-- Display as mm/dd/yyyy -->
                                <td><?php echo htmlspecialchars($reservation['phone_number']); ?></td>
                                <td><?php echo htmlspecialchars($reservation['guest']); ?></td>
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

<?php include('includes/footer.php'); ?> <!-- Assuming this contains your HTML footer -->
