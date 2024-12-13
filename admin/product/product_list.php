<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <h1 class="top">Gestionnaire de Produits - Liste des Produits</h1>
    <p>Pour voir, modifier ou supprimer un produit, sélectionnez le produit.</p>
    <p>Pour ajouter un produit, sélectionnez le lien "Ajouter un Produit"</p>
    <h1>
        <?php echo htmlspecialchars($current_category->getName()); ?>
    </h1>
    <?php if (count($products) == 0) : ?>
        <p>il n'y a pas de produits dans cette catégorie.</p>
    <?php else : ?>
            <?php foreach ($products as $product) : ?>
            <p>
                <a href=".?action=view_product&amp;product_id=<?php
                          echo $product->getID(); ?>">
                    <?php echo htmlspecialchars($product->getName()); ?>
                </a>
            </p>
            <?php endforeach; ?>
    <?php endif; ?>

    <h1>Liens</h1>
    <p><a href=".?action=show_add_edit_form">Ajouter un Produit</a></p>

</main>
<?php include '../../view/footer.php'; ?>