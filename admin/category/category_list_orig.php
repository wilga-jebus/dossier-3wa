<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>

    <h1>Gestionnaire de Catégories</h1>
    <table id="category_table">
        <?php foreach ($categories as $category) : ?>
        <tr>
            <form action="." method="post" >
            <td>
                 <input type="text" name="name"
                        value="<?php echo htmlspecialchars($category->getName()); ?>">
            </td>
            <td>
                <input type="hidden" name="action" value="update_category">
                <input type="hidden" name="category_id"
                       value="<?php echo $category->getID(); ?>">
                <input type="submit" value="Update">
            </td>
            </form>
            <td>
                <?php if ($category->getProductCount() == 0) : ?>
                <form action="." method="post" >
                    <input type="hidden" name="action" value="delete_category">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category->getID(); ?>">
                    <input type="submit" value="Delete">
                </form>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Ajouter une Catégorie</h2>
    <form action="." method="post" id="add_category_form" >
        <input type="hidden" name="action" value="add_category">
        <input type="text" name="name">
        <input type="submit" value="Add">
    </form>

</main>
<?php include '../../view/footer.php'; ?>