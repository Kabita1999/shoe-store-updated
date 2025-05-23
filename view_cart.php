<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/database.php';
require_once 'includes/functions.php';
require_once 'includes/header.php';

$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<div class="cart-container">
    <h1>Your Cart</h1>

    <?php if (empty($cart)): ?>
        <div class="empty-cart">
            <p>Your cart is empty. <a href="index.php">Continue shopping</a></p>
        </div>
    <?php else: ?>
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $item): ?>
                    <tr>
                        <td><img src="assets/images/products/<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>"></td>
                        <td class="product-name"><div><?php echo htmlspecialchars($item['name']); ?></div></td>
                        <td class="price"><div><?php echo formatPrice($item['price']); ?></div></td>
                        <td class="quantity"><div><?php echo $item['quantity']; ?></div></td>
                        <td class="price"><div><?php echo formatPrice($item['price'] * $item['quantity']); ?></div></td>
                        <td>
                            <a href="update_cart.php?action=remove&id=<?php echo $item['id']; ?>" class="remove-btn">Remove</a>
                        </td>
                    </tr>
                    <?php $total += $item['price'] * $item['quantity']; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="cart-totals">
            <span class="total-label">Total:</span>
            <span class="total-value"><?php echo formatPrice($total); ?></span>
        </div>

        <div class="cart-actions">
            <a href="index.php" class="btn">Continue Shopping</a>
            <a href="checkout.php" class="btn">Proceed to Checkout</a>
            <a href="update_cart.php?action=clear" class="btn clear-cart">Clear Cart</a>
        </div>
    <?php endif; ?>
</div>

<?php require_once 'includes/footer.php'; ?>
