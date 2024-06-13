<?php

class Reservations {
    public $id;

    function CustomerReservationInsert($req) {
        global $con;

        $customer_name = $req['customer_name'];
        $time = $req['time'];
        $date = $req['date'];
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
            // Output a JavaScript snippet to trigger an alert for error
        }
    }

    function getReservations() {
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
            echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
            return [];
        }
    }
}

?>
