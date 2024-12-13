<?php 
require_once('../util/main.php');     // update include path
require_once('../util/valid_admin.php'); // require admin user

require_once('../model/category.php');
require_once('../model/category_db.php'); 

$categories = CategoryDB::getCategories(); 
  
include '../view/admin-header.php';
include '../view/sidebar_admin.php';
?>

<main>
    <p><?php echo $app_path ?></p>
    <h1>Admin Menu</h1>
    <p><a href="product">Product Manager</a></p>
    <p><a href="category">Category Manager</a></p>
    <p><a href="orders">Order Manager</a></p>
    <p><a href="account">Account Manager</a></p>
</main>

<?php include '../view/footer.php'; ?>
