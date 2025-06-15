<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role     = $_POST['role'];

    // Check if email exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        echo "Email already registered.";
        exit;
    }

    // Insert into users table
    $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, password, role) VALUES (:name, :email, :phone, :password, :role)");
    $stmt->execute([
    ':name'=>$name, 
    ':email'=>$email, 
    ':phone'=>$phone, 
    ':password'=>$password, 
    ':role'=>$role]);

    $user_id = $pdo->lastInsertId();

    // Create entry in lawyer or customer table
    if ($role === 'lawyer') {
        $pdo->prepare("INSERT INTO lawyers (user_id, specialization, location, experience_years, profile_summary) VALUES (?, '', '', 0, '')")
            ->execute([$user_id]);
    } else {
        // $pdo->prepare("INSERT INTO customers (user_id) VALUES (:user_id)")
        //     ->execute([
        //         ':user_id'=>$user_id
        //     ]);
        header("Location:login.php");
    }

}
?>
