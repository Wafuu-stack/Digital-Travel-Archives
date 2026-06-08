<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: Login.php');
    exit;
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

$validEmail = 'user@example.com';
$validPassword = '123456';

if ($email === $validEmail && $password === $validPassword) {
    $_SESSION['user'] = [
        'email' => $email,
        'name' => 'Kiel Sunga',
    ];
    header('Location: dashboard.php');
    exit;
}

$_SESSION['login_error'] = 'Invalid email or password.';
header('Location: Login.php');
exit;
