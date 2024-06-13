<?php
include ('includes/header.php');
include ('MenuDisplayInclude/header.php');
include ('classes/Menus.php');

$Menu = new Menus();
$MenuList = $Menu->displayMenu();

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>
<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="list-container">
        <h1>Heritage Bistro Menu</h1>
        <div class="list-wrapper">
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
                        <p class="card-text"><?php echo $menu['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include ('includes/footer.php'); ?>