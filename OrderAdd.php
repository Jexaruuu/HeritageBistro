<?php
include ('includes/header.php');
include ('includes/sidebar.php');
include ('classes/Orders.php');
include ('classes/Menus.php');

$Order = new Orders();
$Menus = new Menus();
$MenuList = $Menus->displayMenu();

if (isset($_POST['btn'])) {
    $data = [
        'total_amount' => $_POST['total_amount']
    ];

    $orderDetails = [];

    // Loop through menu items
    foreach ($_POST['menu_name'] as $key => $menuName) {
        $orderDetails[] = [
            'menu_id' => $_POST['menu_id'][$key],
            'menu_name' => $menuName,
            'price' => $_POST['price'][$key],
            'quantity' => $_POST['quantity'][$key]
        ];
    }

    $Order->addOrder($data, $orderDetails);
}
?>
<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <form method="POST" class="order-wrapper">
        <div class="menu-container">
            <?php foreach ($MenuList as $menu) { ?>
                <div class="menu-item card" data-category="<?php echo $menu['category']; ?>"
                    onclick="selectMenu(<?php echo $menu['id']; ?>, '<?php echo $menu['menu_name']; ?>', <?php echo $menu['price']; ?>, '<?php echo $menu['image']; ?>')">
                    <div class="card-img">
                        <img src="./uploads/<?php echo $menu['image']; ?>" alt="User Image" class="rounded-circle img-fluid"
                            width="100">
                    </div>
                    <div class="card-body">
                        <h class="card-title"><?php echo $menu['menu_name']; ?></h>
                        <p class="card-text"><?php echo $menu['category']; ?></p>
                        <p class="card-text">₱<?php echo number_format($menu['price'], 2); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="menu-container">
            <h3>Order Summary</h3>
            <div class="menu-items-details" id="selectedMenuDetails"></div>
            <div class="payment-summary">
                <h1>Payment Summary</h1>
                <div class="subtotal-payment">
                    <div class="sub-text">
                        <p>Subtotal:</p>
                    </div>
                    <div class="amount">
                        <p>₱<span id="totalAmountDisplay">0.00</span></p>
                    </div>
                </div>
                <input type="hidden" name="total_amount" id="total_amount" value="0">
                <button type="submit" name="btn" class="button-primary">Place Order</button>
            </div>
        </div>
    </form>
</div>
<script>
    function selectMenu(menuId, menuName, price, image) {
        const menuDetails = document.getElementById('selectedMenuDetails');
        const existingCard = document.querySelector(`div[data-menu-id="${menuId}"]`);

        if (existingCard) {
            const quantitySpan = existingCard.querySelector('.quantity');
            const quantityInput = existingCard.querySelector('input[name="quantity[]"]');
            quantityInput.value = parseInt(quantityInput.value) + 1; // Increase quantity by 1
            quantitySpan.textContent = quantityInput.value; // Update displayed quantity
            updateSubtotal(existingCard); // Update subtotal for the existing card
        } else {
            const newCard = document.createElement('div');
            newCard.setAttribute('data-menu-id', menuId); // Set data attribute for menu ID
            newCard.classList.add('card');
            newCard.innerHTML = `
                <div class="card-body-invoice">
                    <div class="card-img-invoice">
                        <img src="./uploads/${image}" alt="Menu Image" class="rounded-circle img-fluid" width="100">
                    </div>
                    <div class="card-invoice">
                        <div class="shanghai">
                            <div class="card-title">
                                <h1 class="card-title">${menuName}</h1>
                            </div>
                            <div class="card-remove">
                                <img src="./img/close.png" alt="Remove" class="remove-img" onclick="removeMenu(${menuId})">
                            </div>
                        </div>
                        <p class="card-text">Quantity : x<span class="quantity">1</span><input type="hidden" name="quantity[]" value="1"></p>
                        <p class="card-text">₱${price.toFixed(2)}</p>
                        <p class="card-text-subtotal">₱<span class="subtotal">${price.toFixed(2)}</span></p>
                    </div>
                    <input type="hidden" name="menu_id[]" value="${menuId}">
                    <input type="hidden" name="menu_name[]" value="${menuName}">
                    <input type="hidden" name="price[]" value="${price.toFixed(2)}">
                </div>
            `;
            menuDetails.appendChild(newCard);
        }

        updateTotalAmount(); // Update total amount
    }

    function updateSubtotal(card) {
        const price = parseFloat(card.querySelector('.card-text:nth-child(3)').textContent.replace('₱', ''));
        const quantity = parseInt(card.querySelector('input[name="quantity[]"]').value);
        const subtotal = price * quantity;
        card.querySelector('.subtotal').textContent = subtotal.toFixed(2);
        updateTotalAmount(); // Update total amount
    }

    function updateTotalAmount() {
        const subtotals = document.querySelectorAll('.subtotal');
        let total = 0;
        subtotals.forEach(subtotal => {
            total += parseFloat(subtotal.textContent);
        });
        document.getElementById('totalAmountDisplay').textContent = total.toFixed(2);
        document.getElementById('total_amount').value = total.toFixed(2);
    }

    function removeMenu(menuId) {
        const card = document.querySelector(`div[data-menu-id="${menuId}"]`);
        if (card) {
            card.remove();
            updateTotalAmount(); // Update total amount
        }
    }

    function filterMenu(category) {
        const allMenuItems = document.querySelectorAll('.menu-item');
        if (category === 'All') {
            allMenuItems.forEach(item => item.classList.remove('hidden'));
        } else {
            allMenuItems.forEach(item => {
                if (item.getAttribute('data-category') === category) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }
    }
</script>