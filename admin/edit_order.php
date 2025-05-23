<?php
require_once '../includes/auth.php';
require_once '../includes/config.php';
require_once '../includes/database.php';
require_once '../includes/functions.php';

$id = (int)($_GET['id'] ?? 0);
if (!$id) header('Location: orders.php');

$stmt = $pdo->prepare("SELECT * FROM tblOrders WHERE OrderID = ?");
$stmt->execute([$id]);
$order = $stmt->fetch();

$statuses = ['Pending','Processing','Shipped','Completed','Cancelled'];

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $newStatus = $_POST['status'];
    $pdo->prepare("UPDATE tblOrders SET Status=? WHERE OrderID=?")
        ->execute([$newStatus,$id]);

    // log action
    logAdminAction($_SESSION['admin_id'], "Updated order #$id status to $newStatus");

    header('Location: orders.php');
    exit;
}

require_once '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/edit_order.css">
</head>
<body>
<h2>Edit Order #<?= $id ?></h2>
<form method="post">
  <label>Status:</label>
  <select name="status">
    <?php foreach($statuses as $s): ?>
      <option value="<?= $s ?>" <?= $order['Status']==$s?'selected':'' ?>><?= $s ?></option>
    <?php endforeach; ?>
  </select>
  <button class="btn">Save</button>
</form>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>
