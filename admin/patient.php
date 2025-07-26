<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard - ClyraMed</title>
    <!-- Main CSS file for layout and styling -->
    <link rel="stylesheet" href="style.css">
    <!-- Remix Icon CDN for icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!-- ================= HEADER SECTION ================= -->
    <section class="header">
        <!-- Logo and sidebar toggle button -->
        <div class="logo">
            <!-- Menu icon (used to open/close sidebar) -->
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Clyra<span>Med</span></h2>
        </div>

        <!-- Right section: search bar, notifications, and profile -->
        <div class="search--notification--profile">
            <!-- Search box -->
            <div class="search">
                <input type="text" placeholder="Search...">
                <button><i class="ri-search-2-line"></i></button>
            </div>

            <!-- Notification and profile icons -->
            <div class="notification--profile">
                <div class="picon lock"><i class="ri-lock-line"></i></div>
                <div class="picon bell"><i class="ri-notification-2-line"></i></div>
                <div class="picon chat"><i class="ri-wechat-2-line"></i></div>
                <!-- Profile picture -->
                <div class="picon profile">
                    <img src="component/profile.jpg" alt="Profile Picture">
                </div>
            </div>
        </div>
    </section>

    <!-- ================= MAIN SECTION ================= -->
    <section class="main">
        <!-- ========== Sidebar navigation (included from another file) ========== -->
        <?php include 'component/sidebar.php'; ?>

        <!-- ========== Main content area ========== -->
        <div class="main--content">

            <!-- ===== Overview cards section ===== -->
            <div class="overview">
                <!-- Title and filter dropdown -->
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

                <!-- Summary statistic cards -->
                <div class="cards">
                    <!-- Total Doctors Card -->
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Total Doctors</h5>
                                <h1>152</h1>
                            </div>
                            <i class="ri-user-2-line card--icon--lg"></i>
                        </div>
                        <!-- Percentage and changes -->
                        <div class="card--stats">
                            <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                            <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                            <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                        </div>
                    </div>

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

            <!-- ===== Recent Patients Table ===== -->
            <div class="recents-patients">
                <!-- Title and Add Patient button -->
                <div class="title">
                    <h2 class="section--title">Recent Patients</h2>
                    <button class="add"><i class="ri-add-line"></i>Add Patient</button>
                </div>

                <!-- Table displaying list of recent patients -->
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
                            <!-- Sample patient row -->
                            <tr>
                                <td>Cameron Williamson</td>
                                <td>24/07/2025</td>
                                <td>Male</td>
                                <td>29</td>
                                <td class="pending">Pending</td>
                                <td>
                                    <i class="ri-edit-line edit"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Sarah Connor</td>
                                <td>23/07/2025</td>
                                <td>Female</td>
                                <td>34</td>
                                <td class="rejected">Rejected</td>
                                <td>
                                    <i class="ri-edit-line edit"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>James Brown</td>
                                <td>22/07/2025</td>
                                <td>Male</td>
                                <td>41</td>
                                <td class="pending">Pending</td>
                                <td>
                                    <i class="ri-edit-line edit"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Sidebar functionality script -->
    <script src="component/sidebar.js"></script>
</body>
</html>
