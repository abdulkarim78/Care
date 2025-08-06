<?php
session_start();
include 'code.php'; // ✅ your DB connection file

$message = [];

if (isset($_POST['signup'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $role = $_POST['role']; // NEW: capture user role

    // Basic validation
    if ($password !== $cpassword) {
        $message[] = "❌ Passwords do not match!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = "❌ Invalid email format!";
    } else {
        // Check if user already exists
        $checkStmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $checkStmt->bind_param("s", $email);
        $checkStmt->execute();
        $checkStmt->store_result();

        if ($checkStmt->num_rows > 0) {
            $message[] = "❌ Email is already registered!";
        } else {
            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user
            $insertStmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
            $insertStmt->bind_param("ssss", $name, $email, $hashedPassword, $role);
if ($insertStmt->execute()) {
    // Redirect to login page after signup
    header("Location: login.php");
    exit(); // Always exit after header redirection
} else {
    $message[] = "❌ Failed to create account. Try again.";
}

        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ClyraMed - Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css">
</head>
<body>

<header class="header fixed-top">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <a href="#home" class="logo">Clyra<span>Med</span></a>
    </div>
  </div>
</header>

<section class="sign-contact" id="sign-contact">
    <h1 class="heading">Sign Up</h1>

    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <?php
        if (!empty($message)) {
            foreach ($message as $msg) {
                echo '<div class="alert alert-info">' . $msg . '</div>';
            }
        }
        ?>

        <span>Your Name:</span>
        <input type="text" name="name" placeholder="Enter your name" class="box" required>

        <span>Your Email Address:</span>
        <input type="email" name="email" placeholder="Enter your email" class="box" required>

        <span>Password:</span>
        <input type="password" name="password" placeholder="Create a password" class="box" required>

        <span>Confirm Password:</span>
        <input type="password" name="cpassword" placeholder="Re-enter password" class="box" required>

        <span>Select Role:</span>
        <select name="role" class="box" required>
            <option value="" disabled selected>Select role</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
            <option value="admin">Admin</option>
        </select>

        <input type="submit" value="Sign Up" name="signup" class="link-btn">

        <p style="margin-top: 10px;">Already have an account?
            <a href="login.php" style="color: #4e9cff; text-decoration: underline;">Login here</a>
        </p>
    </form>
</section>

<script src="./assets/js/script.js"></script>
</body>
</html>

 ]