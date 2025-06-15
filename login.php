<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form p{
           text-align: center;
        }
    </style>
</head>

<body>
    <h2>Login</h2>
    <form method="post" action="login_submit.php">
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
        <p>Don't have an account ? <a href="register.php">Create</a></p>
    </form>
</body>

</html>