<?php include('../code.php'); ?>
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
        <input type="hidden" name="doctorId" value="<?php echo $doctorId;  ?>">
        <input type="text" name="doctorName" value="<?php echo $doctorName?>" placeholder="Enter full name" required>
      </div>

      <div class="form-group">
        <label>Age:</label>
        <input type="number" name="doctorAge" value="<?php echo $doctorAge?>" placeholder="Enter age" required>
      </div>

      <div class="form-group">
        <label>Email Address:</label>
        <input type="email" name="doctorEmail" value="<?php echo $doctorEmail?>" placeholder="Enter email" required>
      </div>

      <div class="form-group">
        <label>Gender:</label>
                <select name="doctorGender" va class="box" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
      </div>

      <div class="form-group">
        <label>Phone Number:</label>
        <input type="tel" name="doctorPhoneNumber" placeholder="Enter phone" required>
      </div>

      <div class="form-group">
        <label>Qualification:</label>
        <input type="text" name="doctorQualification" placeholder="Enter qualification" required>
      </div>

      <div class="form-group">
        <label>Availability:</label>
                <select name="doctorAvailability" class="box" required>
                    <option value="Free">Free</option>
                    <option value="Scheduled">Scheduled</option>
                </select>
                </div>
                </div>
                

                <!-- Submit Button -->
    <button type="submit" class="submit-btn" name="addDoctor">Add Doctor</button>
            </form>
            </div>
            <!-- =================== FORM END =================== -->
        
    </section>

    <!-- Sidebar toggle JavaScript (for responsive toggle menu) -->
    <script src="component/sidebar.js"></script>
</body>

</html>