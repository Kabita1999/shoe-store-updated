<?php
require_once '../includes/auth.php';
require_once '../includes/config.php';
require_once '../includes/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['CategoryName']);

    if ($name !== '') {
        $stmt = $pdo->prepare("INSERT INTO tblCategories (CategoryName) VALUES (?)");
        $stmt->execute([$name]);
        header('Location: categories.php');
        exit;
    }
}

require_once '../admin/admin_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/add_category.css">
</head>
<body>
    <h2>Add New Category</h2>
    <form method="post">
        <label>Category Name:</label>
        <input type="text" name="CategoryName" required>
        <button type="submit" class="btn">Add</button>
    </form>
</body>
</html>

<?php require_once '../includes/footer.php'; ?>
