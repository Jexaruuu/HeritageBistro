<?php
include ('includes/header.php');
include ('classes/Orders.php');

$Order = new Orders();
$order = $Order->getOrderById($_REQUEST['id']); // Use singular $order instead of $OrderList

// Handle button click
if (isset($_POST['btn'])) {
    $orderId = $_POST['order_id'];
    if ($Order->updateOrderStatus($orderId)) {
        // If update is successful, redirect to the same page to avoid continuous refresh
        header("Location: OrderDetails.php?id=$orderId");
        exit; // Stop further execution
    } else {
        echo "<script>alert('Something Went Wrong');</script>";
    }
}

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>

<div class="main-container">
    <?php include('./includes/sidebar.php'); ?>
    <div class="list-container">
        <div class="receipt">
            <div class="billedto">
                <p class="order-id">OrderID: 
                    <?php echo $order['order_id']; ?></p>
                <p class="order-date">Date: 
                    <?php echo $order['order_date']; ?></p>
                <p class="order-total">Total Amount:
                    <?php echo number_format($order['total_amount'], 2); ?></p>
            </div>
            <table class="receipt-table">
                <thead>
                    <tr>
                        <th>Menu Name</th>
                        <th>Price</th>
                        <th>QTY</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($order['order_details'] as $detail) { ?>
                        <tr>
                            <td class="menu-name-column"><?php echo $detail['menu_name']; ?></td>
                            <td class="menu-price-column">₱<?php echo number_format($detail['price'], 2); ?></td>
                            <td class="menu-qty-column"><?php echo $detail['quantity']; ?></td>
                            <td class="menu-subtotal-column">₱<?php echo number_format($detail['subtotal'], 2); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="summary-section">
                <div class="subtotal">
                    <p>Sub Total: </p>
                    <p>₱<?php echo number_format($order['total_amount'], 2); ?></p>
                </div>
                <div class="status">
                    <p>Status: </p>
                    <p>
                        <?php if ($order['status'] == 0) { ?>
                            Pending
                        <?php } else { ?>
                            Received
                        <?php } ?>
                    </p>
                </div>
            </div>
            <form action="" method="post" class="status-form">
                <input type="hidden" name="order_id" value="<?php echo $order['order_id']; ?>">
                <button type="submit" name="btn" class="button-primary">Received</button>
            </form>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
?>
