<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Doctor Dashboard</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  
  <!-- Bootstrap (optional) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="doctor.css" />
</head>
<body>

  <!-- Header -->
  <header class="header fixed-top">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <a href="#" class="logo">Clyra<span>Med</span></a>

        <nav class="nav">
          <a href="#">Dashboard</a>
          <a href="#">Profile</a>
          <a href="#">Apply</a>
        </nav>

        <a href="../logout.php" class="link-btn">Logout</a>
</nav>
        <div id="menu-btn" class="fas fa-bars"></div>
      </div>
    </div>
  </header>

  <!-- Profile Section -->
  <div class="profile-container">
    <div class="background-img"></div>

    <div class="profile-card">
      <div class="profile-pic"></div>

      <h2 class="name">Ali <i class="fa-solid fa-circle-check verified-icon"></i></h2>
      <p class="title">Doctor</p>
      <p class="location">xxx, xxx, Pakistan | Male, Islam, 21 yrs</p>

      <div class="btn-group">
        <button>AI Profile</button>
        <button>Share Profile <i class="fa-solid fa-share-nodes"></i></button>
        <button>Generate CV <i class="fa-solid fa-lock"></i></button>
      </div>

      <div class="external-links">
        <p><i class="fa-brands fa-linkedin"></i> Linked-In</p>
        <p><i class="fa-solid fa-globe"></i> Portfolio</p>
      </div>

      <div class="contact">
        <p><i class="fa-regular fa-envelope"></i> xxxx</p>
        <p><i class="fa-solid fa-phone"></i>000000000</p>
      </div>
    </div>
  </div>

  <!-- Dashboard Content -->
  <div class="container dashboard-content">
    <h1 class="dashboard-title">Welcome to Your Doctor Dashboard</h1>

    <div class="section">
      <h3><i class="fa-solid fa-id-card icon"></i> Profile Details</h3>
      <p>View and update your profile information.</p>
      <a href="../admin/doctor.php" class="link-btn">View Profile</a>
      <a href="../admin/editDoctor.php" class="link-btn">Edit Profile</a>
    </div>

    <div class="section">
      <h3><i class="fa-solid fa-calendar-check icon"></i> Appointments</h3>
      <p>Check your upcoming appointments with patients.</p>
      <a href="../admin/doctor.php" class="link-btn">View Appointments</a>
    </div>

    <div class="section">
      <h3><i class="fa-solid fa-clock icon"></i> Availability</h3>
      <p>Update your availability for <strong>DAY/WEEK/MONTH</strong>.</p>
      <a href="availability.php" class="link-btn">Update Availability</a>
    </div>
  </div>
  <script src ="doctor.js"></script>

</body>
</html>
