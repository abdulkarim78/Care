<?php include('../code.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors - ClyraMed</title>

    <!-- External CSS and Remix Icon Library -->
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Internal Styling for Doctor Cards -->
</head>

<body>
    <!-- Include Header and Sidebar -->
    <?php include 'component/header.php'; ?>
    <section class="main">
        <?php include 'component/sidebar.php'; ?>

        <div class="main--content">
            

<!-- ===== Doctors section ===== -->
<div class="doctors">
    <div class="title">
        <h2 class="section--title">Doctors</h2>
        <div class="doctors--right--btns">
            <select name="availability_filter" id="availability_filter" class="dropdown doctor--filter" onchange="filterDoctors(this.value)">
                <option value="">Filter</option>
                <option value="Free">Free</option>
                <option value="Scheduled">Scheduled</option>
            </select>
            <a href="addDoctor.php">
                <button class="add"><i class="ri-add-line"></i> Add Doctor</button>
            </a>
        </div>
    </div>

    <div class="doctors--cards" id="doctorCards">
        <?php
        while ($doctor = mysqli_fetch_assoc($viewDoctorResult)) { ?>
            <a href="#" class="doctor--card" data-status="<?= htmlspecialchars($doctor['doctorAvailability']) ?>">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="../assets/doctor.png" alt="Doctor Image">
                    </div>
                </div>
                <h3><?= htmlspecialchars($doctor['doctorName']) ?></h3>

                <!-- Availability Date -->
                <p><strong>Date:</strong>
                    <?= (!empty($doctor['availability_date']) && $doctor['availability_date'] !== '0000-00-00') 
                        ? date('d M Y', strtotime($doctor['availability_date'])) 
                        : 'N/A' ?>
                </p>

                <!-- Availability Time -->
                <p><strong>Time:</strong>
                    <?= (!empty($doctor['availability_time']) && $doctor['availability_time'] !== '00:00:00') 
                        ? date('h:i A', strtotime($doctor['availability_time'])) 
                        : 'N/A' ?>
                </p>
            </a>
        <?php } ?>
    </div>
</div>

            <!-- ===== Recent Doctors Table ===== -->
            <div class="recents-patients">
                <div class="title">
                    <h2 class="section--title">Recent Doctors</h2>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date Joined</th>
                                <th>Specialty</th>
                                <th>Status</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dr. John Smith</td>
                                <td>24/07/2025</td>
                                <td>Cardiologist</td>
                                <td class="scheduled">Scheduled</td>
                                <td>
                                    <a href="editDoctor.php" class="icon-link">
                                        <i class="ri-edit-line edit" title="Edit"></i>
                                    </a>
                                    <a href="delete.php" class="icon-link">
                                        <i class="ri-delete-bin-line delete" title="Delete"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Emily Davis</td>
                                <td>20/07/2025</td>
                                <td>Dermatologist</td>
                                <td class="free">Free</td>
                                <td>
                                    <a href="edit.php" class="icon-link">
                                        <i class="ri-edit-line edit" title="Edit"></i>
                                    </a>
                                    <a href="delete.php" class="icon-link">
                                        <i class="ri-delete-bin-line delete" title="Delete"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Sidebar JS Toggle -->
    <script src="component/sidebar.js"></script>
</body>

</html>
