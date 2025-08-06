<?php
session_start();
include 'code.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email_or_name = trim($_POST['email']);
  $password = trim($_POST['password']);
  $role = $_POST['role'];

  // Try to match either email or username
  $sql = "SELECT * FROM users WHERE (email = ? OR name = ?) AND role = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $email_or_name, $email_or_name, $role);
  $stmt->execute();
  $res = $stmt->get_result();
  if ($res->num_rows === 1) {
    $user = $res->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['role'] = $user['role'];
      $_SESSION['name'] = $user['name'];
if ($user['role'] === 'admin') {
    header("Location: admin/dashboard.php"); // ✅ Correct spelling

} elseif ($user['role'] === 'doctor') {
    header("Location: doctor/dashboard.php");
} elseif ($user['role'] === 'patient') {
    header("Location: index.php");
}
    }
      exit;
    } else {
      $error = "Invalid password.";
    }
  } else {
    $error = "User not found.";
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ClyraMed - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ✅ Link your CSS file -->
    <link rel="stylesheet" href="./assets/css/index.css">
      <!------------Font Awesome cdn link ------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!--------bootstrap cdn link-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!---------Custom css link------>
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



<section class="login-contact" id="login">
    <h2 class="heading">Login</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
        if (!empty($message)) {
            foreach ($message as $msg) {
                echo '<p class="message">' . $msg . '</p>';
            }
        }
        ?>

        <span>Your Email Address:</span>
        <input type="email" name="email" placeholder="Enter your email" class="box" required>

        <span>Your Password:</span>
        <input type="password" name="password" placeholder="Enter your password" class="box" required>

        
    <span>Select Role:</span>
<select id="role" name="role" class="box" required>
  <option value="" disabled selected>Select role</option>
  <option value="admin">Admin</option>
  <option value="doctor">Doctor</option>
  <option value="patient">Patient</option>
</select>

        <input type="submit" value="Login" name="login" class="link-btn">

    <p style="margin-top: 10px;">
      Don't have an account? 
      <a href="signup.php" style="color: #4e9cff; text-decoration: underline;">Sign up here</a> <br>
      <a href="parent/parent_register.php">Register as Parent</a> |
      <a href="hospital/hospital_register.php">Register as Hospital</a>
    </p>
    </form>
</section>



    <!----------script custo link ---- -->
    <script src="./assets/js/script.js"></script>

</body>
</html>
