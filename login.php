<?php
include('db_login.php');
session_start();

$username = $_POST['username'];
$userPassword = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND userPassword = ?");
$stmt->bind_param("ss", $username, $userPassword);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['username'] = $username;
    $_SESSION['is_logged_in'] = true;

    echo "Login successful! Welcome, " . htmlspecialchars($username) . "! Redirecting...";
    echo '<meta http-equiv="refresh" content="2;url=ratingPage.html">';
} else {
    echo "Invalid username or password";
}

$stmt->close();
$conn->close();
?>
