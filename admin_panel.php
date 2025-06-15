<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <div class="dashboard-container">
    <header>
      <h1>Admin Dashboard</h1>
      <p>Welcome, <?= htmlspecialchars($_SESSION['name']) ?> (<?= htmlspecialchars($_SESSION['role']) ?>)</p>
    </header>

    <nav class="dashboard-nav">
      <a href="manage_users.php">Manage Users</a>
      <a href="manage_appointments.php">Manage Appointments</a>
      <a href="logout.php" class="logout-btn">Logout</a>
    </nav>

    <main>
      <p>This is your admin control panel. Choose an action from above.</p>
    </main>
  </div>
</body>
</html>
