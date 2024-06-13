<?php
include ('includes/header.php');
include ('classes/Menus.php');
$Menu = new Menus();

if (isset($_POST['btn'])) {
    $menu_name = $_POST['menu_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $Menu->addMenu($_POST, $_FILES['menu_image']);
}

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>

<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="order-wrapper">
        <form action="" method="POST" id="myForm" enctype="multipart/form-data" class="form-group">
            <h1>Add Menu</h1>
            <div class="form-flex">
                <div class="form-input">
                    <label>Menu Name</label>
                    <input type="text" id="menu_name" name="menu_name" placeholder="Menu Name" required>
                </div>
                <div class="form-input">
                    <label>Price</label>
                    <input type="text" id="price" name="price" placeholder="Price" required>
                </div>
            </div>
            <div class="form-flex">
                <div class="form-input">
                    <label for="category">Category</label>
                    <select name="category" id="category" required>
                        <option value="">Select a category</option>
                        <option value="Main Dish">Main Dish</option>
                        <option value="Soup">Soup</option>
                        <option value="Salad">Salad</option>
                        <option value="Appetizer">Appetizer</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </div>

                <div class="form-input">
                    <label>Image Upload</label>
                    <input type="file" id="menu_image" name="menu_image" class="menu_image" required>
                </div>
            </div>
            <div class="form-flex">
                <div class="form-input">
                    <label>Description</label>
                    <textarea name="description" id="description"></textarea>
                </div>
            </div>
            <button class="button-primary" name="btn" id="btn">Submit</button>
        </form>
    </div>
</div>

<?php
include ('includes/footer.php');
?>