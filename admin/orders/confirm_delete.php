<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <h2>Supprimer la Commande</h2>
    <p>Numéro de Commande: <?php echo $order->getID(); ?></p>
    <p>Date de la Commande: <?php echo $order->getOrderDateFormatted(); ?></p>
    <p>Clien: <?php echo htmlspecialchars($customer->getName()) . ' (' . 
            htmlspecialchars($customer->getEmail()) . ')'; ?></p>
    <p>Etes-vous sûr de vouloir supprimer cette commande ?</p>
    <form action="." method="post">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="order_id"
               value="<?php echo $order->getID(); ?>">
        <input type="submit" value="Delete Order">
    </form>
    <form action="." method="post">
        <input type="submit" value="Cancel">
    </form>
</main>
<?php include '../../view/footer.php'; ?>