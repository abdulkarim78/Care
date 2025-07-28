<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors - ClyraMed</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Remix Icon CDN -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        /* Page-specific styling */
        .doctors--cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 25px;
            margin-top: 20px;
        }

        .doctor--card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .doctor--card:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .img--box--cover {
            border: 2px solid #00b8b8;
            padding: 3px;
            border-radius: 50%;
            display: inline-block;
            margin-bottom: 10px;
        }

        .img--box {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            overflow: hidden;
        }

        .img--box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .doctor--card h4 {
            margin: 10px 0 5px;
            font-size: 1rem;
            font-weight: 600;
        }

        .specialty {
            color: #777;
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        .status {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            color: #fff;
        }

        .status.free {
            background-color: #70d7a5;
        }

        .status.scheduled {
            background-color: #5073fb;
        }
    </style>
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

        <!-- ========== Main content area ========== -->
        <div class="main--content">
            <!-- ===== Doctors Grid Section ===== -->
            <div class="doctors">
                <div class="title">
                    <h2 class="section--title">Our Doctors</h2>
                    <div class="doctors--right--btns">
                        <select name="filter" class="dropdown doctor--filter">
                            <option>Filter</option>
                            <option value="free">Free</option>
                            <option value="scheduled">Scheduled</option>
                        </select>
                        <a href="./addDoctor.php">
                            <button class="add"><i class="ri-add-line"></i> Add Doctor</button>
                        </a>
                    </div>
                </div>

                <!-- Doctor Cards -->
                <div class="doctors--cards">
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="doctor1.jpg" alt="Dr. John Smith">
                            </div>
                        </div>
                        <h4>Dr. John Smith</h4>
                        <p class="specialty">Cardiologist</p>
                        <span class="status scheduled">Scheduled</span>
                    </a>

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
                                    <i class="ri-edit-line edit" name="editDoctor"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>Dr. Emily Davis</td>
                                <td>20/07/2025</td>
                                <td>Dermatologist</td>
                                <td class="free">Free</td>
                                <td>
                                    <i class="ri-edit-line edit" name="editDoctor"></i>
                                    <i class="ri-delete-bin-line delete"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Sidebar toggle script -->
    <script src="component/sidebar.js"></script>
</body>
</html>