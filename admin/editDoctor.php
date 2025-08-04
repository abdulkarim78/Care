<?php include('../code.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctors</title>

    <!-- External stylesheet for styling -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================= HEADER SECTION ================= -->
    <!-- Including reusable header component -->
    <?php include 'component/header.php'; ?>

    <!-- ================= MAIN SECTION ================= -->
    <section class="main">

        <!-- Including sidebar component (navigation links) -->
        <?php include 'component/sidebar.php'; ?>

        <!-- Main content area beside sidebar -->
        <div class="main--content">
            
            <!-- Section title -->
            <div class="title">
              <center><h2 class="section--title">Edit Doctor Details</h2></center>  </div>

            <!-- =================== FORM START =================== -->
<div class="doctor-form-wrapper">
  <form action="addDoctor.php" method="POST" class="form wide-form">
    <h2>Edit Doctor Details</h2>

    <div class="form-grid">
      <div class="form-group">
        <label>Doctor Name:</label>
        <input type="hidden" name="doctorId" value="<?php echo $_SESSION['doctorId'];  ?>">
        <input type="text" name="doctorName" value="<?php echo $_SESSION['doctorName'];?>" placeholder="Enter full name" required>
      </div>

      <div class="form-group">
        <label>Age:</label>
        <input type="number" name="doctorAge" value="<?php echo $_SESSION['doctorAge'];?>" placeholder="Enter age" required>
      </div>

      <div class="form-group">
        <label>Email Address:</label>
        <input type="email" name="doctorEmail" value="<?php echo $_SESSION['doctorEmail'];?>" placeholder="Enter email" required>
      </div>

      <div class="form-group">
        <label>Gender:</label>
                <select name="doctorGender" class="box" required>
                    <option value="<?php if ($_SESSION['doctorGender'] == 'Male') echo 'selected'; ?>">Male</option>
                    <option value="<?php if ($_SESSION['doctorGender'] == 'Female') echo 'selected'; ?>">Female</option>
                    <option value="<?php if ($_SESSION['doctorGender'] == 'Other') echo 'selected'; ?>">Other</option>
                </select>
      </div>

      <div class="form-group">
        <label>Phone Number:</label>
        <input type="tel" name="doctorPhoneNumber" value="<?php echo $_SESSION['doctorPhoneNumber'];?>" placeholder="Enter phone" required>
      </div>

       <div class="form-group">
                            <label for="doctorSpecialization">Specialization</label>
                            <input type="text" id="doctorSpecialization" name="doctorSpecialization" value="<?php $_SESSION['doctorSpecialization']?>" placeholder="Enter Specialization" required>
                        </div>
      
                    <div class="form-group">
    <label for="doctorAvailability">Availability:</label>
    <select id="doctorAvailability" name="doctorAvailability" class="box" required>
        <option value="" disabled selected>Select availability</option>
        <option value="<?php $_SESSION['doctorAvailability'] == 'Free' ?>">Free</option>
        <option value="<?php $_SESSION['doctorAvailability'] == 'Scheduled' ?>">Scheduled</option>
    </select>
</div>

<div class="form-group">
    <label for="doctorAvailabilityDate">Available Date:</label>
    <input type="date" id="doctorAvailabilityDate" name="doctorAvailabilityDate" value="<?php $_SESSION['doctorAvailabilityDate']?>" class="box" required>
</div>

<div class="form-group">
    <label for="doctorAvailabilityTime">Available Time:</label>
    <input type="time" id="doctorAvailabilityTime" name="doctorAvailabilityTime" value="<?php $_SESSION['doctorAvailabilityTime']?>" class="box" required>
</div>
</div>
                

                <!-- Submit Button -->
    <button type="submit" class="submit-btn" name="editDoctor">Edit Doctor</button>
            </form>
            </div>
            <!-- =================== FORM END =================== -->
        
    </section>

    <!-- Sidebar toggle JavaScript (for responsive toggle menu) -->
    <script src="component/sidebar.js"></script>
</body>

</html>