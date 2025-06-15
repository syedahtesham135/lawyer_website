<?php
include 'connection.php';
session_start();

if (!isset($_GET['id'])) {
    echo "Invalid request.";
    exit;
}

$lawyer_id = $_GET['id'];
$user_id = $_GET['id'];

// Get lawyer profile
$stmt = $pdo->prepare("
    SELECT users.name, users.email, users.phone, lawyers.*
    FROM users
    INNER JOIN lawyers ON users.id = lawyers.user_id
    WHERE users.id = '{$$user_id}';
");
$stmt->execute([$lawyer_id]);
$lawyer = $stmt->fetch();

if (!$lawyer) {
    echo "Lawyer not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lawyer Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Lawyer Profile</h2>

<p><strong>Name:</strong> <?= $lawyer['name'] ?></p>
<p><strong>Email:</strong> <?= $lawyer['email'] ?></p>
<p><strong>Phone:</strong> <?= $lawyer['phone'] ?></p>
<p><strong>Specialization:</strong> <?= $lawyer['specialization'] ?></p>
<p><strong>Location:</strong> <?= $lawyer['location'] ?></p>
<p><strong>Experience:</strong> <?= $lawyer['experience_years'] ?> years</p>
<p><strong>Summary:</strong> <?= $lawyer['profile_summary'] ?></p>

<hr>
<h3>Book Appointment</h3>
<form method="post" action="book_appointment.php">
    <input type="hidden" name="lawyer_id" value="<?= $lawyer_id ?>">
    Appointment Date:
    <input type="date" name="appointment_date" required><br><br>
    Time:
    <input type="time" name="appointment_time" required><br><br>
    <input type="submit" value="Book Appointment">
</form>

</body>
</html>
