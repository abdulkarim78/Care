<?php include('../code.php'); 
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Patients</title>
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
              <center><h2 class="section--title">Edit Existing Patients</h2></center>

            </div>

            <!-- =================== FORM START =================== -->
             <div class="doctor-form-wrapper">
  <form action="editPatient.php" method="POST" class="form wide-form">
    <h2>Edit Patient</h2>

    <div class="form-grid">
      <div class="form-group">
        <label>Patient Name:</label>
        <input type="hidden" name="patientId" value="<?php echo $patientId ?>">
        <input type="text" name="patientName" value="<?php echo $_SESSION['patientName'] ?>" placeholder="Enter full name" required>
      </div>

      <div class="form-group">
          <label>Age:</label>
          <input type="number" name="patientAge" value="<?php echo $_SESSION['patientAge']; ?>" placeholder="Enter age" required>
        </div>

      <div class="form-group">
        <label>Email Address:</label>
        <input type="email" name="patientEmail" value="<?php echo $_SESSION['patientEmail']; ?>" placeholder="Enter email" required>
      </div>

      <div class="form-group">
        <label>Phone Number:</label>
        <input type="tel" name="patientPhone" value="<?php echo $_SESSION['patientPhone']; ?>" placeholder="Enter phone" required>
      </div>

      <div class="form-group">
        <label>Gender:</label>
                <select name="patientGender" class="box" required>
                    <option value="Male" <?php if ($_SESSION['patientGender'] == 'Male') echo 'selected';?>>Male</option>
                    <option value="Female" <?php if ($_SESSION['patientGender'] == 'Female') echo 'selected';?>>Female</option>
                    <option value="Other" <?php if ($_SESSION['patientGender'] == 'Other') echo 'selected';?>>Other</option>
                </select>
      </div>
   </div>
                

                <!-- Submit Button -->
    <button type="submit" class="submit-btn"  name="editPatient">Edit Patient</button>
            </form>
            </div>
            <!-- =================== FORM END =================== -->
        
    </section>

    <!-- Sidebar toggle JavaScript (for responsive toggle menu) -->
    <script src="component/sidebar.js"></script>
</body>

</html>
