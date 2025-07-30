<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient - ClyraMed</title>

    <!-- Main CSS file for dashboard layout and component styling -->
    <link rel="stylesheet" href="admin.css">

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
                                <th>Status</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- ===== Example Patient Row 1 ===== -->
                            <tr>
                                <td>Cameron Williamson</td>
                                <td>24/07/2025</td>
                                <td>Male</td>
                                <td>29</td>
                                <td class="pending">Pending</td>
                                <td>
                                    <a href="edit.php" class="icon-link">
                                        <i class="ri-edit-line edit" title="Edit"></i>
                                    </a>
                                    <a href="delete.php" class="icon-link" >
                                        <i class="ri-delete-bin-line delete" title="Delete"></i>
                                    </a>
                                </td>
                            </tr>

                            <!-- ===== Example Patient Row 2 ===== -->
                            <tr>
                                <td>Sarah Connor</td>
                                <td>23/07/2025</td>
                                <td>Female</td>
                                <td>34</td>
                                <td class="rejected">Rejected</td>
                                <td>
                                    <a href="edit.php" class="icon-link">
                                        <i class="ri-edit-line edit" title="Edit"></i>
                                    </a>
                                    <a href="delete.php" class="icon-link">
                                        <i class="ri-delete-bin-line delete" title="Delete"></i>
                                    </a>
                                </td>
                            </tr>

                            <!-- ===== Example Patient Row 3 ===== -->
                            <tr>
                                <td>James Brown</td>
                                <td>22/07/2025</td>
                                <td>Male</td>
                                <td>41</td>
                                <td class="pending">Pending</td>
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

    <!-- Sidebar JavaScript logic for toggle/collapse -->
    <script src="component/sidebar.js"></script>
</body>

</html>
