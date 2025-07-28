<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="main">
        <?php include 'component/sidebar.php'; ?>
        
        <div class="main--content">
            <div class="title">
                <h2 class="section--title">Add Doctor</h2>
            </div>

            <form method="POST" action="../code.php" class="form">
                <label>Name:</label>
                <input type="text" name="doctorName" required>

                <label>Age:</label>
                <input type="number" name="doctorAge" required>

                <label>Email:</label>
                <input type="email" name="doctorEmail" required>

                <label>Gender:</label>
                <select name="doctorGender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label>Phone Number:</label>
                <input type="text" name="doctorPhoneNumber" required>

                <label>Qualification:</label>
                <input type="text" name="doctorQualification" required>

                <label>Availability:</label>
                <select name="doctorAvailability" required>
                    <option value="Free">Free</option>
                    <option value="Scheduled">Scheduled</option>
                </select>

                <button type="submit" class="add" name="addDoctor">Save Doctor</button>
            </form>
        </div>
    </section>
</body>
</html>
