<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Logout</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/logout.css">
</head>
<body>
<?php
session_start();
session_destroy();
header("Location: login.php");
exit();
?>
</body>
</html>
