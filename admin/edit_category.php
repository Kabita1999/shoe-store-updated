<?php
require_once '../includes/auth.php';
require_once '../includes/config.php';
require_once '../includes/database.php';

$id = $_GET['id'] ?? null;
if (!$id) header('Location: categories.php');

$stmt = $pdo->prepare("SELECT * FROM tblCategories WHERE CategoryID = ?");
$stmt->execute([$id]);
$category = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['CategoryName']);

    if ($name !== '') {
        $stmt = $pdo->prepare("UPDATE tblCategories SET CategoryName = ? WHERE CategoryID = ?");
        $stmt->execute([$name, $id]);
        header('Location: categories.php');
        exit;
    }
}

require_once '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/edit_category.css">
</head>
<body>
    <h2>Edit Category</h2>
    <form method="post">
        <label>Category Name:</label>
        <input type="text" name="CategoryName" value="<?= htmlspecialchars($category['CategoryName']) ?>" required>
        <button type="submit" class="btn">Update</button>
    </form>
</body>
</html>

<?php require_once '../includes/footer.php'; ?>
