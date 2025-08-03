<?php 
    include('../code.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient - ClyraMed</title>

    <!-- Main CSS file for dashboard layout and component styling -->
    <link rel="stylesheet" href="style.css">

    <!-- Remix Icon CDN for UI icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>

    <!-- ================== HEADER SECTION ================== -->
    <?php include 'component/header.php'; ?>

    <!-- ================== MAIN SECTION ================== -->
    <section class="main">

        <!-- ========== SIDEBAR SECTION (Navigation links) ========== -->
        <?php include 'component/sidebar.php'; ?>

        <!-- ========== MAIN CONTENT AREA ========== -->
        <div class="main--content">

            <!-- ===== RECENT PATIENTS TABLE ===== -->
            <div class="recents-patients">

                <!-- Section Title and Add Patient Button -->
                <div class="title">
                    <h2 class="section--title">Recent Patients</h2>
                    <!-- Add Patient Button (link it to add_patient.php if applicable) -->
                    <a href="addPatient.php"><button class="add"><i class="ri-add-line"></i>Add Patient</button></a>
                </div>

                <!-- === Patients Table === -->
                 
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date In</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Fetch all patients from database
                            $viewPatientQuery = "SELECT * FROM patients ORDER BY patientId DESC";
                            $viewPatientResult = mysqli_query($conn, $viewPatientQuery);
                            
                            // Check if there are any patients
                            if(mysqli_num_rows($viewPatientResult) > 0) {
                                // Loop through each patient record
                                while($patient = mysqli_fetch_assoc($viewPatientResult)) {
                                    $patientId = $patient['patientId'];
                                    $patientName = $patient['patientName'];
                                    $patientGender = $patient['patientGender'];
                                    $patientAge = $patient['patientAge'];
                                    $patientDateIn = $patient['patientDateIn'];
                            ?>
                            <!-- ===== Example Patient Row 1 ===== -->
                            <tr>
                                <td><?php echo $patientName?></td>
                                <td><?php echo date("d-m-Y", strtotime($patientDateIn)); ?></td>
                                <td><?php echo $patientGender?></td>
                                <td><?php echo $patientAge?></td>
                                <td>
                                    <a href="editPatient.php" class="icon-link">
                                        <i class="ri-edit-line edit" title="Edit"></i>
                                    </a>

                                    <form action="patient.php" method="POST" style="display: inline;">
                                        <input type="hidden" name="patientId" value="<?= $patient['patientId'] ?>">
                                        <button type="submit" name="deletePatient" style="background: none; border: none; padding: 0; cursor: pointer; " >
                                            <i class="ri-delete-bin-line delete" title="Delete"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            }
                            else {
                                // Display message if no patients found
                                echo "<tr><td colspan='6' style='text-align:center'>No patients found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </section>

    <!-- Sidebar JavaScript logic for toggle/collapse -->
    <script src="component/sidebar.js"></script>
</body>

</html>
