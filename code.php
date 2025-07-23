<?php
// db Connection

$servername = "localhost";
$username = "root";
$password = "";
$database = "care";

// Create connection
$conn = new mysqli($servername , $username , $password , $database );

// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
// echo("Connected successfully"); 


//Add Doctor Details
if(isset($_POST['addDoctorBtn'])){
  $doctorName = $_POST['doctorName'];
  $doctorAge = $_POST['doctorAge'];
  $doctorEmail = $_POST['doctorEmail'];
  $doctorGender = $_POST['doctorGender'];
  $doctorPhoneNumber = $_POST['doctorPhoneNumber'];

  $addPatientQuery = "INSERT INTO doctors (doctorName, doctorAge , doctorEmail , doctorGender , doctorPhoneNumber) VALUES ('$doctorName', '$doctorAge', '$doctorEmail' , '$doctorGender' , '$doctorPhoneNumber')";
  $result =  mysqli_query($conn, $addPatientQuery);

}

//Delete Doctor Details
if(isset($Post['deleteDoctorBtn'])){
    $id = $_POST['doctorId'];

    $deletePatientQuery = mysqli_query($connection,"delete from doctors where doctorId = '$id'");

    if($deleteQuery){
        echo "<script>
        alert('Doctor Deleted Successfully!')
        location.assign('doctor.php')
        </script>";
    }
}

// Edit Doctor Details
if(isset($Post['editDoctorBtn'])){

  $editPatientQuery = "UPDATE doctors SET doctorName='$doctorName', doctorAge='$doctorAge' , doctorEmail='$doctorEmail' , doctorGender='$doctorGender' , doctorPhoneNumber='$doctorPhoneNumber'  WHERE doctorId=$id";

  mysqli_query($con, $sql);
  
}

?>