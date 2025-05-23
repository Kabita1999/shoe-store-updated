<?php
session_start();

$action = $_GET['action'] ?? '';
$id = (int)($_GET['id'] ?? 0);

if ($action === 'remove' && $id && isset($_SESSION['cart'][$id])) {
    unset($_SESSION['cart'][$id]);
    $_SESSION['success_message'] = "Product removed from cart.";
}

header('Location: view_cart.php');
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cart</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/update_cart.css">
</head>
<body>
<!-- ...existing code... -->
</body>
</html>
