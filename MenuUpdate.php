<?php
include ('includes/header.php');
include ('classes/Menus.php');

$Menu = new Menus();
if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
    $MenuList = $Menu->getMenuById($_REQUEST['id']);
    if ($MenuList) {
        foreach ($MenuList as $menu) {
            $menu_name = $menu['menu_name'];
            $category = $menu['category'];
            $price = $menu['price'];
            $description = $menu['description'];
        }
    } else {
        echo "<script>alert('Error Updating Menu');</script>";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $menu_name = $_POST['menu_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $Menu->updateMenu($_REQUEST['id'], $menu_name, $category, $price, $description);

    header('Location: MenuDisplay.php');
    exit;
}

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>
<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="order-wrapper">
        <form action="" method="POST" enctype="multipart/form-data" class="form-group">
            <h1>Update Menu : <?php echo ($menu_name); ?></h1>
            <div class="form-flex">
                <div class="form-input">
                    <label>Menu Name</label>
                    <input type="text" id="menu_name" name="menu_name" placeholder="Menu Name"
                        value="<?php echo ($menu_name); ?>" required>
                </div>
                <div class="form-input">
                    <label>Price</label>
                    <input type="text" id="price" name="price" placeholder="Price"
                        value="<?php echo htmlspecialchars($price); ?>" required>
                </div>
            </div>
            <div class="form-flex">
                <div class="form-input">
                    <label for="category">Category</label>
                    <select name="category" id="category" required>
                        <option value="" hidden>Select a category</option>
                        <option value="Main Dish" <?php echo ($category == 'Main Dish') ? 'selected' : ''; ?>>Main Dish
                        </option>
                        <option value="Soup" <?php echo ($category == 'Soup') ? 'selected' : ''; ?>>Soup</option>
                        <option value="Salad" <?php echo ($category == 'Salad') ? 'selected' : ''; ?>>Salad</option>
                        <option value="Appetizer" <?php echo ($category == 'Appetizer') ? 'selected' : ''; ?>>Appetizer
                        </option>
                        <option value="Dessert" <?php echo ($category == 'Dessert') ? 'selected' : ''; ?>>Dessert</option>
                    </select>
                </div>

                <!-- <div class="form-input">
                    <label>Image Upload</label>
                    <input type="file" id="menu_image" name="menu_image" class="menu_image" required>
                </div> -->
            </div>
            <div class="form-flex">
                <div class="form-input">
                    <label>Description</label>
                    <textarea name="description" id="description"><?php echo $description; ?></textarea>
                </div>
            </div>
            <button type="submit" name="btn" id="btn" class="button-primary">Submit</button>
        </form>
    </div>
</div>




<?php include ('includes/footer.php'); ?>