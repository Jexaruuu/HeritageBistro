<?php
include ('includes/header.php');
include ('OrderDisplayInclude/header.php');
include ('classes/Orders.php');
$Order = new Orders();
$OrderList = $Order->displayOrders();

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

?>
<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="list-container">
        <?php foreach ($OrderList as $order) { ?>
            <div class="order-card">
                <div class="order-summary">
                <div class="order-amount-header">
                    <div class="order-left">
                        <div class="order-id">
                            <p>Order ID: <?php echo $order['order_id']; ?> </p>
                        </div>
                        <div class="total-amount">Total Amount: ₱<?php echo number_format($order['total_amount'], 2); ?>
                        </div>
                    </div>
                    <div class="order-right">
                        <div class="order-date">
                            <p>Order Date: </p> <?php echo $order['order_date']; ?>
                        </div>
                    </div>
                </div>
                <div class="order-details">
                    <?php foreach ($order['order_details'] as $detail) { ?>
                        <li><?php echo $detail['menu_name']; ?> - ₱<?php echo number_format($detail['price'], 2); ?> x
                            <?php echo $detail['quantity']; ?> (Subtotal:
                            ₱<?php echo number_format($detail['subtotal'], 2); ?>)
                        </li>
                        <p>Status : 
                        <?php if ($order['status'] == 0) { ?>
                            Pending
                        <?php } else { ?>
                            Received
                        <?php } ?>
                    </p>
                    <?php } ?>
                </div>
                </div>
                <div class="order-actions">
                    <form action="OrderDetails.php" method="GET">
                        <input type="hidden" name="id" value="<?php echo $order['order_id']; ?>">
                        <button type="submit" class="button-primary">View</button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>

<?php
include ('includes/footer.php');
?>