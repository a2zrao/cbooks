

<?php
$servername = "database-1.cdpvsu40laxq.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "Cutm123456789";
$dbname = "cbooks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


session_start();

if(isset($_POST['login'])){
	$user = $_POST['id'];
	$password = $_POST['pwd'];
	$query="SELECT * FROM `profile` WHERE id = '$user' && pwd = '$password'";
	$result=mysqli_query($conn, $query);

	if($result){
		while($row = mysqli_fetch_array($result)){
			$_SESSION['name']=$user;
			//echo '<script type = "text/javascript"> alert(" Login Successful '.$row['fname'].''.$row['lname'].' ") </script> ';
			header("location: profile.php");
		}

//session_register("username");

// $_SESSION['name']=$username;

// echo '<script type = "text/javascript"> alert(" Login Successful '.$_SESSION['name'].' ") </script> '; 

// header("location: profile.php");

	}else{
		$error = 'Please enter Valid Username and Password';
	}
}

?>
