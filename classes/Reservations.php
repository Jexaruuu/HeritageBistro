<?php

class Reservations {
    public $id; // Assuming this is intended for future use

    // Function to insert a reservation into database
    public function CustomerReservationInsert($req) {
        global $con;

        $customer_name = $req['customer_name'];
        $time = date('h:i A', strtotime($req['time'])); // Format time as 12hrs with AM/PM
        $date = date('m/d/Y', strtotime($req['date'])); // Format date as mm/dd/yyyy
        $phone_number = $req['phone_number'];
        $guest = $req['guest'];

        try {
            // Prepare and execute the SQL statement
            $sql = "INSERT INTO `tbl_reservation` (customer_name, time, date, phone_number, guest) 
                    VALUES (:customer_name, :time, :date, :phone_number, :guest)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':customer_name', $customer_name);
            $stmt->bindParam(':time', $time);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':phone_number', $phone_number);
            $stmt->bindParam(':guest', $guest);
            $stmt->execute();

        } catch (PDOException $e) {
            // Log the error to a file or database
            error_log('PDOException: ' . $e->getMessage());
            // Display a generic error message to the user
            echo "<script>alert('An error occurred. Please try again later.');</script>";
        }
    }

    // Function to retrieve reservations from database
    public function getReservations() {
        global $con;

        try {
            // Prepare and execute the SQL statement
            $sql = "SELECT * FROM `tbl_reservation` ORDER BY `date`, `time`";
            $stmt = $con->prepare($sql);
            $stmt->execute();

            // Fetch all reservations
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Handle the error
            error_log('PDOException: ' . $e->getMessage());
            echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
            return []; // Return an empty array in case of error
        }
    }
}

?>
