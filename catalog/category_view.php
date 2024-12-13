<?php include '../view/header.php'; ?>
 <?php /*include '../view/sidebar.php';*/ ?> 
 

<main>
    <h1><?php echo htmlspecialchars($category_name); ?></h1>
    <?php if (count($products) == 0) : ?>
        <p>Il n'y a aucun produit dans cette catégorie.</p>
    <?php else: ?>
        <?php foreach ($products as $product) : ?>
        <p>
            <a href="<?php echo '?product_id=' . $product->getID(); ?>">
                <?php echo htmlspecialchars($product->getName()); ?>
            </a>
        </p>
        <?php endforeach; ?>
    <?php endif; ?>
</main>
<?php include '../view/footer.php'; ?>