<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<?php if (!isset($product_order_count)) { $product_order_count = 0; } ?>
<main>
    <h1>Gestionnaire de Produits - Voir le Produit</h1>
    
    <!-- display product -->
    <?php include '../../view/product.php'; ?>

    <!-- display buttons -->
    <br>
    <div id="edit_and_delete_buttons">
        <form action="." method="post" id="edit_button_form" >
            <input type="hidden" name="action" value="show_add_edit_form">
            <input type="hidden" name="product_id"
                   value="<?php echo $product->getID(); ?>">
            <input type="hidden" name="category_id"
                   value="<?php echo $product->getCategory()->getID(); ?>">
            <input type="submit" value="Edit Product">
        </form>
        <?php if ($product_order_count == 0) : ?>
        <form action="." method="post" id="delete_button_form" >
            <input type="hidden" name="action" value="delete_product">
            <input type="hidden" name="product_id"
                   value="<?php echo $product->getID(); ?>">
            <input type="hidden" name="category_id"
                   value="<?php echo $product->getCategory()->getID(); ?>">
            <input type="submit" value="Delete Product">
        </form>
        <?php endif; ?>
    </div>
    <div id="image_manager">
        <h1>Gestionnaire d'Images</h1>
        <form action="." method="post" enctype="multipart/form-data" id="upload_image_form">
            <input type="hidden" name="action" value="upload_image">
            <input type="file" name="file1"><br>
            <input type="hidden" name="product_id"
                   value="<?php echo $product->getID(); ?>">
            <input type="submit" value="Upload Image">
        </form>
        <p><a href="<?php echo $app_path; ?>images/<?php echo $product->getCode(); ?>.png">
             Image en Grand</a></p>
        <p><a href="<?php echo $app_path; ?>images/<?php echo $product->getCode(); ?>_s.png">
             Image petite</a></p>
    </div>
</main>
<?php include '../../view/footer.php'; ?>