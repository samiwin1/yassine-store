<?php
// Include the database connection script
require_once('shared/connexion.php');



    // Retrieve the form data
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $checkPassword = $_POST['check_password'];

    // Validate the form data
    $errors = array();
    if (empty($username)) {
        $errors[] = 'Username is required';
    }
    if (empty($phone)) {
        $errors[] = 'Phone number is required';
    }
    if (empty($password)) {
        $errors[] = 'Password is required';
    }
    if ($password !== $checkPassword) {
        $errors[] = 'Passwords do not match';
    }

    // If there are no errors, insert the new user into the database
    if (empty($errors)) {

        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Define the query to insert the new user
        $sql = 'INSERT INTO user (username, phone, password) VALUES (?, ?, ?)';

        // Prepare and execute the query
        /** @var TYPE_NAME $pdo */
       $stmt = $pdo->prepare($sql);
       $stmt->execute([$username, $phone, $hashedPassword]);

   // Redirect to a success page
   header('Location: ../index.php');
   exit();
}

?>
