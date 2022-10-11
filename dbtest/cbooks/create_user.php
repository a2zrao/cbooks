<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cbooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // collect value of input field
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $gender = mysqli_real_escape_string($conn,$_POST['gen']);
    $org = mysqli_real_escape_string($conn,$_POST['org']);
    $field = mysqli_real_escape_string($conn,$_POST['field']);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $phno = mysqli_real_escape_string($conn,$_POST['phn']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']);

    $sql = "INSERT INTO profile (id, fname, lname, gender, org, field, email, phno, dob) VALUES ('$id' , '$fname'  , '$lname' , '$gender' , '$org' , '$field' , '$email' , '$phno' , '$dob' )";


if(mysqli_query($conn, $sql)){
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close(); 
?> 
