<?php
// Include the database connection script
require_once('shared/connexion.php');

// Retrieve the form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Validate the form data
$errors = array();
if (empty($name)) {
    $errors[] = 'name is required';
}
if (empty($phone)) {
    $errors[] = 'Phone number is required';
}
if (empty($email)) {
    $errors[] = 'email is required';
}
if (empty($message)) {
    $errors[] = 'message is required';
}

// If there are no errors, insert the new user into the database
if (empty($errors)) {

    // Define the query to insert the new user
    $sql = 'INSERT INTO feedback (name , phone, email, message) VALUES (?, ?, ?,?)';

    // Prepare and execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $phone, $email,$message]);

    // Redirect to a success page
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>
