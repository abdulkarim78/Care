<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>

    <!-- External stylesheet for styling -->
    <link rel="stylesheet" href="admin.css">
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
              <center><h2 class="section--title">Register New Doctor</h2></center>

            </div>

            <!-- =================== FORM START =================== -->
             <div class="doctor-form-wrapper">
  <form action="adddoctor.php" method="POST" class="form wide-form">
    <h2>Add Doctor</h2>

    <div class="form-grid">
      <div class="form-group">
        <label>Doctor Name:</label>
        <input type="text" name="name" placeholder="Enter full name" required>
      </div>

      <div class="form-group">
        <label>Email Address:</label>
        <input type="email" name="email" placeholder="Enter email" required>
      </div>

      <div class="form-group">
        <label>Phone Number:</label>
        <input type="tel" name="phone" placeholder="Enter phone" required>
      </div>

      <div class="form-group">
        <label>Qualification:</label>
        <input type="text" name="qualification" placeholder="Enter qualification" required>
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
    <button type="submit" class="submit-btn">Add Doctor</button>
            </form>
            </div>
            <!-- =================== FORM END =================== -->
        
    </section>

    <!-- Sidebar toggle JavaScript (for responsive toggle menu) -->
    <script src="component/sidebar.js"></script>
</body>

</html>
