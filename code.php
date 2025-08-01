<?php
// db Connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "care";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//Add Doctor Details
if(isset($_POST['addDoctor'])){
  $doctorName = $_POST['doctorName'];
  $doctorAge = $_POST['doctorAge'];
  $doctorEmail = $_POST['doctorEmail'];
  $doctorGender = $_POST['doctorGender'];
  $doctorPhoneNumber = $_POST['doctorPhoneNumber'];
  $doctorQualification = $_POST['doctorQualification'];
  $doctorAvailability = $_POST['doctorAvailability'];
  
  $addDoctorQuery = "INSERT INTO doctors (doctorName, doctorAge , doctorEmail , doctorGender , doctorPhoneNumber , doctorQualification , doctorAvailability) VALUES ('$doctorName', '$doctorAge', '$doctorEmail' , '$doctorGender' , '$doctorPhoneNumber' ,'$doctorQualification' , '$doctorAvailability')";
  $result =  mysqli_query($conn, $addDoctorQuery);

  if($result){
     echo "<script>
                window.location.href = 'dashboard.php';
              </script>";
  }
  
}

// Edit Doctor Details
if(isset($Post['editDoctor'])){
  $doctorName = $_POST['doctorName'];
  $doctorAge = $_POST['doctorAge'];
  $doctorEmail = $_POST['doctorEmail'];
  $doctorGender = $_POST['doctorGender'];
  $doctorPhoneNumber = $_POST['doctorPhoneNumber'];
  $doctorQualification = $_POST['doctorQualification'];
  $doctorAvailability = $_POST['doctorAvailability'];

mysqli_query($conn, "UPDATE doctors SET doctorName='$doctorName', doctorAge='$doctorAge' , doctorEmail='$doctorEmail' , doctorGender='$doctorGender' , doctorPhoneNumber='$doctorPhoneNumber' , doctorQualification='$doctorQualification' , doctorAvailability='$doctorAvailability'  WHERE doctorId=$id");
}

//Delete Doctor Details
if(isset($_POST['deleteDoctor'])){

    $id = $_POST['doctorId'];
    
    $deleteDoctorQuery = mysqli_query($conn,"DELETE From doctors Where doctorId = '$id'");
    
    if($deleteDoctorQuery){
      echo "<script>
      alert('Doctor Deleted Successfully!')
      location.assign('doctor.php')
      </script>";
    }
}


// Add Patient Details
if(isset($_POST['addPatient'])){
    $patientName = mysqli_real_escape_string($conn, $_POST['patientName']);
    $patientAge = mysqli_real_escape_string($conn, $_POST['patientAge']);
    $patientEmail = mysqli_real_escape_string($conn, $_POST['patientEmail']);
    $patientPhone = mysqli_real_escape_string($conn, $_POST['patientPhone']);
    $patientGender = mysqli_real_escape_string($conn, $_POST['patientGender']);

    $addPatientQuery = "INSERT INTO patients (patientName, patientAge, patientEmail, patientPhone, patientGender)
                        VALUES ('$patientName', '$patientAge', '$patientEmail', '$patientPhone', '$patientGender')";

    $result = mysqli_query($conn, $addPatientQuery);

    if($result){
        header('location:dashboard.php');
        exit;
    } else {
        echo "Query Error: " . mysqli_error($conn);
    }
}


// Edit Patient Details
if(isset($_POST['editPatient'])){
    $patientName = $_POST['patientName'];
    $patientAge = $_POST['patientAge'];
    $patientEmail = $_POST['patientEmail'];
    $patientPhone = $_POST['patientPhone'];
    $patientGender = $_POST['patientGender'];

    $editPatientQuery = "UPDATE patients SET patientName ='$patientName', patientAge = '$patientAge', patientEmail ='$patientEmail', patientPhone ='$patientPhone', patientGender ='$patientGender' WHERE patientId = $id";
    $result = mysqli_query($conn, $editPatientQuery);
    if($result){
      header('location:admin/dashboard.php');
    }
}

//Delete Patient Details
if(isset($_POST['deletePtient'])){

    $patientid = $_POST['patientId'];
    
    $deletePatientQuery = mysqli_query($conn,"DELETE From patients Where patientId = '$patientid'");
    
    if($deletePatientQuery){
      echo "<script>
      alert('Patient Deleted Successfully!')
      location.assign('patient.php')
      </script>";
    }
}

?>