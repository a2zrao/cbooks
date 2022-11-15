<?php 
include("db.php");

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
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "INSERT INTO profile (id, fname, lname, gender, org, field, email, phno, dob, pwd) VALUES ('$id' , '$fname'  , '$lname' , '$gender' , '$org' , '$field' , '$email' , '$phno' , '$dob' , '$pwd')";


if(mysqli_query($conn, $sql)){
  echo "New record created successfully";
  echo "<br> Entry for : <strong>" .$id. "</strong> with password <strong>" . $pwd. "</strong><br> Thank You " .$fname. "  ".$lname;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("location: login.html");
$conn->close(); 
?> 
