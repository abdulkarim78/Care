<?php
session_start();
$message = [];

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Dummy condition – Replace with actual DB logic
    if ($password !== $cpassword) {
        $message[] = "Passwords do not match!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = "Invalid email format!";
    } else {
        // You'd normally save to a database here
        $message[] = "Account created successfully! You can now log in.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ClyraMed - Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<section class="sign-contact" id="sign-contact">
    <h1 class="heading">Sign Up</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
        if (!empty($message)) {
            foreach ($message as $msg) {
                echo '<p class="message">' . $msg . '</p>';
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

        <input type="submit" value="Sign Up" name="signup" class="link-btn">

        <p style="margin-top: 10px;">Already have an account? 
            <a href="login.php" style="color: #4e9cff; text-decoration: underline;">Login here</a>
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
