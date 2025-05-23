<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Category</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/delete_category.css">
</head>
<body>
<?php
require_once '../includes/auth.php';
require_admin();
require_once '../includes/config.php';
require_once '../includes/database.php';

$id = (int)($_GET['id'] ?? 0);

if ($id) {
    try {
        $stmt = $pdo->prepare("DELETE FROM tblCategories WHERE CategoryID = ?");
        $stmt->execute([$id]);

        // Check if the category was deleted
        if ($stmt->rowCount() > 0) {
            $_SESSION['success_message'] = "Category #$id deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Category #$id not found or could not be deleted.";
        }
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Error deleting category: " . $e->getMessage();
    }
} else {
    $_SESSION['error_message'] = "Invalid category ID.";
}

header("Location: categories.php");
exit;
?>
</body>
</html>
