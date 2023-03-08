<?php
// Include the database connection script
require_once('shared/connexion.php');

// Start a new session
session_start();

// Retrieve the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Define the query to retrieve the user record
$sql = 'SELECT * FROM user WHERE username = ?';

// Prepare and execute the query
/** @var TYPE_NAME $pdo */
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verify the user's password
if ($user && password_verify($password, $user['password'])) {
    // Password is correct - store user ID in session and redirect to dashboard
    $_SESSION['user_id'] = $user['id'];
    echo $_SESSION['user_id'];

    header("Location: ../index.php"); // to change with your project
    exit();
} else {
    // Password is incorrect - redirect back to login page with error message
    //header('Location: login.php?error=1');
    echo 'error';
    exit();
}
?>
