<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <h1>Commandes en Attente</h1>
    <?php if (count($new_orders) > 0 ) : ?>
        <ul>
            <?php foreach($new_orders as $order) :
                $url = $app_path . 'admin/orders' .
                       '?action=view_order&amp;order_id=' . $order->getID();
                ?>
                <li>
                    <a href="<?php echo $url; ?>">Commande # 
                    <?php echo $order->getID(); ?></a> pour
                    <?php echo htmlspecialchars($order->getCustomer()->getName()); ?> en Date de
                    <?php echo $order->getOrderDateFormatted(); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Il n'y a aucune commande expédiée.</p>
    <?php endif; ?>
    <h1>Shipped Orders</h1>
    <?php if (count($old_orders) > 0 ) : ?>
        <ul>
            <?php foreach($old_orders as $order) :
                $url = $app_path . 'admin/orders' .
                       '?action=view_order&amp;order_id=' . $order->getID();
                ?>
                <li>
                    <a href="<?php echo $url; ?>">Commande #
                    <?php echo $order->getID(); ?></a> pour
                    <?php echo htmlspecialchars($order->getCustomer()->getName()); ?> en Date de
                    <?php echo $order->getOrderDateFormatted(); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Il n'y a aucune commande expédiée.</p>
    <?php endif; ?>
</main>
<?php include '../../view/footer.php'; ?>