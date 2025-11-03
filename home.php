<?php
session_start();

// Username & Password li s7i7
$correct_username = "admin";
$correct_password = "1234";

// Check ila jat b POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validation
    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: index.php?error=1"); // Erreur login
        exit();
    }
} else {
    // Direct access walo login? Redirect
    header("Location: index.php");
    exit();
}
?>