<?php include('../code.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patients</title>
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
              <center><h2 class="section--title">Register New Patients</h2></center>

            </div>

            <!-- =================== FORM START =================== -->
             <div class="doctor-form-wrapper">
  <form action="addPatient.php" method="POST" class="form wide-form">
    <h2>Add Patient</h2>

    <div class="form-grid">
      <div class="form-group">
        <label>Patient Name:</label>
        <input type="text" name="patientName" placeholder="Enter full name" required>
      </div>

      <div class="form-group">
          <label>Age:</label>
          <input type="number" name="patientAge" placeholder="Enter age" required>
        </div>

      <div class="form-group">
        <label>Email Address:</label>
        <input type="email" name="patientEmail" placeholder="Enter email" required>
      </div>

      <div class="form-group">
        <label>Phone Number:</label>
        <input type="tel" name="patientPhone" placeholder="Enter phone" required>
      </div>

      <div class="form-group">
        <label>Gender:</label>
                <select name="patientGender" class="box" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                </div>
                </div>
                

                <!-- Submit Button -->
    <button type="submit" name="addPatient" class="submit-btn">Add Patient</button>
            </form>
            </div>
            <!-- =================== FORM END =================== -->
        
    </section>

    <!-- Sidebar toggle JavaScript (for responsive toggle menu) -->
    <script src="component/sidebar.js"></script>
</body>

</html>
