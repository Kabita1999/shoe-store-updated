<?php
$orderId = $_GET['order_id'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Complete</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/order_complete.css">
</head>
<body>
<h2>Order Completed</h2>
<p>Thank you! Your order ID is: <strong><?= htmlspecialchars($orderId) ?></strong></p>
<a href="index.php">Back to Home</a>
</body>
</html>
