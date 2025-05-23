<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: /shoe-store/admin/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Authentication</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/auth.css">
</head>
<body>
    <!-- ...existing code... -->
</body>
</html>
