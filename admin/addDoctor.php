<?php include('../code.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctors</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <?php include 'component/header.php'; ?>

    <section class="main">
        <?php include 'component/sidebar.php'; ?>

        <div class="main--content">
            <div class="title">
                <center><h2 class="section--title">Register New Doctors</h2></center>
            </div>

            <!-- =================== FORM START =================== -->
            <div class="doctor-form-wrapper">
                <form action="addDoctor.php" method="POST" class="form wide-form" autocomplete="off">
                    <h2>Add Doctor</h2>

                    <div class="form-grid">

                        <div class="form-group">
                            <label for="doctorName">Doctor Name:</label>
                            <input type="text" id="doctorName" name="doctorName" placeholder="Enter full name" required>
                        </div>

                        <div class="form-group">
                            <label for="doctorAge">Age:</label>
                            <input type="number" id="doctorAge" name="doctorAge" placeholder="Enter age" required>
                        </div>

                        <div class="form-group">
                            <label for="doctorEmail">Email Address:</label>
                            <input type="email" id="doctorEmail" name="doctorEmail" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label for="doctorGender">Gender:</label>
                            <select id="doctorGender" name="doctorGender" class="box" required>
                                <option value="" disabled selected>Select gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="doctorPhoneNumber">Phone Number:</label>
                            <input type="tel" id="doctorPhoneNumber" name="doctorPhoneNumber" placeholder="Enter phone" required>
                        </div>

                        <div class="form-group">
                            <label for="doctorSpecialization">Specialization</label>
                            <input type="text" id="doctorSpecialization" name="doctorSpecialization" placeholder="Enter Specialization" required>
                        </div>

                       <div class="form-group">
    <label for="doctorAvailability">Availability:</label>
    <select id="doctorAvailability" name="doctorAvailability" class="box" required>
        <option value="" disabled selected>Select availability</option>
        <option value="Free" name="doctorAvailability">Free</option>
        <option value="Scheduled" name="doctorAvailability">Scheduled</option>
    </select>
</div>
<div class="form-group">
    <label for="availabilityDate">Availability Date:</label>
    <input type="date" id="availabilityDate" name="availability_date" class="box" required>
</div>

<div class="form-group">
    <label for="availabilityTime">Availability Time:</label>
    <input type="time" id="availabilityTime" name="availability_time" class="box" required>
</div>



                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn" name="addDoctor">Add Doctor</button>
                </form>
            </div>
            <!-- =================== FORM END =================== -->

        </div>
    </section>

    <script src="component/sidebar.js"></script>
</body>
</html>
