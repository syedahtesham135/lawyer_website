<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
<style>
       form p{
           text-align: center;
        }
</style>
</head>
<body>
<h2>Register</h2>
<form method="post" action="register_submit.php">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Phone: <input type="text" name="phone" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    Role:
    <select name="role" required>
        <option value="customer">Customer</option>
        <option value="lawyer">Lawyer</option>
    </select><br><br>
    <input type="submit" value="Register">
     <p>Already have an account ? <a href="login.php">login</a></p>
</form>
</body>
</html>
