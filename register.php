<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<div class="container">
    <form class="card" method="POST" action="register_process.php">
        <h2>Create Account</h2>
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Register</button>
        <div class="link">
            <a href="login.php">Already have an account?</a>
        </div>
    </form>
</div>
</body>
</html>
