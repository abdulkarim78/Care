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
  
  $addPatientQuery = "INSERT INTO doctors (doctorName, doctorAge , doctorEmail , doctorGender , doctorPhoneNumber , doctorQualification , doctorAvailability) VALUES ('$doctorName', '$doctorAge', '$doctorEmail' , '$doctorGender' , '$doctorPhoneNumber' ,'$doctorQualification' , '$doctorAvailability')";
  $result =  mysqli_query($conn, $addPatientQuery);

  if($result){
    header('location:admin/dashboard.php');
  }
  
}

// Edit Doctor Details
if(isset($Post['editDoctorBtn'])){
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
if(isset($_POST['deleteDoctorBtn'])){

    $id = $_POST['doctorId'];
    
    $deletePatientQuery = mysqli_query($conn,"DELETE From doctors Where doctorId = '$id'");
    
    if($deleteQuery){
      echo "<script>
      alert('Doctor Deleted Successfully!')
      location.assign('doctor.php')
      </script>";
    }

  }
?>