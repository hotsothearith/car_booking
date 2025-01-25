<?php
include 'db_conn.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate form fields
    $errors = [];

    if (empty($email)) {
        $errors[] = "Email is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        // Check if the email exists in the database
        $query = "SELECT user_id, password FROM users WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Start a session and set session variables
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $email;

                // Redirect to the homepage
                header("Location: homepage-user.html");
                exit();
            } else {
                echo "<p style='color: red;'>Invalid password.</p>";
            }
        } else {
            echo "<p style='color: red;'>No account found with this email.</p>";
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
