<?php include '../view/header.php'; ?>
<?php include 'view/sidebar.php'; ?>
<main>
    <h1>Votre Commande</h1>
    <p>Numéro de Commande: <?php echo $order_id; ?></p>
    <p>Date de Commande: <?php echo $order->getOrderDateFormatted(); ?></p>
    <h2>Expédition</h2>
    <p>Date d'expédition:
        <?php
            if ($order->hasShipDate()) {
                echo $order->getShipDateFormatted();
            } else {
                echo 'Pas encore expédié';
            }
        ?>
    </p>
    <p><?php echo htmlspecialchars($shipping_address->getLine1()); ?><br>
        <?php if ( $shipping_address->hasLine2()) : ?>
            <?php echo htmlspecialchars($shipping_address->getLine2()); ?><br>
        <?php endif; ?>
        <?php echo htmlspecialchars($shipping_address->getCity()); ?>, <?php 
              echo htmlspecialchars($shipping_address->getState()); ?>
        <?php echo htmlspecialchars($shipping_address->getZipCode()); ?><br>
        <?php echo htmlspecialchars($shipping_address->getPhone()); ?>
    </p>
    <h2>Billing</h2>
    <p>Card Number: ...<?php echo substr($order->getCard()->getNumber(), -4); ?></p>
    <p><?php echo htmlspecialchars($billing_address->getLine1()); ?><br>
        <?php if ( $billing_address->hasLine2() ) : ?>
            <?php echo htmlspecialchars($billing_address->getLine2()); ?><br>
        <?php endif; ?>
        <?php echo htmlspecialchars($billing_address->getCity()); ?>, <?php 
              echo htmlspecialchars($billing_address->getState()); ?>
        <?php echo htmlspecialchars($billing_address->getZipCode()); ?><br>
        <?php echo htmlspecialchars($billing_address->getPhone()); ?>
    </p>
    <h2>Détails de la Commande</h2>
    <table id="cart">
        <tr id="cart_header">
            <th class="left">Article</th>
            <th class="right">Prix Catalogue</th>
            <th class="right">Epargne</th>
            <th class="right">Coût</th>
            <th class="right">Quantité</th>
            <th class="right">Total</th>
        </tr>
        <?php
        $subtotal = 0;
        foreach ($order_items as $item) :
            $product = ProductDB::getProduct($item->getProductID());
            $subtotal += $item->getLineTotal();
            ?>
            <tr>
                <td><?php echo htmlspecialchars($product->getName()); ?></td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $item->getPrice()); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $item->getDiscountAmount()); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $item->getCost()); ?>
                </td>
                <td class="right">
                    <?php echo $item->getQuantity(); ?>
                </td>
                <td class="right">
                    <?php echo sprintf('$%.2f', $item->getLineTotal()); ?>
                </td>
            </tr>
        <?php endforeach; ?>
        <tr id="cart_footer">
            <td colspan="5" class="right">Sous-total:</td>
            <td class="right">
                <?php echo sprintf('$%.2f', $subtotal); ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="right">
                <?php echo htmlspecialchars($shipping_address->getState()); ?> Taxe:
            </td>
            <td class="right">
                <?php echo sprintf('$%.2f', $order->getTaxAmount()); ?>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="right">Shipping:</td>
            <td class="right">
                <?php echo sprintf('$%.2f', $order->getShipAmount()); ?>
            </td>
        </tr>
            <tr>
            <td colspan="5" class="right">Total:</td>
            <td class="right">
                <?php
                    $total = $order->getTotal($subtotal);
                    echo sprintf('$%.2f', $total);
                ?>
            </td>
        </tr>
</table>
</main>
<?php include '../view/footer.php'; ?>
