<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin') {
        $_SESSION['authenticated'] = true;
        header('Location: admin.php');
    } else {
        header('Location: login.php?error=Invalid username or password.');
    }
} else {
    header('Location: /admin/login.php');
}