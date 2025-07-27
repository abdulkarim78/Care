<?php include('../code.php');

// View Doctor Details
$viewDoctorQuery = "SELECT * FROM doctors ";
$viewDoctorResult = mysqli_query($conn, $viewDoctorQuery);
while ($doctor = mysqli_fetch_assoc($viewDoctorResult)){
    $doctorId = $doctor['doctorId'];
    $doctorName = $doctor['doctorName'];
    $doctorAge = $doctor['doctorAge'];
    $doctorEmail = $doctor['doctorEmail'];
    $doctorGender = $doctor['doctorGender'];
    $doctorPhoneNumber = $doctor['doctorPhoneNumber'];
    $doctorQualification = $doctor['doctorQualification'];
    $doctorAvailability = $doctor['doctorAvailability'];}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Main CSS for dashboard -->
    <link rel="stylesheet" href="style.css">
    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>
<body>
    <!-- ================= HEADER SECTION ================= -->
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Clyra<span>Med</span></h2>
        </div>

        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Search...">
                <button><i class="ri-search-2-line"></i></button>
            </div>

            <div class="notification--profile">
                <div class="picon lock"><i class="ri-lock-line"></i></div>
                <div class="picon bell"><i class="ri-notification-2-line"></i></div>
                <div class="picon chat"><i class="ri-wechat-2-line"></i></div>
                <div class="picon profile">
                    <img src="component/profile.jpg" alt="Profile Picture">
                </div>
            </div>
        </div>
    </section>

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
                    <!-- Filter and add doctor button -->
                    <div class="doctors--right--btns">
                        <select name="date" id="date" class="dropdown doctor--filter">
                            <option>Filter</option>
                            <option value="free">Free</option>
                            <option value="sceduled">Scheduled</option>
                        </select>
                         <a href="doctor.php">
                        <button class="add" name='addDoctorBtn'><i class="ri-add-line"></i>Add Doctor</button>
</a>
                    </div>
                </div>

                <!-- Doctor cards grid -->
                <div class="doctors--cards">
                    <!-- Each doctor card includes image and status -->
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor1.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor2.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctior3.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor4.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor5.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor6.jpg" alt="">
                            </div>
                        </div>
                        <p class="free">free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor7.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                </div>
            </div>

            <!-- Recent Patients Section -->
            <div class="recents-patients">
                <div class="title">
                    <h2 class="section--title">Recent Patient</h2>
                    <a href="patient.php">
                    <button class="add"><i class="ri-add-line"></i>Add Patient</button></a>
                </div>

                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date in</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Status</th>
                                <th>Settings</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cameron Willamson</td>
                                <td>30/02/2025</td>
                                <td>Male</td>
                                <td>25</td>
                                <td class="pending">pending</td>
                                <td>
                                    <span>
                                        <i class="ri-edit-line edit"></i>
                                        <i class="ri-delete-bin-line delete"></i>
                                    </span>
                                </td>
                            </tr>
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
