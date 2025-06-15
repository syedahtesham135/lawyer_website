<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
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
      <h1>Customer Dashboard</h1>
      <p>Welcome, <?= htmlspecialchars($_SESSION['name']) ?> (<?= htmlspecialchars($_SESSION['role']) ?>)</p>
    </header>

  <h1>Customer Dashboard</h1>
<nav class="dashboard-nav">
  <a href="search_lawyers.php">Search Lawyers</a>
  <a href="my_appointments.php">My Appointments</a>
  <a href="logout.php" class="logout-btn">Logout</a>
</nav>


    <main>
      <p>This is your admin control panel. Choose an action from above.</p>
    </main>
  </div>
</body>
</html>

