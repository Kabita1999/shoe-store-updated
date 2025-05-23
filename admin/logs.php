<?php
require_once '../includes/auth.php';
require_admin();
require_once '../includes/config.php';
require_once '../includes/database.php';
require_once '../includes/functions.php';

// Fetch logs from tblAdminLogs
$stmt = $pdo->query("
    SELECT l.LogID, l.Timestamp, l.Action, a.FullName AS AdminName
    FROM tblAdminLogs l
    JOIN tblAdmins ad ON l.AdminID = ad.AdminID
    JOIN tblUsers a ON ad.UserID = a.UserID
    ORDER BY l.Timestamp DESC
");
$logs = $stmt->fetchAll();

require_once '../admin/admin_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Logs</title>
    <link rel="stylesheet" href="/shoe-store/assets/css/logs.css">
</head>
<body>

<h2>Admin Activity Logs</h2>

<?php if (empty($logs)): ?>
    <p>No logs found.</p>
<?php else: ?>
    <table>
        <thead>
            <tr>
                <th>Log ID</th>
                <th>Timestamp</th>
                <th>Admin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= htmlspecialchars($log['LogID']) ?></td>
                    <td><?= htmlspecialchars($log['Timestamp']) ?></td>
                    <td><?= htmlspecialchars($log['AdminName']) ?></td>
                    <td><?= htmlspecialchars($log['Action']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>

<?php require_once '../includes/footer.php'; ?>

</body>
</html>
