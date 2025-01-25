<?php
include 'db_conn.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validate that all fields are filled
    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($confirm_password)) {
        $errors[] = "Confirm Password is required.";
    }

    if (!empty($password) && $password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
        exit; // Stop the script if there are errors
    }

    // If no errors, hash the password and insert data
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, email, password ) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sss", $username, $email, $password_hash);

    if ($stmt->execute()) {
        // Redirect to the homepage after successful registration
        header("Location: homepage-user.html"); 
        exit();
    } else {
        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
