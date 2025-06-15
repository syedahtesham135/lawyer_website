<?php
require 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Lawyers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Search for Lawyers</h2>

<form method="get">
    Specialization:
    <select name="specialization" required>
        <option value="">--Select--</option>
        <option value="criminal">Criminal</option>
        <option value="divorce">Divorce</option>
        <option value="affidavit">Affidavit</option>
        <option value="civil">Civil</option>
    </select>

    Location:
    <input type="text" name="location" placeholder="Enter city" required>

    <input type="submit" value="Search">
</form>

<?php
if (isset($_GET['specialization']) && isset($_GET['location'])) {
    $specialization = $_GET['specialization'];
    $location = $_GET['location'];

    $stmt = $pdo->prepare("
        SELECT users.id, users.name, lawyers.specialization, lawyers.location
        FROM users
        INNER JOIN lawyers ON users.id = lawyers.user_id
        WHERE lawyers.specialization = ? AND lawyers.location LIKE ?
    ");
    $stmt->execute([$specialization, "%$location%"]);
    $results = $stmt->fetchAll();

    if (count($results) > 0) {
        echo "<h3>Available Lawyers:</h3>";
        foreach ($results as $lawyer) {
            echo "<div style='margin-bottom: 20px;'>";
            echo "<strong>{$lawyer['name']}</strong><br>";
            echo "Specialization: {$lawyer['specialization']}<br>";
            echo "Location: {$lawyer['location']}<br>";
            echo "<a href='lawyer_profile.php?id={$lawyer['id']}'>View Profile</a>";
            echo "</div>";
        }
    } else {
        echo "<p>No lawyers found for this search.</p>";
    }
}
?>
</body>
</html>
