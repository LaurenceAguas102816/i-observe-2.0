<?php
$host = "localhost";
$user = "root";
$password = ""; // default XAMPP password
$database = "observation_tool"; // database name

$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");

$_SESSION['loggedin'] = true;
$_SESSION['username'] = '';
$_SESSION['user_role'] = 'guest';
$_SESSION['last_activity'] = time(); // Store the time of last activity
$_SESSION['expire_time'] = 1800; // Set timeout period in seconds (30 minutes)
$_SESSION['is_logged_in'] = false;
$_SESSION['login_attempts'] = 0;
$_SESSION['max_login_attempts'] = 5;
$_SESSION['login_timestamp'] = time();
$_SESSION['login_expiry'] = time() + (30 * 60); // 30 minutes from now
$_SESSION['login_error'] = false;
$_SESSION['failed_login_attempts'] = 0;
$_SESSION['last_login_attempt'] = time();
$_SESSION['login_success'] = false;
$_SESSION['login_message'] = 'You have successfully logged in!';
$_SESSION['login_error_message'] = 'Invalid username or password. Please try again.';
$_SESSION['login_attempt_time'] = time();
?>