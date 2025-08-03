<?php include('../code.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main CSS for dashboard -->
    <link rel="stylesheet" href="admin.css">
    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>
<body>
    <!-- ================= HEADER SECTION ================= -->
    <?php include 'component/header.php'; ?>

    <!-- ================= MAIN SECTION ================= -->
    <section class="main">
        <!-- Sidebar included -->
        <?php include 'component/sidebar.php'; ?>

        <!-- ========== Main dashboard content ========== -->
        <div class="main--content">
            <!-- Overview Section -->
            <div class="overview">
                <div class="title">
                    <h2 class="section-title">Overview</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                </div>

                <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Doctors</h5>
                                <h1>152</h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                        </div>
                    </div>

                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Patients</h5>
                                <h1>1145</h1>
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>230</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>45</span>
                        </div>
                    </div>

                    <div class="card card-3">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Schedule</h5>
                                <h1>102</h1>
                            </div>
                            <i class="ri-calendar-2-line card--icon--lg"></i>
                        </div>
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>31</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>23</span>
                        </div>
                    </div>
                </div>
            </div>

         



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
                    <?= (!empty($doctor['doctorAvailabilityDate']) && $doctor['doctorAvailabilityDate'] !== '0000-00-00') 
                        ? date('d M Y', strtotime($doctor['doctorAvailabilityDate'])) 
                        : 'N/A' ?>
                </p>

                <!-- Availability Time -->
                <p><strong>Time:</strong>
                    <?= (!empty($doctor['doctorAvailabilityTime']) && $doctor['doctorAvailabilityTime'] !== '00:00:00') 
                        ? date('h:i A', strtotime($doctor['doctorAvailabilityTime'])) 
                        : 'N/A' ?>
                </p>
            </a>
        <?php } ?>
    </div>
</div>
            

            <!-- ===== Recent Patients Section ===== -->
            <div class="recents-patients">
                <div class="title">
                    <h2 class="section--title">Recent Patient</h2>
                    <a href="addPatient.php">
                        <button class="add"><i class="ri-add-line"></i>Add Patient</button>
                    </a>
                </div>

                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date in</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $viewPatientQuery = "SELECT * FROM patients ORDER BY patientId DESC";
                            $viewPatientResult = mysqli_query($conn, $viewPatientQuery);

                            if (mysqli_num_rows($viewPatientResult) > 0) {
                                while ($patient = mysqli_fetch_assoc($viewPatientResult)) {
                                    $patientId = $patient['patientId'];
                                    $patientName = $patient['patientName'];
                                    $patientGender = $patient['patientGender'];
                                    $patientAge = $patient['patientAge'];
                                    $patientDateIn = $patient['patientDateIn'];
                            ?>
                                <tr>
                                    <td><?php echo $patientName; ?></td>
                                    <td><?php echo date("d-m-Y", strtotime($patientDateIn)); ?></td>
                                    <td><?php echo $patientGender; ?></td>
                                    <td><?php echo $patientAge; ?></td>
                                    <td>
                                        <span>
                                            <i class="ri-edit-line edit"></i>
                                            <i class="ri-delete-bin-line delete"></i>
                                        </span>
                                    </td>
                                </tr>
                            <?php
                                }
                            } else {
                                echo "<tr><td colspan='6' style='text-align:center'>No patients found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Sidebar JS -->
    <script src="component/sidebar.js"></script>
</body>
</html>
