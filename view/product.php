<h1><?php echo htmlspecialchars($product->getName()); ?></h1>
<div id="left_column">
    <p><img src="<?php echo $product->getImagePath($app_path); ?>"
            alt="<?php echo $product->getImageAltText(); ?>" /></p>
</div>

<div id="right_column">
    <p><b>Prix Catalogue:</b>
        <?php echo '€' . $product->getPrice(); ?></p>
    <p><b>Réduction:</b>
        <?php echo $product->getDiscountPercentFormatted() . '%'; ?></p>
    <p><b> Prix:</b>
        <?php echo '€' . $product->getDiscountPriceFormatted(); ?>
        (Epargne
        <?php echo '€' . $product->getDiscountAmountFormatted(); ?>)</p>
    <form action="<?php echo $app_path . 'cart' ?>" method="get" 
          id="add_to_cart_form">
        <input type="hidden" name="action" value="add" />
        <input type="hidden" name="product_id"
               value="<?php echo $product->getID(); ?>" />
        <?php if(isset($is_admin)) : ?>
            <input type="hidden" name="admin" value="true" />
        <?php endif; ?>
        
        <p><b>Quantité:</b>&nbsp;
        <input type="text" name="quantity" value="1" size="2" />
        <input type="submit" value="Ajouter au Panier" />&nbsp;
        <?php echo $fields->getField('quantity')->getHTML(); ?></p>
    </form>
    <h2>Description</h2>
    <?php echo add_tags($product->getDescription()); ?>
</div>
