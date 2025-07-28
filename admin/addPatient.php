<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard - ClyraMed</title>

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

            <!-- ===== OVERVIEW CARDS ===== -->
            <div class="overview">

                <!-- Title + Date filter dropdown -->
                <div class="title">
                    <h2 class="section-title">Overview</h2>
                    <select name="date" id="date" class="dropdown">
                        <option value="today">Today</option>
                        <option value="lastweek">Last Week</option>
                        <option value="lastmonth">Last Month</option>
                        <option value="lastyear">Last Year</option>
                        <option value="alltime">All Time</option>
                    </select>
                </div>

                <!-- === Summary cards (Patients & Schedule) === -->
                <div class="cards">

                    <!-- Total Patients Card -->
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

                    <!-- Schedule Card -->
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

            <!-- ===== RECENT PATIENTS TABLE ===== -->
            <div class="recents-patients">

                <!-- Section Title and Add Patient Button -->
                <div class="title">
                    <h2 class="section--title">Recent Patients</h2>
                    <!-- Add Patient Button (link it to add_patient.php if applicable) -->
                    <a href="add_patient.php"><button class="add"><i class="ri-add-line"></i>Register Patient</button></a>
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
