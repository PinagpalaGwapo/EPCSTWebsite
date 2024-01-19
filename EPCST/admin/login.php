<?php
session_start();

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == true) {
    header('Location: admin.php');
}

$error = '';

if (isset($_GET['error'])) {
    $error = urldecode($_GET['error']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.input-field {
    margin-bottom: 20px;
}

.input-field label {
    display: block;
    margin-bottom: 5px;
}

.input-field input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
}

.btn {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    font-size: 18px;
    border: none;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}
</style>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if ($error != ''): ?>
            <div class="error">
                <p><?php echo $error; ?></p>
            </div>
        <?php endif; ?>
        <form action="check.php" method="post">
            <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>