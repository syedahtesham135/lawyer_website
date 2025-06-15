<?php
require 'connection.php';
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'customer') {
    echo "You must be logged in as a customer to book.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lawyer_id = $_POST['lawyer_id'];
    $customer_id = $_SESSION['user_id'];
    $date = $_POST['appointment_date'];
    $time = $_POST['appointment_time'];

   $stmt = $pdo->prepare("
    INSERT INTO appointments (
        customer_id,
        lawyer_id,
        appointment_date,
        appointment_time,
        status
    ) VALUES (
        :customer_id,
        :lawyer_id,
        :appointment_date,
        :appointment_time,
        :status
    )
");

$stmt->execute([
    ':customer_id' => $customer_id,
    ':lawyer_id' => $lawyer_id,
    ':appointment_date' => $date,
    ':appointment_time' => $time,
    ':status' => 'pending'
]);


    echo "Appointment booked successfully. <a href='customer_panel.php'>Go back</a>";
}
?>
