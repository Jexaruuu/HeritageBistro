<?php
include ('includes/header.php');
include ('classes/Menus.php');

$Menu = new Menus();
$MenuList = $Menu->displayMenu();

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $Menu->deleteMenu($id);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}


$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
?>
<div class="main-container">
    <?php include ('./includes/sidebar.php'); ?>
    <div class="menu-container1">
        <?php foreach ($MenuList as $menu) { ?>
            <div class="menu-item">
                <div class="card-img">
                    <?php if ($menu['image']) { ?>
                        <img src="./uploads/<?php echo $menu['image']; ?>" alt="User Image"
                            class="food-rounded-circle food-img-fluid" width="100"
                            style="object-fit: cover; width: 100%; height: 100%;">
                    <?php } else { ?>
                        <p>No Image</p>
                    <?php } ?>
                </div>
                <div class="card-body">
                    <h class="ard-title"> <?php echo $menu['menu_name']; ?></h>
                    <p class="card-text"><?php echo $menu['price']; ?><span>Php</span></p>
                    <p class="card-text">
                        <?php echo $menu['category']; ?>
                    </p>
                    <p class="card-text">
                        <?php echo $menu['description']; ?>
                    </p>

                    <div class="actions">
                    <form action="MenuUpdate.php" method="GET" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $menu['id']; ?>">
                        <button type="submit" class="button-primary">Update</button>
                    </form>
                    <form action="" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $menu['id']; ?>">
                        <button type="submit" name="delete" class="button-warning"
                            onclick="return confirm('Are you sure you want to delete this menu?')">Delete</button>
                    </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include ('includes/footer.php'); ?>