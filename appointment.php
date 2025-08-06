
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatile" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClyraMed – Clarity in Care</title>

    <!------------Font Awesome cdn link ------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!--------bootstrap cdn link-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

    <!---------Custom css link------>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
 <section class="contact" id="contact">
 <h1 class="heading">Make Appointment</h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <?php
            if (isset($message)) {
                foreach ($message as $msg) {
                    echo '<p class="message">' . $msg . '</p>';
                }
            }
            ?>


            <span>Your name:</span>
            <input type="text" name="name" placeholder="Enter your name" class="box">
            <span>Your EmailAddress:</span>
            <input type="email" name="email" placeholder="Enter your email" class="box" required>
            <span>Your number:</span>
            <input type="number" name="number" placeholder="Enter your number" class="box" required>
            <span>Appointment date:</span>
            <input type="datetime-local" name="date" class="box">
            <input type="submit" value="make appointment" name="submit" class="link-btn">

        </form>
</section>
        
</body>

</html>