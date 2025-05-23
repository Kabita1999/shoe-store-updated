<?php
session_start();
require_once '../includes/config.php';
require_once '../includes/database.php';

$error = '';
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if (isset($_SESSION['admin_id'])) {
    // Redirect to dashboard if already logged in
    header("Location: /shoe-store/admin/dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if (!empty($_SESSION['admin_login_error'])): ?>
            <p class="error"><?= htmlspecialchars($_SESSION['admin_login_error']) ?></p>
            <?php unset($_SESSION['admin_login_error']); ?>
        <?php endif; ?>
        <form method="post" action="login_process.php">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
