<?php


session_start();
$_SESSION['isLoggedIn'] = true;
$message = [];

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ✅ Replace with your actual DB connection and user verification
    // For now, we use a dummy check
    if ($email === "test@example.com" && $password === "123456") {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['user_email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $message[] = "Invalid login credentials!";
    }
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

    <!---------Custom css link------>
    <link rel="stylesheet" href="./assets/css/index.css">

</head>
<body>
<!--heaader section start-------->

   
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

        <input type="submit" value="Login" name="login" class="link-btn">

        <p style="margin-top: 10px;">Don't have an account? 
            <a href="signup.php" style="color: #4e9cff; text-decoration: underline;">Sign up here</a>
        </p>
    </form>
</section>

   <!-------------footer section starts---------->
<section class="footer">
    <div class="box-container container">
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone Number</h3>
            <p>+123-456-76890</p>
            <p>+111-456-7890</p>
        </div>

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Your Address</h3>
            <p>Karachi, Pakistan - 12039</p>
        </div>

        <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Opening Hours</h3>
            <p>24/7 Hours Daily</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email Address</h3>
            <p>ClyraMed@gmail.com</p>
            <p>healthcentre@gmail.com</p>
        </div>
    </div>
    <p class="credit">&copy; copyright <?php echo date('Y'); ?> by <span>Clyra Med</span></p>
</section>
<!-------------footer section ends---------->

    <!----------script custo link ---- -->
    <script src="./assets/js/script.js"></script>

</body>
</html>
